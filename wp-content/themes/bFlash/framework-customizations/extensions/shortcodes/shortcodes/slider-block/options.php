<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'slider_container'               => array(
		'label'        => __( 'Slider', 'unyson' ),
		'type'         => 'addable-popup',
		'value'        => array(),
		'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
		),
		'popup-options'  => array(
			// put this inside an array so that the order is maintained
			[
				'a_slider_contents' => array(
				    'type' => 'tab',
				    'options' => array(
				        // 'option_id'  => array( 'type' => 'text' ),
				        'slider_heading' => array('type' => 'text', 'label' => 'Slider heading'),
						'slider_subheading' => array('type' => 'text', 'label' => 'Slider Subheading'),
						'show_subheading'              => array(
							'label'   => __( 'Show Subheading', 'unyson' ),
							'type'    => 'short-select',
							'value'   => 'no',
							
							'choices' => array(
								'no' => 'NO',
								'yes' => 'YES',
							),
							'desc' => 'Do you want to show subheading?'
						),
						'slider_image'             => array(
							'label' => __( 'Background Image', 'unyson' ),
							'type'  => 'upload',
						),
						'slider_alignment'              => array(
							'label'   => __( 'Slider Text Alignment', 'unyson' ),
							'type'    => 'short-select',
							'value'   => 'left',
							
							'choices' => array(
								'left' => 'Left',
								'center' => 'Center',
								'right' => 'Right',
							),
							'desc' => 'show-alignment'
						),
				    ),
				    'title' => __('Tab Title', '{domain}'),
				    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
				),
			],

			fw()->theme->get_options('buttons')

			
		),
		'template' => '{{- slider_heading }}',
		'limit' => 3,
	),
	'show_navigations'              => array(
		'label'   => __( 'Show Navigation', 'unyson' ),
		'type'    => 'short-select',
		'value'   => 'no',
		
		'choices' => array(
			'no' => 'NO',
			'yes' => 'YES',
		),
		'desc' => 'Do you want to show the navigation arrows in slider?'
	),
	'show_bullets'              => array(
		'label'   => __( 'Show Bullets', 'unyson' ),
		'type'    => 'short-select',
		'value'   => 'no',
		
		'choices' => array(
			'no' => 'NO',
			'yes' => 'YES',
		),
		'desc' => 'Do you want to show the navigation bullets in slider?'
	),
	
);