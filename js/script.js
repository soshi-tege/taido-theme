// "Reduce motion"モード（"視差効果を減らす"モード）
const motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
const isMotionReduced = motionQuery.matches;

async function main() {
    if (isMotionReduced) {
        disableAnimation();
    } else {
        animateOnViewport();
    }
    topVideo();
    hamburgerControl();
    headerScroll();
    accordion();
    // ローディングアニメーションの後にheroMessageを動かす
    await loadingAnimation();
    activateHeroMessage();
    // Scrollhintを動かす
    new ScrollHint('.js-scrollable');
    // 手動でアイコンを追加（ライブラリの機能が動かないことがあるため）
    const scrollHintIcon = document.querySelector("scroll-hint-icon-wrap");
    scrollHintIcon.classList.add("is-active");
}
main();

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// ハンバーガーメニューのコントロール
function hamburgerControl() {
    const hamburgerButton = document.getElementById('hamburger-button');
    const spNav = document.getElementById('sp-nav');
    hamburgerButton.addEventListener('click', function () {
        hamburgerButton.classList.toggle("is-active");
        spNav.classList.toggle("is-active");
        const isExpanded = hamburgerButton.getAttribute("aria-expanded") === 'true'
        hamburgerButton.setAttribute('aria-label', isExpanded ? 'Open Navigation Menu' : 'Close Navigation Menu');
        hamburgerButton.setAttribute("aria-expanded", String(!isExpanded));
    });
}

// スクロールでヘッダーを出し入れする（トップページのみ）
function headerScroll() {
    const header = document.getElementById("header-scroll");
    const windowHeight = window.innerHeight;
    let verticalPosition;
    window.addEventListener("scroll", function () {
        verticalPosition = window.scrollY
        if (verticalPosition > windowHeight) {
            header.classList.remove("hidden");
        } else {
            header.classList.add("hidden");
        }
    })
}

function disableAnimation() {
    const animationElements = document.querySelectorAll(".animation");
    for (const element of animationElements) {
        element.classList.add("animated");
    }
}

function animateOnViewport() {

    // アニメートするDOM要素
    const animationElements = document.querySelectorAll(".animation-viewport");

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

    for (const element of animationElements) {
        observer.observe(element);
    }
}

// 「よくある質問」のアコーディオンアニメーション
function accordion() {
    const accordions = document.getElementsByClassName("accordion__button");
    [...accordions].forEach(accordion => {
        accordion.addEventListener("click", function () {
            this.classList.toggle("active");
            const isExpanded = this.getAttribute("aria-expanded") === 'true';
            this.setAttribute("aria-expanded", String(!isExpanded));
            // buttonの親要素（h3）の次の要素がコンテンツ
            const panel = this.parentElement.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });
}


// トップページでローディングアニメーションを表示する
async function loadingAnimation() {
    const preloader = document.getElementById("preloader");
    if (isMotionReduced) {
        preloader.style.display = "none";
    }
    if (typeof (Storage) !== "undefined" && preloader) {
        // 一度読み込まれたことがあったら表示しない
        if (sessionStorage.getItem("visited")) {
            preloader.style.display = "none";
        } else {
            sessionStorage.setItem("visited", true);
            // ローディング中のユーザーインタラクションを無効化.
            document.documentElement.inert = true;
            await sleep(6000);
            // ローディングアニメーションが終わったらユーザーインタラクションを有効化.
            document.documentElement.inert = false;
        }
    }
}

async function activateHeroMessage() {
    const messages = document.querySelectorAll(".js-hero-message");
    for (const message of messages) {
        message.classList.add("animated");
        // 次のメッセージを表示するまで3秒待つ
        await sleep(2500);
    }
}

// トップ動画を自動再生（videoタグのautoplayが動かない場合のバックアップ）
function topVideo() {
    const topVideo = document.getElementById("top-video");
    const topImage = document.getElementById("top-video-fallback");
    if (isMotionReduced) {
        topVideo.style.display = "none";
        topImage.style.display = "block";
    }
    // 動画が自動再生できるかチェック（不可の場合画像を表示）
    let promise;
    if (topVideo && topImage) {
        promise = topVideo.play();
    }
    if (promise !== undefined) {
        promise
            .catch(error => {
                if (error.name === "NotAllowedError") {
                    topVideo.remove();
                    topImage.style.display = "block";
                }

            })
            .then(() => {
                topVideo.play();
            });
    }
}