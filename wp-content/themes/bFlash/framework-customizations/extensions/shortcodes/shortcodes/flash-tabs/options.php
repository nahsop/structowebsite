<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'id'    => array( 'type' => 'unique' ),
	'content_tab' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
	    	'tab'               => array(
				'label'        => __( 'Tabs', 'unyson' ),
				'type'         => 'addable-box',
				'value'        => array(),
				'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
				),
				'box-options'  => array(
					
					'tab_heading' => array('type' => 'text', 'label' => ' Heading'),
					'tab_content' => array('type' => 'wp-editor', 'label' => ' Content'),
					
				),
				'template' => '{{- tab_heading }}',
				// 'limit' => 3,
			),
	    ),
	    'title' => __('Card Content', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	'layout' => array(
	    'type' => 'tab',
	    'options' => array(
	    	// Orientation
	    	'tab_orientation'=> array(
			    'type'  => 'switch',
			    'value' => 'horizontal',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Orientation', '{domain}'),
			    'left-choice' => array(
			        'value' => 'verticle',
			        'label' => __('Verticle', '{domain}'),
			    ),
			    'right-choice' => array(
			        'value' => 'horizontal',
			        'label' => __('Horizontal', '{domain}'),
			    ),
			),
	    	'tab_border' => array(
			    'type'  => 'switch',
			    'value' => 'enable',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Border', '{domain}'),
			    'left-choice' => array(
			        'value' => 'enabled',
			        'label' => __('Enabled', '{domain}'),
			    ),
			    'right-choice' => array(
			        'value' => 'disabled',
			        'label' => __('Disabled', '{domain}'),
			    ),
			),
	    	// addable box
	    	'tab_background'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'gadget' => array(
						'label'        => __( 'Type', 'unyson' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'flat',
							'label' => __( 'Flat', 'unyson' )
						),
						'left-choice'  => array(
							'value' => 'background',
							'label' => __( 'Background', 'unyson' )
						),
						'value'        => 'flat',
						
					)
				),
				'choices'      => array(
					'background'  => array(
						'background_color'  => array(
							'type'  => 'color-picker',
							'label' => __( 'Background Color', 'unyson' ),
						),
						
					),
					
				),
				'show_borders' => false,
			),
	    	// outline
	    	'tab_outline' => array(
			    'type'  => 'switch',
			    'value' => 'enabled',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Outline', '{domain}'),
			    'left-choice' => array(
			        'value' => 'enabled',
			        'label' => __('Enabled', '{domain}'),
			    ),
			    'right-choice' => array(
			        'value' => 'disabled',
			        'label' => __('Disabled', '{domain}'),
			    ),
			),
			'base_color'  => array(
							'type'  => 'color-picker',
							'label' => __( 'Base Color', 'unyson' ),
						),
	    	


	    ),
	    'title' => __('Card Layout', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	
	
);