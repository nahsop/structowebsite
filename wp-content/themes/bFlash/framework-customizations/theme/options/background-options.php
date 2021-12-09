<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'background_box' => array(
		'title'   => __( 'Background Options', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
				'backgroud_image' => array(
					    'type'  => 'upload',
					    'value' => array(
					        /*
					        'attachment_id' => '9',
					        'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
					        */
					        // if value is set in code, it is not considered and not used
					        // because there is no sense to set hardcode attachment_id
					    ),
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => __('Background Image/Video', '{domain}'),
					    'desc'  => __('Select Background Image/Background Video', '{domain}'),
					    /**
					     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
					     * If set to `false`, the option will allow to upload any file from the media library.
					     */
					    'images_only' => false,
					),
					'parallax_effect' => array(    
						'type'  => 'switch',
					    'value' => 'yes',
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => __('Parallax Efect', '{domain}'),
					    'desc'  => __('Do you want enable parallax effect?', '{domain}'),
					    'left-choice' => array(
					        'value' => 'yes',
					        'label' => __('Enable Parallax', '{domain}'),
					    ),
					    'right-choice' => array(
					        'value' => 'no',
					        'label' => __('Disable Parallax', '{domain}'),
					    ),
					),
					'background_color_picker'     => array(
						'label' => __( 'Background Color', 'unyson' ),
						'type'  => 'color-picker',
			),

		)
	)
);