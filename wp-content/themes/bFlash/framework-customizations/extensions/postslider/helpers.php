<?php 
	function fw_get_post_slider(){
		return fw()->extensions->get('postslider')->render();

	}
	function fw_render_post_slider(){
		// $display_logic =  fw_get_db_ext_settings_option('postslider', 'display_logic');
	    // if($display_logic == 'auto') return '';
		echo fw()->extensions->get('postslider')->render();

	}
?>