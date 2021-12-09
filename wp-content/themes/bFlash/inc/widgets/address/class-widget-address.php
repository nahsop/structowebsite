<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Address extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => 'Multiple Addable Address widget' );
		parent::__construct( false, __( 'Addable Address Widget', 'unyson' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );
		$title = fw_format_title($instance['widget_headline'], true); 
		
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
		$instance = wp_parse_args( (array) $instance, array( 'widget_headline' => '', 'widget_content' => '' , 'widget_address' => []) );
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
		    'widget_address' => array(
			    'type' => 'addable-box',
			    'value' => $instance['widget_address'],
			    'label' => __('Add Address', '{domain}'),
			    'box-options' => array(
			        'address' => array(
			            'label' => __('Address', '{domain}'),
			            'type' => 'text',
			        ),
			        'email' => array(
			            'label' => __('Email', '{domain}'),
			            'type' => 'text',
			        ),
			        'phone_number' => array(
			            'label' => __('Phone Number', '{domain}'),
			            'type' => 'text',
			        ),
			    ),
			    'template' => 'Hello {{- address }}', // box title
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
