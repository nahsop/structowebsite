<?php 
class FW_Shortcode_Flash_tabs extends FW_Shortcode
{
    // ...
    public function _render($atts, $content = NULL, $tag = ''){
    	// var_dump($atts);
    	
    	$view_file = $this->locate_path( '/views/'.$atts['tab_orientation'].'.php' );
		if ( ! $view_file ) {
			trigger_error(
				sprintf( __( 'No default view (views/'.$atts['tab_orientation'].'.php) found for shortcode: %s', 'fw' ), $this->tag ),
				E_USER_ERROR
			);
		}

		$this->enqueue_static();

		$view_extra = apply_filters( 'fw_shortcode_render_view',
			array(
				'before' => '',
				'after'  => '',
			),
			$atts,
			$this->tag );

		return
			$view_extra['before'] .
			fw_render_view( $view_file,
				array(
					'atts'    => apply_filters( 'fw_shortcode_render_view:atts', $atts, $this->tag ),
					'content' => $content,
					'tag'     => $this->tag
				) ) .
			$view_extra['after'];
    }
}