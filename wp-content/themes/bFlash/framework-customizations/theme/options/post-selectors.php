<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'post_type' => array(
			    'type'  => 'multi-select',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Select Post types', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    /**
			     * Set population method
			     * Are available: 'posts', 'taxonomy', 'users', 'array'
			     */
			    'population' => 'array',
			    'source' => '',
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
			    'choices' => fw_registered_post_types(),
			    /**
			     * Set maximum items number that can be selected
			     */
			    'limit' => 1,
			),
			'limit' => array('type' =>'text', 'label'=> 'Number of Posts') 
);

			// 'post_selections'       => array(
			// 	'type'         => 'multi-picker',
			// 	'label'        => false,
			// 	'desc'         => false,
			// 	'picker'       => array(
			// 		'type' => array(
			// 			'label'        => __( 'Post Selection', 'unyson' ),
			// 			'type'         => 'switch',
			// 			'right-choice' => array(
			// 				'value' => 'auto',
			// 				'label' => __( 'Automatic', 'unyson' )
			// 			),
			// 			'left-choice'  => array(
			// 				'value' => 'manual',
			// 				'label' => __( 'manual', 'unyson' )
			// 			),
			// 			'value'        => 'auto',
						
			// 		)
			// 	),
			// 	'choices'      => array(
			// 		'manual'  => array(
			// 			'post_type' => array(
			// 			    'type'  => 'multi-select',
			// 			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			// 			    'label' => __('Select Posts', '{domain}'),
			// 			    'desc'  => __('Description', '{domain}'),
			// 			    /**
			// 			     * Set population method
			// 			     * Are available: 'posts', 'taxonomy', 'users', 'array'
			// 			     */
			// 			    'population' => 'posts',
			// 			    'source' => '',
			// 			    *
			// 			     * Set post types, taxonomies, user roles to search for
			// 			     *
			// 			     * 'population' => 'posts'
			// 			     * 'source' => 'page',
			// 			     *
			// 			     * 'population' => 'taxonomy'
			// 			     * 'source' => 'category',
			// 			     *
			// 			     * 'population' => 'users'
			// 			     * 'source' => array( 'editor', 'subscriber', 'author' ),
			// 			     *
			// 			     * 'population' => 'array'
			// 			     * 'source' => '' // will populate with 'choices' array
						     
			// 			    /**
			// 			     * Set the number of posts/users/taxonomies that multi-select will be prepopulated
			// 			     * Or set the value to false in order to disable this functionality.
			// 			     */
			// 			    'prepopulate' => 10,
			// 			    /**
			// 			     * An array with the available choices
			// 			     * Used only when 'population' => 'array'
			// 			     */
			// 			    'choices' => fw_registered_post_types(),
			// 			    /**
			// 			     * Set maximum items number that can be selected
			// 			     */
			// 			    'limit' => 1,
			// 			),
			// 		),
					
			// 	),
			// 	'show_borders' => false,
			// ),