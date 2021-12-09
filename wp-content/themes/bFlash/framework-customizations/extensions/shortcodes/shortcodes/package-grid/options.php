<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'post_type' => array(
			    'type'  => 'multi-select',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Select Post types', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    /**
			     * Set population method
			     * Are available: 'posts', 'taxonomy', 'users', 'array'
			     */
			    'population' => 'taxonomy',
			    'source' => 'package_categories',
			    /**
			     * Set post types, taxonomies, user roles to search for
			     *
			     * 'population' => 'posts'
			     * 'source' => 'page',
			     *
			     * 'population' => 'taxonomy'
			     * 'source' => 'category',
			     *
			     * 'population' => 'users'
			     * 'source' => array( 'editor', 'subscriber', 'author' ),
			     *
			     * 'population' => 'array'
			     * 'source' => '' // will populate with 'choices' array
			     */
			    /**
			     * Set the number of posts/users/taxonomies that multi-select will be prepopulated
			     * Or set the value to false in order to disable this functionality.
			     */
			    'prepopulate' => 10,
			    /**
			     * An array with the available choices
			     * Used only when 'population' => 'array'
			     */
			    // 'choices' => fw_registered_post_types(),
			    /**
			     * Set maximum items number that can be selected
			     */
			    'limit' => 1,
			),
			'limit' => array('type' =>'text', 'label'=> 'Number of Posts') 


		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	// 'layout' => array(
	//     'type' => 'tab',
	//     'options' => array(
	//         'panel_alignment'  => array(
	// 		    'type'  => 'select',
	// 		    'value' => 'right',
	// 		    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	// 		    'label' => __('Panel Alignment', '{domain}'),
	// 		    'desc'  => __('How do you want the text to be aligned?', '{domain}'),
	// 		    'choices' => array(
	// 		        '' => '---',
	// 		        'left' => __('Left Align', '{domain}'),
	// 		        'center' => __('Center Align', '{domain}'),
	// 		        'right' => __('Right Align', '{domain}'),
	// 		    ),
	// 		    /**
	// 		     * Allow save not existing choices
	// 		     * Useful when you use the select to populate it dynamically from js
	// 		     */
	// 		    'no-validate' => false,
	// 		)

	//     ),
	//     'title' => __('Layouts/Alignments', '{domain}'),
	//     'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	// ),
	fw()->theme->get_options('background-options'),
	
);