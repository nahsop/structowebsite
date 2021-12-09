<?php if (!defined('FW')) die('Forbidden');

$options = array(
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
							
							// Tab content
							'tab_content'               => array(
								'label'        => __( 'Tab Content', 'unyson' ),
								'type'         => 'addable-box',
								'value'        => array(),
								
								'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
								),
								'box-options'  => array(
									'item_title'     => array(
										'label' => __( 'Item Title', 'unyson' ),
										'type'  => 'text',
										
									),
									'item_url'     => array(
										'label' => __( 'Item Url', 'unyson' ),
										'type'  => 'text',
										
									),
									'item_image'       => array(
										'label' => __( 'Item Image', 'unyson' ),
										'desc'  => __( 'Dimension: 370 * 270 px.',
											'unyson' ),
										'type'  => 'upload',
									),
									
								),
								'template' => '{{- item_title }}',
								// 'limit' => 3,
							),
					
					// fw()->theme->get_options('buttons')
					

				),
			),
			// fw()->theme->get_options('post-selectors')

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