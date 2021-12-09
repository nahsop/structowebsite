<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Include static files: javascript and css
 */

if ( is_admin() ) {
	return;
}

/**
 * Enqueue scripts and styles for the front end.
 */

// Add Lato font, used in the main stylesheet.
// wp_enqueue_style(
// 	'fw-theme-lato',
// 	fw_theme_font_url(),
// 	array(),
// 	'1.0'
// );

// Add Genericons font, used in the main stylesheet.
// wp_enqueue_style(
// 	'genericons',
// 	get_template_directory_uri() . '/genericons/genericons.css',
// 	array(),
// 	'1.0'
// );

// Load our main stylesheet.
wp_enqueue_style(
	'fw-theme-style',
	get_stylesheet_uri(),
	// array( 'genericons' ),
	'1.0'
);

// Load the Internet Explorer specific stylesheet.

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

if ( is_singular() && wp_attachment_is_image() ) {
	wp_enqueue_script(
		'fw-theme-keyboard-image-navigation',
		get_template_directory_uri() . '/js/keyboard-image-navigation.js',
		array( 'jquery' ),
		'1.0'
	);
}

if ( is_active_sidebar( 'sidebar-1' ) ) {
	wp_enqueue_script( 'jquery-masonry' );
}

if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
	wp_enqueue_script(
		'fw-theme-slider',
		get_template_directory_uri() . '/js/slider.js',
		array( 'jquery' ),
		'1.0',
		true
	);
	wp_localize_script( 'fw-theme-slider', 'featuredSliderDefaults', array(
		'prevText' => __( 'Previous', 'unyson' ),
		'nextText' => __( 'Next', 'unyson' )
	) );
}

// wp_enqueue_script(
// 	'jquery-ui-tabs',
// 	get_template_directory_uri() . '/js/jquery-ui-1.10.4.custom.js',
// 	array( 'jquery' ),
// 	'1.0',
// 	true
// );

// wp_enqueue_script(
// 	'fw-theme-script',
// 	get_template_directory_uri() . '/js/functions.js',
// 	array( 'jquery' ),
// 	'1.0',
// 	true
// );

// Font Awesome stylesheet
wp_enqueue_style(
	'font-awesome',
	get_template_directory_uri() . 'plugin/fonts/font-awesome/css/font-awesome.min.css',
	array(),
	'1.0'
);


wp_enqueue_script(
	'jquery-custom-input',
	get_template_directory_uri() . '/js/jquery.customInput.js',
	array( 'jquery' ),
	'1.0',
	true
);

// Selectize
{
	wp_enqueue_style(
		'selectize-css',
		get_template_directory_uri() . '/css/selectize.css',
		array(),
		'1.0'
	);
	wp_enqueue_script(
		'selectize-js',
		get_template_directory_uri() . '/js/selectize.js',
		array( 'jquery' ),
		'1.0',
		true
	);
}



$styles = [
	'transfonter' => 'plugin/fonts/transfonter/fonts.css',
	'font-awesome' => 'plugin/fonts/font-awesome/css/font-awesome.min.css',
	'platicon' => 'plugin/fonts/platicon/font/flaticon.css',
	'themeify' => 'plugin/fonts/themify/themify-icons.css',
	'bootstrap' => 'plugin/bootstrap/css/bootstrap.min.css',
	'animsition' => 'plugin/animsition/css/animsition.min.css',
	'lightbox' => 'plugin/lightbox/css/lightbox.min.css',

	'animate' => 'css/animate.css',
	'slick' => 'plugin/slick/slick.css',

	'mediaelementplayer' => 'plugin/player/mediaelementplayer.css',
	'jquery-ui' => 'plugin/jquery-ui/jquery-ui.css',
	'main-style' => 'css/style.css',
	// 'theme' => 'css/theme.min.css',
	'customize' => 'css/customize.css',
	

];
array_walk($styles, function($value, $key){
	wp_enqueue_style(
		$key,
		get_template_directory_uri() . '/'.$value
	);
});

$scripts = [
	'jquery-2.2' => 'plugin/jquery/jquery-2.0.2.min.js',
	'plugins' => 'plugin/plugin.min.js',
	'plugins-slick' => 'plugin/slick/slick.js',
	'plugins-main' => 'plugin/main.js',
	'plugins-custom' => 'plugin/custom.js'
];
array_walk($scripts , function($value, $key){
	wp_enqueue_script(
		$key,
		get_template_directory_uri() . '/'.$value,
		[],
		'',
		true
	);
});