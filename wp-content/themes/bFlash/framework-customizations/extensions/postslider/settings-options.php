<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'slider_posts'                => array(
		'label'   => __( 'Activate Posts for:', 'unyson' ),
		'type'    => 'checkboxes',
		'desc'    => __( 'On which posts do you want to get the sliders activated?',
			'unyson' ),
		'choices' => fw_registered_post_types(),
		'help'    => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
			__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
				'unyson' ),
			__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
				'unyson' )
		),
	),
	'display_logic'                    => array(
		'label'   => __( 'Display Logic', 'unyson' ),
		'type'    => 'select',
		'value'   => 'php',
		'desc'    => __( 'How would you want to display the sliders in post',
			'unyson' ),
		'choices' => array(
			'auto'   => __( 'Automatic: Top of Content', 'unyson' ),
			'php'   => __( 'Via Php', 'unyson' ),
			
		),
		
	),
	'slider_information' => array(
	    'type'  => 'html',
	    // 'value' => 'default hidden value',
	    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	    'label' => __('Inject By Code', '{domain}'),
	    'desc'  => __('This is how you inject by code', '{domain}'),
	    'html'  => ' 
	    				<code> 
	    					if(function_exists(\'fw_render_post_slider\')){
                            	fw_render_post_slider();
                        	}
                        </code>',
	)

);
