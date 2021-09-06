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
