<?php 
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'title' =>  'Thumbnail Slider',
    'type' => 'box',
    'options' => array(
    	'slider_images' => array(
			'label' => __( 'Select Slider Images', 'unyson' ),
			'desc'  => __( 'Slider images for this post/page',
				'unyson' ),
			'type'        => 'multi-upload',
			'help'  => 'To include use the following code<blockquote>
                                            if(function_exists(\'fw_render_post_slider\')){
                                                fw_render_post_slider();
                                            }
                                        </blockquote>'
		),	
    )
	
);
?>