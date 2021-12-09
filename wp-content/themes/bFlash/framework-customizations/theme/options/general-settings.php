<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					
					'phone_numbers'               => array(
						'label'        => __( 'Phone Numbers', 'unyson' ),
						'type'         => 'addable-box',
						'value'        => array(),
						'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
						),
						'box-options'  => array(
							'phone_number'     => array(
								'label' => __( 'Enter Your Phone number', 'unyson' ),
								'type'  => 'text',
							),
							
						),
						'template' => '{{- phone_number }}',
						'limit' => 1,
					),
					'official_email'     => array(
						'label' => __( 'Official Email Address', 'unyson' ),
						'type'  => 'text',
					),
					'header_notes'     => array(
						'label' => __( 'Header Note', 'unyson' ),
						'type'  => 'textarea',
						'desc'=> 'eg. Mon - Sun: 8h00 - 18h00'
					),
					'copyright'     => array(
						'label' => __( 'Copyright Note', 'unyson' ),
						'type'  => 'wp-editor',
						'desc'=> 'eg. Mon - Sun: 8h00 - 18h00'
					),
					'booking_form'     => array(
						'label' => __( 'Booking Form Shortcode', 'unyson' ),
						'type'  => 'textarea',
						// 'desc'=> 'eg. Mon - Sun: 8h00 - 18h00'
					),
					'search_box'              => array(
						'label'   => __( 'Enable Search', 'unyson' ),
						'type'    => 'short-select',
						'value'   => 'no',
						'choices' => array(
							'no' => 'No',
							'yes' => 'Yes',
							
						),
						
					),
				)
			),
		)
	)
);