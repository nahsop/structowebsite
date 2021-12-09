<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'unique_id'    => array( 'type' => 'unique' ),

	'general' => array(
	    'type' => 'tab',
	    'options' => array(
			fw()->theme->get_options('headings'),
			'information_box'             => array(
				'label'         => __( 'Tabbed Content', 'unyson' ),
				'type'          => 'addable-popup',
				'desc'          => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
					'unyson' ),
				'template'      => '{{- tab_title }}',
				'popup-options' => array(
					'tab_basic' => array(
						'title'   => __( 'Basic Tab Component', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'tab_title'                => array(
								'label' => __( 'Tab Title', 'unyson' ),
								'type'  => 'text',
								'desc'  => __( 'A <b>Simple word to represent the tab</b>.',
									'unyson' ),
								'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
									__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
										'unyson' ),
									__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
										'unyson' )
								),
							),
							'tab_heading'                => array(
								'label' => __( 'Tab heading', 'unyson' ),
								'type'  => 'text',
								'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
									__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
										'unyson' ),
									__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
										'unyson' )
								),
							),
							'tab_description'                 => array(
								'label' => __( 'Tab Description', 'unyson' ),
								'type'  => 'wp-editor',
								'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
								'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
									'unyson' ),
								'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
									__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
										'unyson' ),
									__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
										'unyson' )
								),
								'reinit' => true,
							),
							'tab_featured_image'       => array(
								'label' => __( 'Single Upload (Images Only)', 'unyson' ),
								'desc'  => __( 'Size: 570 * 500 px','unyson' ),
								'type'  => 'upload',
								'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
									__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
										'unyson' ),
									__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
										'unyson' )
								),
							),
							'tab_orientation'              => array(
								'label'   => __( 'Tab Orientation', 'unyson' ),
								'type'    => 'short-select',
								'value'   => '7',
								'desc'    => __( 'Where do you want the image to be shown.',
									'unyson' ),
								'choices' => array(
									'image-right' => 'Image Right',
									'image-left' => 'Image Left',
									
								),
								
							),
						),
					),
					
					fw()->theme->get_options('buttons')
					

				),
			),
		),
	    'title' => __('General', '{domain}'),
	    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
	),
	fw()->theme->get_options('background-options'),
		
);