<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'unique_id'    => array( 'type' => 'unique' ),

	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'introduction_text' => array(
				'type' => 'textarea',
				'label' => 'Description',
			),
			'introduction_image'                    => array(
				'label'       => __( 'Single Upload', 'unyson' ),
				'type'        => 'upload',
				'images_only' => true,
			),
		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	'layout' => array(
	    'type' => 'tab',
	    'options' => array(
	        'layout_style'  => array(
			    'type'  => 'select',
			    'value' => 'right',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Content Placement', '{domain}'),
			    'desc'  => __('How do you want the text to be aligned?', '{domain}'),
			    'choices' => array(
			        '' => '---',
			        'right' => __('Right', '{domain}'),
			        // 'center' => __('Center Align', '{domain}'),
			        'left' => __('Left Align', '{domain}'),
			    ),
			    /**
			     * Allow save not existing choices
			     * Useful when you use the select to populate it dynamically from js
			     */
			    'no-validate' => false,
			)

	    ),
	    'title' => __('Layouts/Alignments', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	fw()->theme->get_options('buttons')
	
	
);