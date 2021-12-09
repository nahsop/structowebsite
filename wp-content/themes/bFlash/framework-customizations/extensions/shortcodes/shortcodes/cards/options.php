<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'content_tab' => array(
	    'type' => 'tab',
	    'options' => array(
	        'cards'               => array(
				'label'        => __( 'Cards', 'unyson' ),
				'type'         => 'addable-popup',
				'value'        => array(),
				'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
				),
				'popup-options'  => array(
					[
						'a_card_content' => array(
				    		'type' => 'tab',
				    		'title' => __('Tab Title', '{domain}'),
				    		'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
				    		'options' => array(
				    			'icon' => array(
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

							    'label' => __('Card Icon', '{domain}'),
							    
							),

							'card_heading' => array('type' => 'text', 'label' => 'Card Heading'),
							'card_content' => array('type' => 'wp-editor', 'label' => 'Card Content'),
				    		)

						)
					],
					fw()->theme->get_options('buttons')

					
					
				),
				'template' => '{{- card_heading }}',
				// 'limit' => 3,
			),
	    ),
	    'title' => __('Card Content', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	'layout' => array(
	    'type' => 'tab',
	    'options' => array(
	    	'layout_type' => array(
	    		'type' => 'select',
	    		'label' => 'Layout Type',
	    		'value' => 'grid',
	    		'choices' => array(
	    			'grid' => 'Grid Style',
	    			'full' => 'Full Width Style'
	    		)
	    	),
	        'layout_background'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'background_type' => array(
						'label'        => __( 'Background Color', 'unyson' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'transparent',
							'label' => __( 'Transparent', 'unyson' )
						),
						'left-choice'  => array(
							'value' => 'solid',
							'label' => __( 'Solid Color', 'unyson' )
						),
						'value'        => 'transparent',
					)
				),
				'choices'      => array(
					'solid'  => array(
						'background_color'  => array(
							'type'  => 'color-picker',
							'value' => '',
							'label' => __( 'Background Color', 'unyson' ),

						),
						'background_color_alternnate'  => array(
							'type'  => 'color-picker',
							'value' => '',
							'label' => __( 'Background Color(Alterate)', 'unyson' ),
							'desc' => 'Use this color for odd even color combination'

						),
						'background_hover_color'  => array(
							'type'  => 'color-picker',
							'value' => '',
							'label' => __( 'Background Hover Color', 'unyson' ),

						),
					),
					
				),
				'show_borders' => false,
			),
			'layout_border'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'background_type' => array(
						'label'        => __( 'Border', 'unyson' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'no',
							'label' => __( 'No outline', 'unyson' )
						),
						'left-choice'  => array(
							'value' => 'yes',
							'label' => __( 'Outline', 'unyson' )
						),
						'value'        => 'no',
					)
				),
				'choices'      => array(
					'yes'  => array(
						'border_color'  => array(
							'type'  => 'color-picker',
							'value' => '',
							'label' => __( 'Background Color', 'unyson' ),

						),
					),
					
				),
				'show_borders' => false,
			),
			'icon_color'  => array(
							'type'  => 'color-picker',
							'value' => '',
							'label' => __( 'Icon Color', 'unyson' ),

						),
			'icon_color_hover'  => array(
							'type'  => 'color-picker',
							'value' => '',
							'label' => __( 'Icon Color(Hover)', 'unyson' ),

						),
			'heading_color'  => array(
							'type'  => 'color-picker',
							'value' => '#000',
							'label' => __( 'Heading Color', 'unyson' ),

						),
			'heading_color_hover'  => array(
							'type'  => 'color-picker',
							'value' => '#a3a3a3',
							'label' => __( 'Heading Color(Hover)', 'unyson' ),

						),
			'content_color'  => array(
							'type'  => 'color-picker',
							'value' => '#000',
							'label' => __( 'Content Color', 'unyson' ),

						),
			'content_color_hover'  => array(
							'type'  => 'color-picker',
							'value' => '#a3a3a3',
							'label' => __( 'Content Color(Hover)', 'unyson' ),

						),

	    ),
	    'title' => __('Card Layout', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	
	
);