<?php 
class FW_Shortcode_Counters extends FW_Shortcode
{
    // ...
    public function _render($atts, $content = NULL, $tag = ''){
    	$view_file = $this->locate_path( '/views/'.$atts['counter_layout'].'.php' );
		if ( ! $view_file ) {
			trigger_error(
				sprintf( __( 'No default view (views/'.$atts['counter_layout'].'.php) found for shortcode: %s', 'fw' ), $this->tag ),
				E_USER_ERROR
			);
		}

		$this->enqueue_static();
		$column = 12/count($atts['counts']);
		$atts['column'] = $column;
		$view_extra = apply_filters( 'fw_shortcode_render_view',
			array(
				'before' => '',
				'after'  => '',
			),
			$atts,
			$this->tag );
		// var_dump($atts);

		return
			$view_extra['before'] .
			fw_render_view( $view_file,
				array(
					'atts'    => apply_filters( 'fw_shortcode_render_view:atts', $atts, $this->tag ),
					'column'  => $column,
					'content' => $content,
					'tag'     => $this->tag
				) ) .
			$view_extra['after'];
    }
}