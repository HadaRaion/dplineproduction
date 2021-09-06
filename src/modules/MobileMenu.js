class MobileMenu {
	constructor() {
		this.menu = document.querySelector('.header__nav');
		this.openButton = document.querySelector('.hamburger');
		this.menuIcon = document.querySelector('.hamburger-icon');
		this.events();
	}

	events() {
		this.openButton.addEventListener('click', () => this.openMenu());
	}

	openMenu() {
		this.menuIcon.classList.toggle('animate');
		this.menu.classList.toggle('active');
	}
}

export default MobileMenu;
