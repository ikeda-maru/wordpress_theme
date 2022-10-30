<?php

add_action('wp_body_open', function() {
  echo '<!--wp_body_open action hook-->';
});

add_action('init', function() {
  add_theme_support('post-thumbnails');
});

add_action('after_setup_theme', function() {
  add_theme_support( 'title-tag' );
});

function getEyecatchUrl() {
  if (has_post_thumbnail()) {
    $id  = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, "large");
  } else {
    $img = array(get_template_directory_uri() . '/assets/img/about-bg.jpg');
  }

  return $img[0];
}