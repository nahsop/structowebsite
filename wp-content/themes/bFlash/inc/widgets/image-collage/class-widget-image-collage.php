<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Image_Collage extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => 'Additional Link widgets' );
		parent::__construct( false, __( 'Image Collage Widget', 'unyson' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		$title = fw_format_title($instance['widget_headline']); 
		
		$filepath = dirname( __FILE__ ) . '/views/widget.php';

		if ( file_exists( $filepath ) ) {
			include( $filepath );
		}
	}

	function update( $new_instance, $old_instance ) {
		// var_dump($new_instance);
		$new_instance = wp_parse_args( (array) $new_instance, $_POST['fw_options'] );
		return $new_instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'widget_headline' => '', 'widget_content' => '' , 'collage_images' => '') );
		// if($instance)
		// 
		// 
		// 
		$image_values = [];
		if($instance['collage_images'] != ''){
			$collage_image = $instance['collage_images'];
			$collage_image = json_decode($collage_image);
			$image_values = array_map(function($value){

				return ['attachment_id' => $value, 'url' => wp_get_attachment_url($value)];
			}, $collage_image);
			// var_dump();
		}
		// var_dump($image_values);
		
		// $values = array(
		// 	        array(
		// 	            'option_1' => 'value 1',
		// 	            'option_2' => 'value 2',
		// 	        ),
		// 	        // ...
		// 	    );
		// 	    
		// $values = [];
		$options = array(
		    'widget_headline' => array( 'label'=> 'Headline', 'type' => 'text',     'value' => $instance['widget_headline'],  ),
		    'collage_images' => array(
			    'type'  => 'multi-upload',
			    // 'value' => array(
			        /*
			        array(
			            'attachment_id' => '9',
			            'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
			        ),
			        ...
			        */
			        // if value is set in code, it is not considered and not used
			        // because there is no sense to set hardcode attachment_id
			    // ),
			    // 
			    'value' => $image_values,
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Images', '{domain}'),
			    // 'desc'  => __('Description', '{domain}'),
			    // 'help'  => __('Help tip', '{domain}'),
			    /**
			     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
			     * If set to `false`, the option will allow to upload any file from the media library.
			     */
			    'images_only' => true,
			    /**
			     * An array with allowed files extensions what will filter the media library and the upload files.
			     */
			    // 'files_ext' => array( 'doc', 'pdf', 'zip' ),
			    /**
			     * An array with extra mime types that is not in the default array with mime types from the javascript Plupload library.
			     * The format is: array( '<mime-type>, <ext1> <ext2> <ext2>' ).
			     * For example: you set rar format to filter, but the filter ignore it , than you must set
			     * the array with the next structure array( '.rar, rar' ) and it will solve the problem.
			     */
			    // 'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
			)

		);

		// simple usage
		echo fw()->backend->render_options($options);
	}
}