<?php
/**
 * Custom functions
 */
// Add classes to next and previous post links
function posts_link_next_class($format){
     $format = str_replace('href=', 'class="btn btn-primary" href=', $format);
     return $format;
}
add_filter('next_post_link', 'posts_link_next_class');
//add_filter('next_posts_link', 'posts_link_next_class');

function posts_link_prev_class($format) {
     $format = str_replace('href=', 'class="btn btn-primary" href=', $format);
     return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');
//add_filter('previous_posts_link', 'posts_link_prev_class');



add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
 
function posts_link_attributes(){
	return 'class="btn btn-primary"';
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
    global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> +</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// http://css-tricks.com/snippets/wordpress/if-page-is-parent-or-child/
function is_tree($pid)
{
  global $post;

  $ancestors = get_post_ancestors($post->$pid);
  $root = count($ancestors) - 1;
  $parent = $ancestors[$root];

  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
  {
    return true;
  }
  else
  {
    return false;
  }
};

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}



// http://wordpress.org/support/topic/blog-tab-gets-highlighted-in-nav-menu-for-custom-post-types
function custom_fix_blog_tab_on_cpt($classes,$item,$args) {
    if(!is_singular('post') && !is_category() && !is_tag()) {
        $blog_page_id = intval(get_option('page_for_posts'));
        if($blog_page_id != 0) {
            if($item->object_id == $blog_page_id) {
        unset($classes[array_search('active',$classes)]);
      }
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class','custom_fix_blog_tab_on_cpt',10,3);

