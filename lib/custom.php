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

function posts_link_prev_class($format) {
     $format = str_replace('href=', 'class="btn btn-primary" href=', $format);
     return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> +</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');