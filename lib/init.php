<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
    'mini_navigation' => __('Mini Navigation', 'roots'),
    'directory_filter_navigation' => __('Directory Filter Navigation', 'roots'),
    'prospective_students_navigation' => __('Prospective Students Navigation', 'roots'),
    'who_we_are_navigation' => __('Who We Are Navigation', 'roots'),
    'what_we_do_navigation' => __('What We Do Navigation', 'roots'),
    'why_we_do_it_navigation' => __('Why We Do It Navigation', 'roots'),
    'get_involved_navigation' => __('Get Involved Navigation', 'roots'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails', array( 'post', 'page' ));
  set_post_thumbnail_size(260, 260, true);
  add_image_size('medium', 300, 300, true);
  add_image_size('featured-thumb', 380, 380, true);
  add_image_size('featured-single', 800, 800, true);

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');
