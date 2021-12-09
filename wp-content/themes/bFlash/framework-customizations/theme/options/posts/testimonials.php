<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'title'   => 'Author Information',
		'type'    => 'box',
		'context' => 'side',
    	'priority' => 'high',
		'options' => array(
			'author_name' => array('type' => 'text', 'label'=> 'Author Name') ,
			'author_post' => array('type' => 'text', 'label' => 'Author Post'),
			'author_image'             => array(
				'label' => __( 'Author Image', 'unyson' ),
				'type'  => 'upload',
				
			),
		),
	),
);