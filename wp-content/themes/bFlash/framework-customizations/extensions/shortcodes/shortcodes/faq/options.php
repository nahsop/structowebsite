<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'unique_id'    => array( 'type' => 'unique' ),

	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'faq_content_type'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'faq_type_selector' => array(
						'label'   => __( 'Faq Type', 'unyson' ),
						'type'    => 'select',
						'choices' => array(
							'static'  => __( 'Static Content', 'unyson' ),
							'custom_post' => __( 'Faq Post Type', 'unyson' )
						),
						
					)
				),
				'choices'      => array(
					'static'  => array(
						'faqs'               => array(
							'label'        => __( 'Static Faqs', 'unyson' ),
							'type'         => 'addable-box',
							'value'        => array(),
							
							'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
							),
							'box-options'  => array(
								'faq_title'     => array(
									'label' => __( 'Faq Title', 'unyson' ),
									'type'  => 'text',
									'value' => 'Lorem ipsum dolor sit amet',
								),
								'faq_text' => array(
									'label' => __( 'Faq Text', 'unyson' ),
									'type'  => 'textarea',
									'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
									
								),
							),
							'template' => '{{- faq_title }}',
							
						),
					),
					'custom_post' => array(
						'faqs'      => array(
							'type'       => 'multi-select',
							'label'      => __( 'Faqs', 'unyson' ),
							'population' => 'posts',
							'source'     => 'faqs',
							
						),
					),
				),
				'show_borders' => false,
			),
		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	'layout' => array(
	    'type' => 'tab',
	    'options' => array(
	        'faq_type'  => array(
			    'type'  => 'select',
			    'value' => 'right',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Faq Type', '{domain}'),
			    'choices' => array(
			        '' => '---',
			        'vk-toggle-default' => __('Default', '{domain}'),
			        'vk-toggle-border vk-toggle-outlined' => __('Outlined', '{domain}'),
			        'vk-toggle-border vk-toggle-border-default' => __('Bordered', '{domain}'),
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