<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'404_settings' => array(
		'title'   => __( '404/Search ', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'template-box' => array(
				'title'   => __( '404 Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'404_heading'                      => array(
						'label' => __( '404 Heading', 'unyson' ),
						'type'  => 'text',
						'value' => 'Seems you are lost!',
					),
					'404_banner'                    => array(
						'label'       => __( '404 Banner Background', 'unyson' ),
						'desc'        => __( 'Banner image for 404 Page 1600 X 400px',
							'unyson' ),
						'type'        => 'upload',
						'images_only' => false,
						
					),
					'404_featured'                    => array(
						'label'       => __( '404 Main Image', 'unyson' ),
						'type'        => 'upload',
						'images_only' => false,
						
					),
					'search_banner'                    => array(
						'label'       => __( 'Search Banner Background', 'unyson' ),
						'desc'        => __( 'Banner image for 404 Page 1600 X 400px',
							'unyson' ),
						'type'        => 'upload',
						'images_only' => false,
						
					),
				)
			)
			
		)
	)
);