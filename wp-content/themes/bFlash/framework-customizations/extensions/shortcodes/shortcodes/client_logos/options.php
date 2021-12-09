<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'associate_logos'              => array(
				'label'       => __( 'Associate Logos', 'unyson' ),
				'type'        => 'multi-upload',
				'images_only' => true,
				'desc' => 'Best resolution: 185 X 100'
				
			),

		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	fw()->theme->get_options('background-options'),
	
);