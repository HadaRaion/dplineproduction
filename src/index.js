import '../css/style.scss';

// Our modules / classes
import MobileMenu from './modules/MobileMenu';

// Instantiate a new object using our modules/classes
const mobileMenu = new MobileMenu();

const mainVideo = document.querySelector('.about__reel>video');
if (mainVideo) {
	if (window.matchMedia('(max-width: 700px)').matches) {
		mainVideo.src = 'http://dpline.co/production/dpline_reel_mobile.mp4';
	} else {
		mainVideo.src = 'http://dpline.co/production/dpline_reel.mp4';
	}
}

function setScreenSize() {
	let vh = window.innerHeight * 0.01;

	document.documentElement.style.setProperty('--vh', `${vh}px`);
}

setScreenSize();

window.addEventListener('resize', () => setScreenSize());
window.addEventListener('touchend', () => setScreenSize());

// disableScroll = () => {
// 	document.querySelector('body').addEventListener('touchmove', this.removeEvent, { passive: false });
// 	document.querySelector('body').addEventListener('onclick', this.removeEvent, { passive: false });
// 	document.querySelector('body').addEventListener('mousewheel', this.removeEvent, { passive: false });
// };

// removeEvent = e => {
// 	e.preventDefault();
// 	e.stopPropagation();
// };

// enableScroll = () => {
// 	document.querySelector('body').removeEventListener('touchmove', this.removeEvent);
// 	document.querySelector('body').removeEventListener('onclick', this.removeEvent);
// 	document.querySelector('body').removeEventListener('mousewheel', this.removeEvent);
// };
