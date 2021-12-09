<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Links_Widget extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => 'Additional Link widgets' );
		parent::__construct( false, __( 'Links Widget', 'unyson' ), $widget_ops );
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
		$instance = wp_parse_args( (array) $instance, array( 'widget_headline' => '', 'widget_content' => '' , 'widget_links' => []) );
		// if($instance)
		// var_dump($instance);
		
		// $values = array(
		// 	        array(
		// 	            'option_1' => 'value 1',
		// 	            'option_2' => 'value 2',
		// 	        ),
		// 	        // ...
		// 	    );
		// 	    
		$values = [];
		$options = array(
		    'widget_headline' => array( 'label'=> 'Headline', 'type' => 'text',     'value' => $instance['widget_headline'],  ),
		    'widget_links' => array(
			    'type'  => 'addable-box',
			    'value' => $instance['widget_links'],
			    // 'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Links', '{domain}'),
			    'desc'  => __('What links do you want to display', '{domain}'),
			    'help'  => __('Help tip', '{domain}'),
			    'box-options' => array(
			        'link_text' => array( 'type' => 'text' ),
			        'link_url' => array( 'type' => 'text' ),
			    ),
			    'template' => 'Hello {{- link_text }}', // box title
			    'box-controls' => array( // buttons next to (x) remove box button
			        'control-id' => '<small class="dashicons dashicons-smiley"></small>',
			    ),
			    'limit' => 0, // limit the number of boxes that can be added
			    'add-button-text' => __('Add', '{domain}'),
			    'sortable' => true,
			)

		);

		// simple usage
		echo fw()->backend->render_options($options);
	}
}
