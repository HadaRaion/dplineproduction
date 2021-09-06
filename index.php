<?php get_header(); ?>
<main class="site-body" >
  <div class="container">
    <h1>인덱스페이지</h1> 
    <div class="works__list">
      <?php
        while(have_posts()) {
          the_post(); ?>
          <article class="works__list__item">
            <a class="works__image" href="<?php the_permalink(); ?>">
              <img src="<?php the_post_thumbnail_url('dpline-works') ?>" alt="썸네일" />
            </a>
            <h4 class="works__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>dd</a></h4>
          </article>
        <?php } ?>

    <div class="works__pagination">
      <?php echo paginate_links();?>
    </div>
    
  </div>
</main>

<?php get_footer();?>
