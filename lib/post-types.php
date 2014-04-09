<?php if ( ! function_exists('sohe_post_types') ) {

// Register Custom Post Type
function sohe_post_types() {

	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'sohe' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'sohe' ),
		'menu_name'           => __( 'Events', 'sohe' ),
		'parent_item_colon'   => __( 'Parent Item:', 'sohe' ),
		'all_items'           => __( 'All Events', 'sohe' ),
		'view_item'           => __( 'View Item', 'sohe' ),
		'add_new_item'        => __( 'Add New Event', 'sohe' ),
		'add_new'             => __( 'Add New', 'sohe' ),
		'edit_item'           => __( 'Edit Item', 'sohe' ),
		'update_item'         => __( 'Update Item', 'sohe' ),
		'search_items'        => __( 'Search Item', 'sohe' ),
		'not_found'           => __( 'Not found', 'sohe' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sohe' ),
	);
	$rewrite = array(
		'slug'                => 'events',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'event', 'sohe' ),
		'description'         => __( 'Upcoming Events', 'sohe' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( ),
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


	$labels = array(
		'name'                => _x( 'Staff', 'Post Type General Name', 'sohe' ),
		'singular_name'       => _x( 'Staff', 'Post Type Singular Name', 'sohe' ),
		'menu_name'           => __( 'Staff', 'sohe' ),
		'parent_item_colon'   => __( 'Parent Item:', 'sohe' ),
		'all_items'           => __( 'All Staff', 'sohe' ),
		'view_item'           => __( 'View Item', 'sohe' ),
		'add_new_item'        => __( 'Add New Staff', 'sohe' ),
		'add_new'             => __( 'Add New', 'sohe' ),
		'edit_item'           => __( 'Edit Item', 'sohe' ),
		'update_item'         => __( 'Update Item', 'sohe' ),
		'search_items'        => __( 'Search Item', 'sohe' ),
		'not_found'           => __( 'Not found', 'sohe' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sohe' ),
	);
	$rewrite = array(
		'slug'                => 'staff',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'staff', 'sohe' ),
		'description'         => __( 'Faculty & Staff', 'sohe' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array('department'),
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
	register_post_type( 'staff', $args );

	$labels = array(
		'name'                => _x( 'How-To', 'Post Type General Name', 'sohe' ),
		'singular_name'       => _x( 'How-To', 'Post Type Singular Name', 'sohe' ),
		'menu_name'           => __( 'How-To', 'sohe' ),
		'parent_item_colon'   => __( 'Parent Item:', 'sohe' ),
		'all_items'           => __( 'All How-Tos', 'sohe' ),
		'view_item'           => __( 'View Item', 'sohe' ),
		'add_new_item'        => __( 'Add New How-To', 'sohe' ),
		'add_new'             => __( 'Add New', 'sohe' ),
		'edit_item'           => __( 'Edit Item', 'sohe' ),
		'update_item'         => __( 'Update Item', 'sohe' ),
		'search_items'        => __( 'Search Item', 'sohe' ),
		'not_found'           => __( 'Not found', 'sohe' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sohe' ),
	);
	$rewrite = array(
		'slug'                => 'how-to',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'how-to', 'sohe' ),
		'description'         => __( 'How Tos & Instructions', 'sohe' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
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
	register_post_type( 'how-to', $args );

$labels = array(
		'name'                       => _x( 'Departments', 'Taxonomy General Name', 'sohe' ),
		'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'sohe' ),
		'menu_name'                  => __( 'Department', 'sohe' ),
		'all_items'                  => __( 'All Items', 'sohe' ),
		'parent_item'                => __( 'Parent Item', 'sohe' ),
		'parent_item_colon'          => __( 'Parent Item:', 'sohe' ),
		'new_item_name'              => __( 'New Item Name', 'sohe' ),
		'add_new_item'               => __( 'Add New Item', 'sohe' ),
		'edit_item'                  => __( 'Edit Item', 'sohe' ),
		'update_item'                => __( 'Update Item', 'sohe' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'sohe' ),
		'search_items'               => __( 'Search Items', 'sohe' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'sohe' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'sohe' ),
		'not_found'                  => __( 'Not Found', 'sohe' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'department', array( 'staff' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'sohe_post_types', 0 );

}