const hamburgerButton = document.getElementById('hamburger');
const spNav = document.getElementById('sp-nav');
hamburgerButton.addEventListener('click', function () {
	hamburgerButton.classList.toggle("is-active");
	spNav.classList.toggle("is-active");
});
