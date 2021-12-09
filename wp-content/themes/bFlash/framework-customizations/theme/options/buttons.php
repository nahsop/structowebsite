<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'buttons_box' => array(
		'title'   => __( 'Buttons and CTA', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'cta_buttons' => array(
			    'type'  => 'addable-box',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('CTA buttons', '{domain}'),
			    'desc'  => __('Description', '{domain}'),
			    'help'  => __('Help tip', '{domain}'),
			    'box-options' => array(
			        'cta_label'  => array( 'type' => 'text' , 'label' => 'Button Text'),
					'cta_link'  => array( 'type' => 'text' , 'label' => 'Button Link'),
					'cta_style'              => array(
						'label'   => __( 'Button Style', 'unyson' ),
						'type'    => 'image-picker',
						'value'   => 'flat',
						'choices' => array(
							'flat' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/flat.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/flat.png'
								),
							),
							'outline' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/outline.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/outline.png'
								),
							),
							'3d' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/3d.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/3d.png'
								),
							),
						),
						
					),
					'cta_shape'              => array(
						'label'   => __( 'Button Shape', 'unyson' ),
						'type'    => 'image-picker',
						'value'   => '',
						'choices' => array(
							'square' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/square.png'
								),
								'large' => array(
									'height' => 75,
									'src'    => get_template_directory_uri() . '/images/square.png'
								),
							),
							'round' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/rounded.png'
								),
								'large' => array(
									'height' => 75,
									'src'    => get_template_directory_uri() . '/images/rounded.png'
								),
							),
							
						),
						
					),
					'cta_color'              => array(
						'label'   => __( 'Button Color', 'unyson' ),
						'type'    => 'image-picker',
						'value'   => '',
						'choices' => array(
							'style-yellow' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-yellow.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-yellow.png'
								),
							),
							'style-green' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-green.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-green.png'
								),
							),
							
							'style-purple' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-purple.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-purple.png'
								),
							),
							
							'style-torquise' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-torquise.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-torquise.png'
								),
							),
							
							'style-blue' => array(
								'small' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-blue.png'
								),
								'large' => array(
									'height' => 35,
									'src'    => get_template_directory_uri() . '/images/style-blue.png'
								),
							),
							

							
						),
						
					),
					'cta_icon'        => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'value'        => array(
							'enable_icon' => 'no',
						),
						'picker'       => array(
							'enable_icon' => array(
								'label'   => __( 'Icon Button', 'unyson' ),
								'type'    => 'radio',
								'choices' => array(
									'no'  => __( 'Disable', 'unyson' ),
									'yes' => __( 'Enable', 'unyson' )
								),
								
							)
						),
						'choices'      => array(
							'no'  => array(
								
							),
							'yes' => array(
								'cta_icon'  => array(
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
								    'label' => __('CTA Icon', '{domain}'),
								)
								
							),
						),
						'show_borders' => false,
					),
			    ),
			    'template' => '{{- cta_label }}', // box title
			    'box-controls' => array( // buttons next to (x) remove box button
			        'control-id' => '<small class="dashicons dashicons-smiley"></small>',
			    ),
			    'limit' => 0, // limit the number of boxes that can be added
			    'add-button-text' => __('Add Button', '{domain}'),
			    'sortable' => true,
			),
			
			
		)
	)
);