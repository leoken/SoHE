<?php if ( ! function_exists('uwm_post_types') ) {

// Register Custom Post Type
function uwm_post_types() {

	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'uwm' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'uwm' ),
		'menu_name'           => __( 'Events', 'uwm' ),
		'parent_item_colon'   => __( 'Parent Item:', 'uwm' ),
		'all_items'           => __( 'All Events', 'uwm' ),
		'view_item'           => __( 'View Item', 'uwm' ),
		'add_new_item'        => __( 'Add New Event', 'uwm' ),
		'add_new'             => __( 'Add New', 'uwm' ),
		'edit_item'           => __( 'Edit Item', 'uwm' ),
		'update_item'         => __( 'Update Item', 'uwm' ),
		'search_items'        => __( 'Search Item', 'uwm' ),
		'not_found'           => __( 'Not found', 'uwm' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'uwm' ),
	);
	$rewrite = array(
		'slug'                => 'events',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'event', 'uwm' ),
		'description'         => __( 'Upcoming Events', 'uwm' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'event', $args );

}

// Hook into the 'init' action
add_action( 'init', 'uwm_post_types', 0 );

}