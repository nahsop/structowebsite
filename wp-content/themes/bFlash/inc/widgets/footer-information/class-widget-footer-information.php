<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Footer_Information extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => 'Customized Footer Information' );
		parent::__construct( false, __( 'Footer Information', 'unyson' ), $widget_ops );
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
		$instance = wp_parse_args( (array) $instance, array( 'widget_headline' => '', 'widget_content' => '' ) );
		// var_dump($instance);
		$options = array(
		    'widget_headline' => array( 'label'=> 'Headline', 'type' => 'text',     'value' => $instance['widget_headline'],  ),
		    'widget_content' => array( 'label'=> 'Text','type' => 'wp-editor', 'value' => $instance['widget_content'] ),
		);

		// simple usage
		echo fw()->backend->render_options($options);
	}
}
