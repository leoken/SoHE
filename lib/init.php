<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('sohe', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'sohe'),
    'mini_navigation' => __('Mini Navigation', 'sohe'),
    'directory_filter_navigation' => __('Directory Filter Navigation', 'sohe'),
    'prospective_students_navigation' => __('Prospective Students Navigation', 'sohe'),
    'who_we_are_navigation' => __('Who We Are Navigation', 'sohe'),
    'what_we_do_navigation' => __('What We Do Navigation', 'sohe'),
    'why_we_do_it_navigation' => __('Why We Do It Navigation', 'sohe'),
    'get_involved_navigation' => __('Get Involved Navigation', 'sohe'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails', array( 'post', 'page', 'staff', 'event', 'how-to' ));
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
