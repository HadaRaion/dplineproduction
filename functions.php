<?php

function dpline_files() {
  wp_enqueue_script('main-dpline-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('dpline_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('dpline_extra_styles', get_theme_file_uri('/build/index.css'));

  wp_localize_script('main-dpline-js', 'dplineData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));

}

add_action('wp_enqueue_scripts', 'dpline_files');

function dpline_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('dpline-works', 904, 508, true);
}

add_action('after_setup_theme', 'dpline_features');

function dpline_post_types() {
  register_post_type('work', array(
    'public' => true,
    'supports' => array('title', 'thumbnail'),
    // 'rewrite' => array('slug' => 'works'),
    // 'with_front' => true,
    // 'has_archive' => false,
    'labels' => array(
      'name' => 'Works',
      'add_new_item' => 'Add New Work',
      'edit_item' => 'Edit Work',
      'all_items' => 'All Works',
      'singular_name' => 'Work'
    ),
    'menu_icon' => 'dashicons-video-alt3'
  ));
}
add_action('init', 'dpline_post_types');


// Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}

add_action('wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}

add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'themes/dpline-production/node_modules';
  return $exclude_filters;
});

