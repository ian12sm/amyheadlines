<?php
/**
 * Custom functions
 */
add_filter('post_thumbnail_html','add_class_to_thumbnail');
function add_class_to_thumbnail($thumb) {
if( is_single() ) $thumb = str_replace('attachment-', 'img-responsive attachment-', $thumb);
return $thumb;
}


function custom_scripts() {
  wp_enqueue_style('roots_custom', get_template_directory_uri() . '/assets/css/app.css');
}
add_action('wp_enqueue_scripts', 'custom_scripts', 200);