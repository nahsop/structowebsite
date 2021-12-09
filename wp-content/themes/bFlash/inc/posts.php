<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Define custom posts and taxonomies
 */

/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

/**
 * Register a genre taxonomy.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/*$labels = array(
	'name'              => __( 'Genres', 'unyson' ),
	'singular_name'     => __( 'Genre', 'unyson' ),
	'search_items'      => __( 'Search Genres', 'unyson' ),
	'all_items'         => __( 'All Genres', 'unyson' ),
	'parent_item'       => __( 'Parent Genre', 'unyson' ),
	'parent_item_colon' => __( 'Parent Genre', 'unyson' ) . ':',
	'edit_item'         => __( 'Edit Genre', 'unyson' ),
	'update_item'       => __( 'Update Genre', 'unyson' ),
	'add_new_item'      => __( 'Add New Genre', 'unyson' ),
	'new_item_name'     => __( 'New Genre Name', 'unyson' ),
	'menu_name'         => __( 'Genre', 'unyson' ),
);

$args = array(
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'genre' ),
);

register_taxonomy( 'genre', array( 'book' ), $args );*/


$labels_testimonial = array(
	'name'               => __( 'Testimonials', 'unyson' ),
	'singular_name'      => __( 'Testimonial', 'unyson' ),
	'menu_name'          => __( 'Testimonials', 'unyson' ),
	'name_admin_bar'     => __( 'Testimonial', 'unyson' ),
	'add_new'            => __( 'Add New', 'unyson' ),
	'add_new_item'       => __( 'Add New Testimonial', 'unyson' ),
	'new_item'           => __( 'New Testimonial', 'unyson' ),
	'edit_item'          => __( 'Edit Testimonial', 'unyson' ),
	'view_item'          => __( 'View Testimonial', 'unyson' ),
	'all_items'          => __( 'All Testimonials', 'unyson' ),
	'search_items'       => __( 'Search Testimonials', 'unyson' ),
	'parent_item_colon'  => __( 'Parent Testimonials:', 'unyson' ),
	'not_found'          => __( 'No testimonials found.', 'unyson' ),
	'not_found_in_trash' => __( 'No testimonials found in Trash.', 'unyson' )
);

$args_testimonial = array(
	'labels'             => $labels_testimonial,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'testimonials' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array( 'title', 'editor' )
);

register_post_type( 'testimonials', $args_testimonial );

// Frequently Asked Questions
// 
$labels_faqs = array(
	'name'               => __( 'FAQ', 'unyson' ),
	'singular_name'      => __( 'FAQ', 'unyson' ),
	'menu_name'          => __( 'FAQ', 'unyson' ),
	'name_admin_bar'     => __( 'FAQ', 'unyson' ),
	'add_new'            => __( 'Add New', 'unyson' ),
	'add_new_item'       => __( 'Add New FAQ', 'unyson' ),
	'new_item'           => __( 'New FAQ', 'unyson' ),
	'edit_item'          => __( 'Edit FAQ', 'unyson' ),
	'view_item'          => __( 'View FAQ', 'unyson' ),
	'all_items'          => __( 'All FAQ', 'unyson' ),
	'search_items'       => __( 'Search FAQ', 'unyson' ),
	'parent_item_colon'  => __( 'Parent FAQ:', 'unyson' ),
	'not_found'          => __( 'No FAQ found.', 'unyson' ),
	'not_found_in_trash' => __( 'No FAQ found in Trash.', 'unyson' )
);

$args_faqs = array(
	'labels'             => $labels_faqs,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'faqs' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array( 'title', 'editor' )
);

register_post_type( 'faqs', $args_faqs );

$labels_subject = array(
	'name'              => __( 'Topics', 'unyson' ),
	'singular_name'     => __( 'Topics', 'unyson' ),
	'search_items'      => __( 'Search Topics', 'unyson' ),
	'all_items'         => __( 'All Topics', 'unyson' ),
	'parent_item'       => __( 'Parent Topics', 'unyson' ),
	'parent_item_colon' => __( 'Parent Topics', 'unyson' ) . ':',
	'edit_item'         => __( 'Edit Topics', 'unyson' ),
	'update_item'       => __( 'Update Topics', 'unyson' ),
	'add_new_item'      => __( 'Add New Topics', 'unyson' ),
	'new_item_name'     => __( 'New Topics Name', 'unyson' ),
	'menu_name'         => __( 'Topics', 'unyson' ),
);

$args_subject = array(
	'hierarchical'      => true,
	'labels'            => $labels_subject,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'topics' ),
);

register_taxonomy( 'topics', array( 'faqs' ), $args_subject );

// End Frequently Asked Questions
// 
// Start for Travels and Tours

$labels = array(
	'name'               => __( 'Services', 'unyson' ),
	'singular_name'      => __( 'Service', 'unyson' ),
	'menu_name'          => __( 'Services', 'unyson' ),
	'name_admin_bar'     => __( 'Service', 'unyson' ),
	'add_new'            => __( 'Add New', 'unyson' ),
	'add_new_item'       => __( 'Add New Service', 'unyson' ),
	'new_item'           => __( 'New Service', 'unyson' ),
	'edit_item'          => __( 'Edit Service', 'unyson' ),
	'view_item'          => __( 'View Service', 'unyson' ),
	'all_items'          => __( 'All Services', 'unyson' ),
	'search_items'       => __( 'Search Services', 'unyson' ),
	'parent_item_colon'  => __( 'Parent Services:', 'unyson' ),
	'not_found'          => __( 'No Services found.', 'unyson' ),
	'not_found_in_trash' => __( 'No Services found in Trash.', 'unyson' )
);

$args = array(
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'services' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	'show_in_rest'		 => true
);

