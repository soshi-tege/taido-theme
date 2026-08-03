// ハンバーガーメニューのコントロール

const hamburgerButton = document.getElementById('hamburger');
const spNav = document.getElementById('sp-nav');
hamburgerButton.addEventListener('click', function () {
    hamburgerButton.classList.toggle("is-active");
    spNav.classList.toggle("is-active");
});


// ローディングアニメーションを一度だけ表示する
const preloader = document.getElementById("preloader");
const messages = document.getElementsByClassName("hero__message-text");
if (typeof (Storage) !== "undefined") {
    if (sessionStorage.getItem("visited")) {
        preloader.style.display = "none";
    } else {
        sessionStorage.setItem("visited", true);
        messages[0].style.animationDelay = "6s";
        messages[1].style.animationDelay = "7s";
        messages[2].style.animationDelay = "7s";
    }
}

// トップ画像を自動再生（videoタグのautoplayが動かない場合の予備）
const topAnimation = document.getElementById("top-animation");
try {
    topAnimation.play();
    alert("vid not hidden");
} catch {
    topAnimation.classList.add("hidden");
    alert("vid hidden");
    
}

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
    // video.addEventListener("click", () => {
    //     if (video.muted === true) {
    //         video.muted === false;
    //     } else {
    //         video.muted === true;
    //     }
    // })
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