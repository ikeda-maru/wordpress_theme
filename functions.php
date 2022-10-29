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