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
	console.log("hello")
	if (sessionStorage.getItem("visited")) {
		preloader.style.display = "none";
	} else {
		sessionStorage.setItem("visited", true);
		messages[0].style.animationDelay = "6s";
		messages[1].style.animationDelay = "7s";
	}
}


// スクロールでヘッダーを出し入れする
const header = document.getElementById("header")
let Yposition;
const Yheight = window.innerHeight;
window.addEventListener("scroll", function() {
	Yposition = window.scrollY
	console.log(Yposition, Yheight);
	if (Yposition > Yheight) {
		header.classList.remove("hidden");
	} else {
		header.classList.add("hidden");
	}
})

// YouTube hero video: if autoplay fails, try again on user interaction.
const heroIframe = document.querySelector(".hero__video");
if (heroIframe && heroIframe.tagName === "IFRAME") {
	try {
		const src = heroIframe.getAttribute("src");
		if (src) {
			const url = new URL(src);
			if (url.hostname.includes("youtube.com")) {
				const origin = url.origin;
				const win = heroIframe.contentWindow;
				if (!win) {
					return;
				}

				const sendPlay = function () {
					win.postMessage(JSON.stringify({ event: "command", func: "mute", args: [] }), origin);
					win.postMessage(JSON.stringify({ event: "command", func: "playVideo", args: [] }), origin);
				};

				heroIframe.addEventListener("load", sendPlay, { once: true });

				const retryOnUserAction = function () {
					sendPlay();
					window.removeEventListener("touchstart", retryOnUserAction);
					window.removeEventListener("click", retryOnUserAction);
				};

				window.addEventListener("touchstart", retryOnUserAction, { once: true });
				window.addEventListener("click", retryOnUserAction, { once: true });
			}
		}
	} catch (e) {
		// Ignore invalid URLs or cross-origin restrictions.
	}
}