register_post_type( 'services', $args );

$labels_packages = array(
	'name'               => __( 'Packages', 'unyson' ),
	'singular_name'      => __( 'Package', 'unyson' ),
	'menu_name'          => __( 'Packages', 'unyson' ),
	'name_admin_bar'     => __( 'Package', 'unyson' ),
	'add_new'            => __( 'Add New', 'unyson' ),
	'add_new_item'       => __( 'Add New Package', 'unyson' ),
	'new_item'           => __( 'New Package', 'unyson' ),
	'edit_item'          => __( 'Edit Package', 'unyson' ),
	'view_item'          => __( 'View Package', 'unyson' ),
	'all_items'          => __( 'All Packages', 'unyson' ),
	'search_items'       => __( 'Search Packages', 'unyson' ),
	'parent_item_colon'  => __( 'Parent Packages:', 'unyson' ),
	'not_found'          => __( 'No Packages found.', 'unyson' ),
	'not_found_in_trash' => __( 'No Packages found in Trash.', 'unyson' )
);

$args_packages = array(
	'labels'             => $labels_packages,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'packages' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array( 'title', 'editor', 'thumbnail'),
	'show_in_rest'		 => true
);

register_post_type( 'packages', $args_packages );


// Registered Contries

$labels_destination = array(
	'name'              => __( 'Country/Destinations', 'unyson' ),
	'singular_name'     => __( 'Destination', 'unyson' ),
	'search_items'      => __( 'Search Destinations', 'unyson' ),
	'all_items'         => __( 'All Destinations', 'unyson' ),
	'parent_item'       => __( 'Parent Destination', 'unyson' ),
	'parent_item_colon' => __( 'Parent Destination', 'unyson' ) . ':',
	'edit_item'         => __( 'Edit Destination', 'unyson' ),
	'update_item'       => __( 'Update Destination', 'unyson' ),
	'add_new_item'      => __( 'Add New Destination', 'unyson' ),
	'new_item_name'     => __( 'New Destination Name', 'unyson' ),
	'menu_name'         => __( 'Destination', 'unyson' ),
);

$args_destination = array(
	'hierarchical'      => true,
	'labels'            => $labels_destination,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	
	'rewrite'           => array( 'slug' => 'destinations' ),
);

register_taxonomy( 'destinations', array( 'packages' ), $args_destination );

$labels_package_category = array(
	'name'              => __( 'Package Category', 'unyson' ),
	'singular_name'     => __( 'Package Category', 'unyson' ),
	'search_items'      => __( 'Search Package Category', 'unyson' ),
	'all_items'         => __( 'All Package Category', 'unyson' ),
	'parent_item'       => __( 'Parent Package Category', 'unyson' ),
	'parent_item_colon' => __( 'Parent Package Category', 'unyson' ) . ':',
	'edit_item'         => __( 'Edit Package Category', 'unyson' ),
	'update_item'       => __( 'Update Package Category', 'unyson' ),
	'add_new_item'      => __( 'Add New Package Category', 'unyson' ),
	'new_item_name'     => __( 'New Package Category Name', 'unyson' ),
	'menu_name'         => __( 'Package Category', 'unyson' ),
);

$args_package_category = array(
	'hierarchical'      => true,
	'labels'            => $labels_package_category,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	
	'rewrite'           => array( 'slug' => 'package-category' ),
);

register_taxonomy( 'package_categories', array( 'packages' ), $args_package_category );

// end registred Countries

// Package Tags

$labels_package_tags = array(
	'name'              => __( 'Package Tags', 'unyson' ),
	'singular_name'     => __( 'Package Tag', 'unyson' ),
	'search_items'      => __( 'Search Package Tags', 'unyson' ),
	'all_items'         => __( 'All Package Tags', 'unyson' ),
	'parent_item'       => __( 'Parent Package Tag', 'unyson' ),
	'parent_item_colon' => __( 'Parent Package Tag', 'unyson' ) . ':',
	'edit_item'         => __( 'Edit Package Tag', 'unyson' ),
	'update_item'       => __( 'Update Package Tag', 'unyson' ),
	'add_new_item'      => __( 'Add New Package Tag', 'unyson' ),
	'new_item_name'     => __( 'New Package Tag', 'unyson' ),
	'menu_name'         => __( 'Package Tags', 'unyson' ),
);

$args_package_tags = array(
	'hierarchical'      => false,
	'labels'            => $labels_package_tags,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'package_tags' ),
);

register_taxonomy( 'package_tags', array( 'packages' ), $args_package_tags );

// End package_tags
$labels_team = array(
	'name'               => __( 'Team', 'unyson' ),
	'singular_name'      => __( 'Team', 'unyson' ),
	'menu_name'          => __( 'Team', 'unyson' ),
	'name_admin_bar'     => __( 'Team', 'unyson' ),
	'add_new'            => __( 'Add New', 'unyson' ),
	'add_new_item'       => __( 'Add New Team', 'unyson' ),
	'new_item'           => __( 'New Team', 'unyson' ),
	'edit_item'          => __( 'Edit Team', 'unyson' ),
	'view_item'          => __( 'View Team', 'unyson' ),
	'all_items'          => __( 'All Team', 'unyson' ),
	'search_items'       => __( 'Search Team', 'unyson' ),
	'parent_item_colon'  => __( 'Parent Team:', 'unyson' ),
	'not_found'          => __( 'No Team found.', 'unyson' ),
	'not_found_in_trash' => __( 'No Team found in Trash.', 'unyson' )
);

$args_team = array(
	'labels'             => $labels_team,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'team' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array( 'title', 'thumbnail' ),
	'show_in_rest'		 => true
);

register_post_type( 'team', $args_team );

// End for travels and tours
