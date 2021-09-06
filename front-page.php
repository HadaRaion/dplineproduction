<?php get_header(); ?>
<main class="site-body works">
  <div class="container">
    <p class="works__head">Creating contents  that make the world fun</p>

    <ul class="works__list">
    <?php
      $paged = get_query_var('page') ? get_query_var('page') : 1;
      $args = array(
        'post_type' => 'work', 
        'posts_per_page' => 9, 
        'paged' => $paged
      );
      $homepagePosts = new WP_Query($args);


      while($homepagePosts->have_posts()) {
        $homepagePosts->the_post(); ?>

        <li class="works__list__item">
          <a class="works__image" href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url('dpline-works') ?>" alt="썸네일" />
          </a>
          <h4 class="works__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </li>
        
        <?php } 
        
        ?>
  </ul>
  <div class="works__pagination">
    <?php wp_pagenavi( array( 'query' => $homepagePosts ) ); ?>
  </div>
</main>

<?php get_footer();?>

