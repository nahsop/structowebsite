<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),

	        'nonheading'  => array( 'type' => 'text' , 'label' => 'nonheading stuff'),
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
			    'desc'  => __('How do you want the text to be aligned?', '{domain}'),
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
			)

	    ),
	    'title' => __('Layouts/Alignments', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	fw()->theme->get_options('background-options'),
	fw()->theme->get_options('buttons')
);