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
    // リロード時の場所を判定して色を調整.
    headerToggleTransparent();
    window.addEventListener("scroll", headerToggleTransparent);
    accordion();
    // ローディングアニメーションの後にheroMessageを動かす
    await loadingAnimation();
    activateHeroMessage();
}
main();

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// ハンバーガーメニューのコントロール
function hamburgerControl() {
    const hamburgerButton = document.getElementById('hamburger-button');
    const spNav = document.getElementById('sp-nav');
    const drawer = document.getElementById("drawer");
    const body = document.body
    const triggerElements = [drawer, hamburgerButton];
    triggerElements.forEach(element => {
        element.addEventListener('click', function () {
            body.classList.toggle("overflow-hidden");
            hamburgerButton.classList.toggle("is-active");
            spNav.classList.toggle("is-active");
            drawer.classList.toggle("is-active");
            const isExpanded = hamburgerButton.getAttribute("aria-expanded") === 'true'
            hamburgerButton.setAttribute('aria-label', isExpanded ? 'Open Navigation Menu' : 'Close Navigation Menu');
            hamburgerButton.setAttribute("aria-expanded", String(!isExpanded));
            // ハンバーガーメニューがオン"だった"（閉じられた）場合はspNavをinert化
            spNav.inert = (isExpanded);
        });
    });
}

// スクロールでヘッダーを出し入れする（トップページのみ）
function headerToggleTransparent() {
    const header = document.getElementById("header-scroll");
    if (!header) {
        return;
    }
    const windowHeight = window.innerHeight;
    let verticalPosition;
    verticalPosition = window.scrollY
    if (verticalPosition > windowHeight) {
        header.classList.remove("header-transparent");
    } else {
        header.classList.add("header-transparent");
    }
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
            // +/-のアイコンを取得
            const icon = this.querySelector(".accordion__icon");
            this.classList.toggle("active");
            const isExpanded = this.getAttribute("aria-expanded") === 'true';
            // アイコンのトグル
            icon.textContent = isExpanded ? '\u002B' : '\u2212';
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

    if (!preloader) return;

    const visited = localStorage.getItem("visited");
    // 一度読み込まれたことがあったら表示しない
    if (localStorage.getItem("visited") &&
        Date.now() < Number(visited)) {
        return;
    } else {
        // 1日の間は再度表示しない
        localStorage.setItem("visited", Date.now() + 1000 * 60 * 60 * 24);
        // ローディング中のユーザーインタラクションを無効化.
        document.documentElement.inert = true;
        await sleep(6000);
        // ローディングアニメーションが終わったらユーザーインタラクションを有効化.
        document.documentElement.inert = false;
        // 
        preloader.style.display = 'none';
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
    if (!topVideo && !topImage) {
        return;
    }
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

// Contact Form 7のメールが正常に送られたとき、Screen Readerでメッセージを伝える
document.addEventListener('wpcf7mailsent', function (event) {
    const response = event.target.querySelector('.wpcf7-response-output');
    if (response) {
        response.removeAttribute('aria-hidden');
        response.setAttribute('role', 'status');
        response.setAttribute('aria-live', 'polite');
    }
}, false);


document.getElementById('skip-to-main')?.addEventListener('click', (e) => {
    const main = document.getElementById('main-content');
    if (!main) return;

    e.preventDefault();
    if (!main.hasAttribute('tabindex')) {
        main.setAttribute('tabindex', '-1');
    }

    main.scrollIntoView({ block: 'start' });
    requestAnimationFrame(() => {
        main.focus({ preventScroll: true });
    });
});