const videoSource = () => {
	const mainVideo = document.querySelector('.about__reel>video');
	if (window.matchMedia('(max-width: 700px)').matches) {
		mainVideo.src = '';
	} else {
		mainVideo.src = 'http://dpline.local//wp-content/themes/DPLINE/dpline_reel.mp4';
		mainVideo.autoplay = true;
		console.log('mainVideo :>> ', mainVideo);
	}
};

export default videoSource;
