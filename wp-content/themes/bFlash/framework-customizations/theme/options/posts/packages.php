<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	
	'package_box' => array(
		'title'   => 'Package Details',
		'type'    => 'box',
		'options' => array(
			// fw()->theme->get_options( 'demo-box' ),
			'package_subtitle'                      => array(
				'label' => __( ' Subtitle', 'unyson' ),
				'type'  => 'text',
				'desc'  => __( 'Kathmandu to Malaysia & Singapore','unyson' ),
			),
			'package_duration'                      => array(
				'label' => __( 'Package duration', 'unyson' ),
				'type'  => 'text',
				'desc'  => __( '4N/5D','unyson' ),
			),
			'package_description'                      => array(
				'label' => __( 'Package Short description', 'unyson' ),
				'type'  => 'textarea',
				'desc'  => __( 'Enter description of at most 345 characters.','unyson' ),
			),
			'package_price_main'                      => array(
				'label' => __( 'Base package price', 'unyson' ),
				'type'  => 'text',
				'desc'  => __( 'Do not put currency. eg. 40000 ','unyson' ),
			),
			'package_group_size'                      => array(
				'label' => __( 'Group Size', 'unyson' ),
				'type'  => 'text',
				'desc'  => __( '4 - 40 ','unyson' ),
			),
			'package_map'                    => array(
						'label'       => __( 'Map Image', 'unyson' ),
						'desc'        => __( 'Upload Map image.',
							'unyson' ),
						'type'        => 'upload',
						'images_only' => true,
					),

		),
	),
	'itinerary' => array(
		'title'   => 'Package Itinerary',
		'type'    => 'box',
		'options' => array(
			'tab_id' => array(
			    'type' => 'tab',
			    'options' => array(
			        'itinerary_upload'                    => array(
						'label'       => __( 'Itinerary File', 'unyson' ),
						'desc'        => __( 'Upload the itinerary file.',
							'unyson' ),
						'type'        => 'upload',
						'images_only' => false,
					),
					'itinerary_main'                    => array(
						'label'       => __( 'Itinerary Main', 'unyson' ),
						'desc'        => __( 'Copy paste your itinerary here'
							,'unyson' ),

						'type'  => 'wp-editor',
								'size' => 'large', // small, large
						    'editor_height' => 400,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
					),
					'itinerary_details'               => array(
						'label'        => __( 'Itinerary Details', 'unyson' ),
						'type'         => 'addable-box',
						'value'        => array(),
						'desc'         => __( 'Enter your daywise itineraries.', 'unyson' ),
						
						'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
						),
						'box-options'  => array(
							'itinerary_day'     => array(
								'label' => __( 'Day', 'unyson' ),
								'type'  => 'text',
								// 'value' => 'Lorem ipsum dolor sit amet',
								'desc'  => __( 'E.g Day 1',
									'unyson' ),
								
							),
							'itinerary_title'     => array(
								'label' => __( 'Itinerary Title', 'unyson' ),
								'type'  => 'text',
								// 'value' => 'Lorem ipsum dolor sit amet',
								'desc'  => __( 'E.g Arrive to Destination',
									'unyson' ),
								
							),
							'itinerary_text' => array(
								'label' => __( 'Itinerary Description', 'unyson' ),
								'type'  => 'wp-editor',
								'size' => 'small', // small, large
						    'editor_height' => 400,
						    'wpautop' => true,
						    'editor_type' => false, // tinymce, html
							),
						),
						'template' => '{{- itinerary_day }} {{- itinerary_title }}',
						
					),
			    ),
			    'title' => __('Itinerary', '{domain}'),
			    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
			),
			'tab_id_2' => array(
			    'type' => 'tab',
			    'options' => array(
			        'package_includes' => array(
						'label'  => __( 'Package Includes', 'unyson' ),
						'type'   => 'wp-editor',
						
					),
			    ),
			    'title' => __('Includes', '{domain}'),
			    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
			),
			'tab_id_3' => array(
			    'type' => 'tab',
			    'options' => array(
			        'package_excludes' => array(
						'label'  => __( 'Package Excludes', 'unyson' ),
						'type'   => 'wp-editor',
						// 'option' => array(
						// 	'type' => 'text',
						// ),
					),
			    ),
			    'title' => __('Excludes', '{domain}'),
			    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
			),
			'tab_id_4' => array(
			    'type' => 'tab',
			    'options' => array(
			        'gallery_images' => array(
						'label' => __( 'Multi Upload (images only)', 'unyson' ),
						'type'  => 'multi-upload',
						
					),
			    ),
			    'title' => __('Gallery', '{domain}'),
			    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
			),
			'tab_id_5' => array(
			    'type' => 'tab',
			    'options' => array(
			        'demo_multi_select_posts'      => array(
						'type'       => 'multi-select',
						'label'      => __( 'Select FAQs', 'unyson' ),
						'population' => 'posts',
						'source'     => 'faqs',
					),
			    ),
			    'title' => __('Frequently Asked Questions', '{domain}'),
			),
			
			

		),
	),
	'package_availability' => array(
		'title'   => 'Package Availability',
		'type'    => 'box',
		'options' => array(
			// fw()->theme->get_options( 'demo-box' ),
			'package_dates'               => array(
				'label'        => __( 'Package Dates', 'unyson' ),
				'type'         => 'addable-box',
				'value'        => array(),
				// 'desc'         => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'unyson' ),
				
				'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
				),
				'box-options'  => array(
					'package_start_date'     => array(
						'label' => __( 'Start Date', 'unyson' ),
						'type' => 'datetime-picker',
						'datetime-picker' => array(
							'format'        => 'd-m-Y',
							'extra-formats' => array(),
							'moment-format' => 'DD-MM-YYYY',
							'scrollInput'   => false,
							'maxDate'       => false,
							'minDate'       => false,
							'timepicker'    => false,
							'datepicker'    => true,
						)
						
						
					),
					'package_end_date'     => array(
						'label' => __( 'End Date', 'unyson' ),
						'type' => 'datetime-picker',
						'datetime-picker' => array(
							'format'        => 'd-m-Y',
							'extra-formats' => array(),
							'moment-format' => 'DD-MM-YYYY',
							'scrollInput'   => false,
							'maxDate'       => false,
							'minDate'       => false,
							'timepicker'    => false,
							'datepicker'    => true,
						)
						
					),
					'package_price'     => array(
						'label' => __( 'Package Price', 'unyson' ),
						'type' => 'text',
					),
					
				),
				'template' => '{{- package_start_date }}',
				'limit' => 3,
			),

		),
	),
);