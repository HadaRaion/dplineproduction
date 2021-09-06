<?php get_header(); ?>

<main class="site-body about">
	<div class="about__reel">
		<video preload="auto" id="dpReel" muted playsinline autoplay="autoplay" loop type="video/mp4"></video>
		<div class="scroll-down">
			<div class="chevron"></div>
			<div class="chevron"></div>
			<div class="chevron"></div>
		</div>


	</div>

	<div class="container">
		<div class="about__section about__section--slogan">
			<h1><span class="line-break">세상을 즐겁게 하는</span>콘텐츠를 만듭니다</h1>
			<h3><span class="line-break">CREATING CONTENTS</span>THAT MAKE THE WORLD FUN</h3>
		</div>

		<!-- <div class="about__section about__section--philosophy">
			<h1>Our PHILOSOPHY</h1>
			<p><?php the_field('dp_philosophy'); ?></p>
		</div> -->

		<div class="about__section about__section--service">
			<h1>Service</h1>
			<p><?php the_field('dp_service'); ?></p>
		</div>

		<!-- <div class="about__section about__section--vision">
			<h1>Our vision</h1>
			<p><?php the_field('dp_vision'); ?></p>
		</div> -->

		<div class="about__section about__section--clients">
			<h1>clients</h1>
			<img src="<?php echo esc_url(get_field('dp_clients')['url']); ?>">

		</div>
		<div class="about__section about__section--history">
			<h1>history</h1>
			<ul><?php the_content(); ?></ul>
		</div>




	</div>
</main>

<?php get_footer(); ?>
