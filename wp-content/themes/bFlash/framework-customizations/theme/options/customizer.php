<?php
$options = array(
    'logo_stuff' => array(
        'title' => 'Site Logo',
        'options' => array(
            'logo'    => array(
                        'label' => __( 'Logo', 'unyson' ),
                        'desc'  => __( 'Select your Default Logo', 'oson-flash' ),
                        'type'  => 'upload',
                    ),
            'logo_background'        => array(
                            'label' => __( 'Logo Background Color', 'unyson' ),
                            'type'  => 'color-picker',
                            'value' => '#fcfcfc',
                        ),
                    'mobile_logo'    => array(
                        'label' => __( 'Mobile Logo', 'unyson' ),
                        'desc'  => __( 'Select you mobile logo', 'oson-flash' ),
                        'type'  => 'upload',
                    ),
                    'footer_logo'    => array(
                        'label' => __( 'Footer logo', 'unyson' ),
                        'desc'  => __( 'Select you Footer logo', 'oson-flash' ),
                        'type'  => 'upload',
                        
                    ),
                    'favicon' => array(
                        'label' => __( 'Favicon', 'unyson' ),
                        'desc'  => __( 'Upload a favicon image', 'oson-flash' ),
                        'type'  => 'upload',
                    ),     
        ),
        
    ),
    'header_section' => array(
        'title' => __('Header', '{domain}'),
        'options' => array(

            'header_style'              => array(
                'label'   => __( 'Header Style', 'unyson' ),
                'type'    => 'image-picker',
                'value'   => 'left',
                'desc'    => __( 'Choose the type of header htat you want?',
                    'unyson' ),
                'choices' => array(
                    'left' => array(
                        'small' => array(
                            'height' => 70,
                            'src'    => get_template_directory_uri() . '/images/header/header-2.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src'    => get_template_directory_uri() . '/images/header/header-2.jpg'
                        ),
                    ),
                    'center' => array(
                        'small' => array(
                            'height' => 70,
                            'src'    => get_template_directory_uri() . '/images/header/header-1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src'    => get_template_directory_uri() . '/images/header/header-1.jpg'
                        ),
                    ),
                    'left-offset' => array(
                        'small' => array(
                            'height' => 70,
                            'src'    => get_template_directory_uri() . '/images/header/header-left-offset.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src'    => get_template_directory_uri() . '/images/header/header-left-offset.png'
                        ),
                    ),
                    
                ),
            ),
            'header_background'        => array(
                'type'         => 'multi-picker',
                'label'        => 'Header Background',
                'desc'         => 'Type of background the header should have.',
                'value'        => array(
                    'header_background_style' => 'solid',
                ),
                'picker'       => array(
                    'header_background_style' => array(
                        'label'   => __( 'Multi Picker: Radio', 'unyson' ),
                        'type'    => 'radio',
                        'choices' => array(
                            'solid'  => __( 'Solid Color', 'unyson' ),
                            'transparent' => __( 'Transparent', 'unyson' )
                        ),
                    )
                ),
                'choices'      => array(
                    'solid'  => array(
                        'header_background_color'        => array(
                            'label' => __( 'Background Color', 'unyson' ),
                            'type'  => 'color-picker',
                            'value' => '#fff',
                        )
                        
                    ),
                    
                ),
                'show_borders' => false,
            ),
            'fixed_header'              => array(
                'label'   => __( 'Sticky Header', 'unyson' ),
                'type'    => 'short-select',
                'value'   => 'no',
                'desc'    => __( 'Site has a header fixed to the top.',
                    'unyson' ),
                'choices' => array(
                    'no-fixed' => 'No',
                    'vk-header-one-page' => 'Yes',
                    
                ),
                
            ),
        ),
    ),
);
