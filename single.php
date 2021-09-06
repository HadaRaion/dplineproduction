<?php get_header(); ?>
<main class="site-body dp-work"> 
 <div class="container">
  <div class="dp-work__video">
    <iframe src="<?php echo the_field('dp_video'); ?>?autoplay=1&mute=1&enablejsapi=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
    </iframe>
  </div>

  <ul class="dp-work__info">
    <li class="dp-work__text">
      <h5>Client</h5>
      <h3><?php the_field('dp_client'); ?></h3>
    <li>
    <li class="dp-work__text"> 
      <h5>Title</h5>
      <h3 class="detail__title"><?php the_title(); ?></h3>
    </li>
    <li class="dp-work__btn">
			<a href="<?php echo site_url('/') ?>">뒤로가기</a>
    </li>
  </ul>
 </div>
</main>

<?php get_footer(); ?>

