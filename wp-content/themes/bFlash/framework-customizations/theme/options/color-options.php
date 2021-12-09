<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'Color Options', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'Color Options', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					
					
					'background_color_picker'     => array(
						'label' => __( 'Official Email Address', 'unyson' ),
						'type'  => 'text',
					),
					'icon_color_option'     => array(
						'label' => __( 'Header Note', 'unyson' ),
						'type'  => 'textarea',
						'desc'=> 'eg. Mon - Sun: 8h00 - 18h00'
					),
					'text_color'     => array(
						'label' => __( 'Copyright Note', 'unyson' ),
						'type'  => 'wp-editor',
						'desc'=> 'eg. Mon - Sun: 8h00 - 18h00'
					),
				)
			),
		)
	)
);