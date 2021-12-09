<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'id'    => array( 'type' => 'unique' ),
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			'counter_layout'              => array(
				'label'   => __( 'Counter Layout', 'unyson' ),
				'type'    => 'image-picker',
				'value'   => 'counter-1',
				'choices' => array(
					'counter-1' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/counter-1.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/counter-1.png'
						),
					),
					'counter-2' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/counter-2.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/counter-2.png'
						),
					),
					'counter-3' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/counter-3.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/counter-3.png'
						),
					),
				),
				
			),
			'counts' => array(
			    'type'  => 'addable-box',
			    // 'value' => array(
			    //     array(
			    //         'counter_heading' => 'value 1',
			    //         'option_2' => 'value 2',
			    //     ),
			    //     // ...
			    // ),
			    // 'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Couters', '{domain}'),
			    'help'  => __('Help tip', '{domain}'),
			    'box-options' => array(
			        'count_heading' => array( 'type' => 'text' , 'label' => 'Counter Heading'),
			        'count_number' => array( 'type' => 'text' , 'label' => 'Count Number'),
			        'count_icon' => array(
					    'type'  => 'icon-v2',

					    /**
					     * small | medium | large | sauron
					     * Yes, sauron. Definitely try it. Great one.
					     */
					    'preview_size' => 'medium',

					    /**
					     * small | medium | large
					     */
					    'modal_size' => 'medium',

					    /**
					     * There's no point in configuring value from code here.
					     *
					     * I'll document the result you get in the frontend here:
					     * 'value' => array(
					     *   'type' => 'icon-font', // icon-font | custom-upload
					     *
					     *   // ONLY IF icon-font
					     *   'icon-class' => '',
					     *   'icon-class-without-root' => false,
					     *   'pack-name' => false,
					     *   'pack-css-uri' => false
					     *
					     *   // ONLY IF custom-upload
					     *   // 'attachment-id' => false,
					     *   // 'url' => false
					     * ),
					     */

					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => __('Label', '{domain}'),
					    'desc'  => __('Description', '{domain}'),
					    'help'  => __('Help tip', '{domain}'),
					)

			    ),
			    'template' => 'Hello {{- count_heading }}', // box title
			    'box-controls' => array( // buttons next to (x) remove box button
			        'control-id' => '<small class="dashicons dashicons-smiley"></small>',
			    ),
			    'limit' => 4, // limit the number of boxes that can be added
			    'add-button-text' => __('Add', '{domain}'),
			    'sortable' => true,
			)


		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	'color_options' => array(
	    'type' => 'tab',
	    'options' => array(
				'background_color_picker'     => array(
						'label' => __( 'Background Color', 'unyson' ),
						'type'  => 'color-picker',
					),
					'icon_color_option'     => array(
						'label' => __( 'Icon Color', 'unyson' ),
						'type'  => 'color-picker',
					),
					'text_color'     => array(
						'label' => __( 'Text Color', 'unyson' ),
						'type'  => 'color-picker',
					),			


		),
	    'title' => __('Colors', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	// fw()->theme->get_options('background-options'),
	
);