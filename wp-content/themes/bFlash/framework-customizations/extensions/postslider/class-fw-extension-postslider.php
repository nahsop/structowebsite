<?php
if (!defined('FW')) die('Forbidden');
class FW_Extension_Postslider extends FW_Extension
{
    // ...
    protected function _init()
    {
        // ...

        // if ($this->something_is_wrong()) {
            // return false; // prevent child extensions activation
        // }
    }
    public function render($post_id = null){
    	// $data = $this->;
    	if($post_id == null){

    		$post_id = get_the_ID();
    	}
    	$slider_options = fw_get_db_post_option($post_id, 'slider_images');
    	// var_dump($slider_options);
    	if($slider_options == null) return '';
    	return $this->render_view('view', ['slider_images' => $slider_options]);
    }
}