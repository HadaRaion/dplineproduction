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
				"mapHeight": "270"
				}).render();
				</script>				
			</div>
			<h3 class="contact__title">We are always open for business</h3>
			<ul class="contact__info">
				<li class="contact__info__address">
					서울시 중구 마른내로 72, 2층 252호 디피라인프로덕션
				</li>
				<li class="contact__info__call">
					<a href="tel:+82263653344">+82 2 6365 3346</a>
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
