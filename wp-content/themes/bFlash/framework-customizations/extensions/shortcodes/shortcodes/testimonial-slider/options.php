<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'selected_testimoninals'      => array(
				'type'       => 'multi-select',
				'label'      => __( 'Select Testimonials', 'unyson' ),
				'population' => 'posts',
				'source'     => 'testimonials',
			),

		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	fw()->theme->get_options('background-options'),
	
);