<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'template' => array(
		'title'   => __( 'Template ', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'template-box' => array(
				'title'   => __( 'Template Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					
					'templates_list'               => array(
						'label'        => __( 'Template', 'unyson' ),
						'type'         => 'addable-box',
						'value'        => array(),
						'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
						),
						'box-options'  => array(
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
							
							'archive_type'              => array(
								'label'   => __( 'Archive Type', 'unyson' ),
								'type'    => 'short-select',
								'value'   => '7',
								'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
									'unyson' ),
								'choices' => array(
									'list-categorized' => 'List (Categorized)',
									'list-simple' => 'List (Simple)',
									'grid-categorized' => 'Grid (Categorized)',
									'grid-simple' => 'Grid (Simple)',
									
								),
								
							),
							
						),
						'template' => '{{- post_type }}',
						// 'limit' => 1,
					),
					
				)
			),
		)
	)
);