<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			"main_heading" => array('type' => 'text', 'label' => 'Heading'),
			"heading_content" => array('type' => 'wp-editor', 'label' => 'Content')
		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	'layout' => array(
	    'type' => 'tab',
	    'options' => array(
	        'panel_alignment'  => array(
			    'type'  => 'select',
			    'value' => 'right',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Panel Alignment', '{domain}'),
			    'desc'  => __('How do you want the text to be aligned? Only center align available for Icon Style', '{domain}'),
			    'choices' => array(
			        '' => '---',
			        'left' => __('Left Align', '{domain}'),
			        'center' => __('Center Align', '{domain}'),
			        'right' => __('Right Align', '{domain}'),
			    ),
			    /**
			     * Allow save not existing choices
			     * Useful when you use the select to populate it dynamically from js
			     */
			    'no-validate' => false,
			),
			'heading_style' => array(
				'type' => 'select',
				'value' => '',
				'label' => 'Heading Style',
				'choices' => array(
					'' => '---',
					'vk-heading-icon' => 'Icon',
					'vk-heading-border'=> 'Border',
					'vk-heading-line' => 'Line'
				)

			)

	    ),
	    'title' => __('Layouts/Alignments', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	fw()->theme->get_options('spaces-setting'),
	
);