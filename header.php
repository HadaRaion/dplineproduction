<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">  
		<meta name="Description" content="'다름'을 존중하고 창조하는 크리에이터들의 공간, 스튜디오 슬램의 홈페이지에 오신 것을 환영합니다.">
		<meta name="Keywords" content="디피라인, 디피라인프러덕션, 영상제작">
		<meta property="og:type" content="website"> 
		<meta property="og:title" content="디피라인 프러덕션">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		<meta property="og:url" content="">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <div class="container">
        <nav class="header">
          <a class="header__logo" href="<?php echo site_url() ?>"><img src=<?php echo get_theme_file_uri('/images/dpline_prod_logo.svg'); ?>" alt="사이트로고" /></a>

          <ul class="header__nav">
            <li <?php if (is_page('works') or (get_post_type() == 'work')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/work') ?>">works</a></li>
            <li <?php if (is_page('about')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about') ?>">about</a></li>
            <li <?php if (is_page('contact')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/contact') ?>">contact</a></li>

          </ul>

          <div class="hamburger">
            <div class="hamburger-icon"></div>    
          </div>
        </div>
      </div>
    </header>
