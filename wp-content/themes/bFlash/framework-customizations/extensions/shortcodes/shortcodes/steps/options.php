<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'unique_id'    => array( 'type' => 'unique' ),

	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'steps_pages'      => array(
				'type'       => 'multi-select',
				'label'      => __( 'Steps pages', 'unyson' ),
				'population' => 'posts',
				'source'     => 'page',
				
			),
		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	
);