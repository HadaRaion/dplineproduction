<?php get_header(); ?>
<main class="site-body contact">
	<div class="container">
		<div class="col col--contact-info">
			<div class="contact__map">
				<div id="daumRoughmapContainer1630329534945" class="root_daum_roughmap root_daum_roughmap_landing"></div>
				<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
				<script charset="UTF-8">
				new daum.roughmap.Lander({
				"timestamp" : "1630329534945",
				"key" : "276uj",
				}).render();
				</script>				
			</div>
			<h3 class="contact__title">We are always open for business</h3>
			<p class="contact__subtitle">Whether it’s a commercial film, branded content or anything in between, we know that when we light the spark of creativity with our clients: anything is possible. Reach out to us below, and let’s create something special.</p>
			<ul class="contact__info">
				<li class="contact__info__address">
					서울시 중구 마른내로 72 252호 DPLINEPRODUCTION
				</li>
				<li class="contact__info__call">
					<a href="tel:+82263653344">+82 2 6365 3344</a>
				</li>
				<li class="contact__info__mail">
					<a mailto:dplineproduction@dpline.co>dplineproduction@dpline.co</a>
				</li>
				<li class="contact__info__youtube">
					<a href="https://www.youtube.com/channel/UCNrB6NHy3AyjOAEbCsFHmVQ" target="_blank">DPLINE Youtube</a>
				</li>
			</ul>

		</div>

		<div class="col col--contact-form">
			<?php the_content(); ?>
			<!-- <?php echo do_shortcode('[contact-form-7 id="39" title="DPLINE PRODUCTION FORM"]'); ?> -->
		</div>

	</div>
</main>
<?php get_footer(); ?>

		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.6420828115747!2d126.99360071573048!3d37.56349557979839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2e215429b93%3A0x93092d69b1f75725!2z7ISc7Jq47Yq567OE7IucIOykkeq1rCDsnbjtmITrj5ky6rCAIOuniOuluOuCtOuhnCA3Mg!5e0!3m2!1sko!2skr!4v1630328924514!5m2!1sko!2skr"  frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->