<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Featured_Package extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => 'Display Packages according to package tags' );
		parent::__construct( false, __( 'Packages', 'unyson' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

	
		$title = fw_format_title($instance['widget_headline']); 
		
		$posts = explode('/*/', $instance['demo_multi_select_posts']) ;
		// var_dump($posts);
		$selected_posts = array_map(function($post){
			return get_post($post);
		}, $posts);
		// var_dump($selected_posts);
		// var_dump(fw_akg('demo_multi_select_posts', $posts));
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
		    'demo_multi_select_posts'      => array(
				'type'       => 'multi-select',
				'label'      => __( 'Featured Packages', 'unyson' ),
				'population' => 'posts',
				'source'     => 'packages',
				
			),
		);

		// simple usage
		echo fw()->backend->render_options($options);
	}
}
