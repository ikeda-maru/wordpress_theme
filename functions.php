<?php

add_action('wp_body_open', function() {
  echo '<!--wp_body_open action hook-->';
});