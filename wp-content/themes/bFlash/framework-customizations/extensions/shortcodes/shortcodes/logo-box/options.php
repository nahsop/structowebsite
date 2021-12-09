<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'logos'               => array(
				'label'        => __( 'Addable Box', 'unyson' ),
				'type'         => 'addable-box',
				'value'        => array(),
				
				'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
				),
				'box-options'  => array(
					'logo'       => array(
						'label' => __( 'Logo', 'unyson' ),
						'type'  => 'upload',
					),
					'redirect_url'     => array(
						'label' => __( 'Redirect Url', 'unyson' ),
						'type'  => 'text',
					),
					
				),
				'template' => 'Logo',
				'limit' => 6,
			),

		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	fw()->theme->get_options('background-options'),
	
);