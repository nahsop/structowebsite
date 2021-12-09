<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'id'    => array( 'type' => 'unique' ),
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
	    	'slider_layout'              => array(
				'label'   => __( 'Slider Layout', 'unyson' ),
				'type'    => 'image-picker',
				'value'   => 'counter-1',
				'choices' => array(
					'slider-1' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/slider-1.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/slider-1.png'
						),
					),
					'slider-2' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/slider-2.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/slider-2.png'
						),
					),
					'slider-3' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/slider-3.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/slider-3.png'
						),
					),
					'slider-4' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/slider-4.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/slider-4.png'
						),
					),
				),
				
			),
			'slides' => array(
			    'type'  => 'addable-box',
			    'label' => __('Slides', '{domain}'),
			    'help'  => __('Help tip', '{domain}'),
			    'box-options' => array(
			        'image_heading' => array( 'type' => 'text' , 'label' => 'Heading'),
			        'image_sub_heading' => array( 'type' => 'text' , 'label' => 'Sub Heading'),
			        'image'       => array(
						'label' => __( 'Image', 'unyson' ),
						'type'  => 'upload',
					),
			        'image_click_behaviour'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'image_click' => array(
								'label'   => __( 'Click Behaviour', 'unyson' ),
								'type'    => 'select',
								'choices' => array(
									'lightbox'  => __( 'Lightbox', 'unyson' ),
									'redirect' => __( 'Redirect', 'unyson' )
								),
								'desc'    => __( 'What should be done on click on image.',
									'unyson' ),
								
							)
						),
						'choices'      => array(
							'redirect'  => array(
								'redirect'  => array(
									'type'  => 'text',
									'label' => __( 'Redirect Url', 'unyson' ),
								),
								
							),
							
						),
						'show_borders' => false,
					),
			        

			    ),
			    'template' => 'Hello {{- image_heading }}', // box title
			    'box-controls' => array( // buttons next to (x) remove box button
			        'control-id' => '<small class="dashicons dashicons-smiley"></small>',
			    ),
			    'add-button-text' => __('Add', '{domain}'),
			    'sortable' => true,
			)


		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	// 'color_options' => array(
	//     'type' => 'tab',
	//     'options' => array(
	// 		'background_color_picker'     => array(
	// 					'label' => __( 'Background Color', 'unyson' ),
	// 					'type'  => 'color-picker',
	// 		),
					


	// 	),
	//     'title' => __('Colors', '{domain}'),
	//     'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	// ),
	fw()->theme->get_options('background-options'),
	
);