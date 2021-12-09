<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main_image'       => array(
		'label' => __( 'Featured Image', 'unyson' ),
		'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
		'type'  => 'upload',
				
	),
	'main_description'       => array(
		'label' => __( 'Theme Description', 'unyson' ),
		'type'  => 'wp-editor',
		'editor_type' => 'tinymce', // tinymce, html
		'wpautop' => true,
		
	),
);