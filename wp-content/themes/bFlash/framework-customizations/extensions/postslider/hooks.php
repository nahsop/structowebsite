<?php 
	add_filter('fw_post_options', '_filter_theme_fw_post_options', 10, 2);
	function _filter_theme_fw_post_options($options, $post_type) {
		// Find the extension object
		$ext = fw()->extensions->get('postslider');
		// get list of all the post types that
		// has been enabled for slider
		$available_posts = fw_get_db_ext_settings_option('postslider', 'slider_posts');
		// Check if the current post has slider
		// activated
		if(array_key_exists($post_type, $available_posts)){
			// get the slider option file
			// and append it to the registered options
			// array
			$options['slider_options'] = $ext->get_options('option');
		}
		// return the new options
		// var_dump($options);
		// die();
		return $options;
		
	}
	add_filter( 'the_content', '_filter_fw_ext_post_slider', 1 );
 
	function _filter_fw_ext_post_slider( $content ) {
	 
	    // Check if we're inside the main loop in a single Post.
		$display_logic =  fw_get_db_ext_settings_option('postslider', 'display_logic');
	    if($display_logic == 'php') return $content;
	    if ( is_singular() && in_the_loop() && is_main_query() ) {
	    	$slider = fw_get_post_slider();
	    	return $slider.$content;
	        // return $content . esc_html__( 'I’m filtering the content inside the main loop', 'wporg');
	    }
	    return $content;
	}
?>