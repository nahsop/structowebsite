<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'unique_id'    => array( 'type' => 'unique' ),

    'general' => array(
        'type' => 'tab',
        'options' => array(
            // fw()->theme->get_options('headings'),
            // 
            'portrait_pages' => array(
                'type'  => 'addable-box',
                'label' => __('Featured pages', '{domain}'),
                'desc'  => __('Description', '{domain}'),
                'help'  => __('Help tip', '{domain}'),
                'box-options' => array(
                    'selected_page'      => array(
                        'type'       => 'multi-select',
                        'label'      => __( 'Steps pages', 'unyson' ),
                        'population' => 'posts',
                        'source'     => 'page',
                        'limit' => 1
                        
                    ),
                    'redirect_type'       => array(
                        'type'         => 'multi-picker',
                        'label'        => false,
                        'desc'         => false,
                        'picker'       => array(
                            'redirect_type_selector' => array(
                                'label'   => __( 'Redirect Type', 'unyson' ),
                                'type'    => 'select',
                                'choices' => array(
                                    'default_redirect'  => __( 'Redirect to Selected Page', 'unyson' ),
                                    'custom_redirect' => __( 'Redirect to custom page', 'unyson' )
                                ),
                                'desc'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                                    'unyson' ),
                                'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                                    __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                                        'unyson' ),
                                    __( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
                                        'unyson' )
                                )
                            )
                        ),
                        'choices'      => array(
                            'custom_redirect'  => array(
                                'link'  => array(
                                    'type'  => 'text',
                                    'label' => __( 'Redirect Url', 'unyson' ),
                                ),
                                
                            ),
                            
                        ),
                        'show_borders' => false,
                    ),
                ),
                'template' => 'Hello {{- selected_page }}', // box title
                'box-controls' => array( // buttons next to (x) remove box button
                    'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                ),
                'limit' => 0, // limit the number of boxes that can be added
                'add-button-text' => __('Add', '{domain}'),
                'sortable' => true,
            )

            
        ),
        'title' => __('General', '{domain}'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),
    
);