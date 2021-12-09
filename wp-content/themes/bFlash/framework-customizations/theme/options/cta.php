<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'cta_label'  => array( 'type' => 'text' , 'label' => 'Label'),
	'cta_link'  => array( 'type' => 'text' , 'label' => 'Link'),
	'cta_style'              => array(
		'label'   => __( 'Button Style', 'unyson' ),
		'type'    => 'image-picker',
		'value'   => 'flat',
		'choices' => array(
			'flat' => array(
				'small' => array(
					'height' => 70,
					'src'    => get_template_directory_uri() . '/images/flat.png'
				),
				'large' => array(
					'height' => 214,
					'src'    => get_template_directory_uri() . '/images/flat.png'
				),
			),
			'outline' => array(
				'small' => array(
					'height' => 70,
					'src'    => get_template_directory_uri() . '/images/outline.png'
				),
				'large' => array(
					'height' => 214,
					'src'    => get_template_directory_uri() . '/images/outline.png'
				),
			),
			'3d' => array(
				'small' => array(
					'height' => 70,
					'src'    => get_template_directory_uri() . '/images/3d.png'
				),
				'large' => array(
					'height' => 214,
					'src'    => get_template_directory_uri() . '/images/3d.png'
				),
			),
		),
		
	),
	'cta_shape'              => array(
		'label'   => __( 'Button Style', 'unyson' ),
		'type'    => 'image-picker',
		'value'   => '',
		'choices' => array(
			'square' => array(
				'small' => array(
					'height' => 70,
					'src'    => get_template_directory_uri() . '/images/square.png'
				),
				'large' => array(
					'height' => 214,
					'src'    => get_template_directory_uri() . '/images/square.png'
				),
			),
			'round' => array(
				'small' => array(
					'height' => 70,
					'src'    => get_template_directory_uri() . '/images/round.png'
				),
				'large' => array(
					'height' => 214,
					'src'    => get_template_directory_uri() . '/images/round.png'
				),
			),
			
		),
		
	),
	
);