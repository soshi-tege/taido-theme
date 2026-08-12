// ハンバーガーメニューのコントロール

const hamburgerButton = document.getElementById('hamburger');
const spNav = document.getElementById('sp-nav');
hamburgerButton.addEventListener('click', function () {
    hamburgerButton.classList.toggle("is-active");
    spNav.classList.toggle("is-active");
});

// スクロールでヘッダーを出し入れする
const header = document.getElementById("header");
let Yposition;
const Yheight = window.innerHeight;
window.addEventListener("scroll", function () {
    Yposition = window.scrollY
    if (Yposition > Yheight) {
        header.classList.remove("hidden");
    } else {
        header.classList.add("hidden");
    }
})

const videos = document.getElementsByClassName("embedded-video");
for (const video of videos) {
    video.addEventListener("mouseover", () => {
        video.play();
    })
    video.addEventListener("mouseleave", () => {
        video.pause();
    })
}

// Intersection Observer APIでアニメーション管理（viewportに入った要素を動かす）
const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.3,
};

const callback = (entries, observer) => {
    for (const entry of entries) {
        if (entry.isIntersecting && !entry.target.classList.contains("animated")) {
            entry.target.classList.add("animated");
        }
    }
}

const observer = new IntersectionObserver(callback, options);

const animatedElements = document.querySelectorAll(".animate");

for (const element of animatedElements) {
    observer.observe(element);
}

// 「よくある質問」のアコーディオンアニメーション
var acc = document.getElementsByClassName("accordion__button");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}


// トップページでローディングアニメーションを一度だけ表示する
const preloader = document.getElementById("preloader");
if (typeof (Storage) !== "undefined" && preloader) {
    if (sessionStorage.getItem("visited")) {
        preloader.style.display = "none";
    } else {
        const messages = document.getElementsByClassName("hero__message-text");
        sessionStorage.setItem("visited", true);
        messages[0].style.animationDelay = "6s";
        messages[1].style.animationDelay = "7s";
        messages[2].style.animationDelay = "8s";
    }
}

// トップ動画を自動再生（videoタグのautoplayが動かない場合のバックアップ）
const topVideo = document.getElementById("top-animation");
const topImage = document.getElementById("top-animation-fallback");
let promise = undefined;
if (topVideo && topImage) {
    promise = topVideo.play();
}
if (promise !== undefined) {
    promise
        .catch(error => {
            // Auto-play was prevented
            // Show a UI element to let the user manually start playback
            if (error.name === "NotAllowedError") {
                console.log("Low Power Mode Active");
                topVideo.remove();
                topImage.style.display = "block";
            }

        })
        .then(() => {
            // if there is no error, then we play the video
            topVideo.play();
        });
}