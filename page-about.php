<?php get_header(); ?>

<main class="site-body about">
	<div class="container">
		<div class="about__reel">
			<video preload="auto" id="dpReel" muted playsinline autoplay="autoplay" loop type="video/mp4"></video>
			<div class="scroll-down">
				<div class="chevron"></div>
				<div class="chevron"></div>
				<div class="chevron"></div>
			</div>
		</div>
		
		<div class="about__section about__section--slogan">
			<h1><span class="line-break line-break-gradient">세상을 즐겁게 하는 </span><span class="line-break-gradient">콘텐츠를 만듭니다</span></h1>
			<h3><span class="line-break">CREATING CONTENTS </span>THAT MAKE THE WORLD FUN</h3>
		</div>

		<div class="about__section about__section--service">
			<h1>Service</h1>
			<p><?php the_field('dp_service'); ?></p>
		</div>

		<div class="about__section about__section--clients">
			<h1>clients</h1>
			<!-- <img src="<?php echo esc_url(get_field('dp_clients')['url']); ?>"> -->
			<object type="image/svg+xml" data="<?php echo esc_url(get_field('dp_clients')['url']); ?>">
        <img src="<?php echo esc_url(get_field('dp_clients')['url']); ?>" alt="clients_list">
			</object>

		</div>
		<div class="about__section about__section--history">
			<h1>history</h1>
			<?php the_content(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
