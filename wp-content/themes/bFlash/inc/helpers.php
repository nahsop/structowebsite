<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Helper functions and classes with static methods for usage in theme
 */

/**
 * Register Lato Google font.
 *
 * @return string
 */
function fw_theme_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'unyson' ) ) {
		$font_url = add_query_arg( 'family', urlencode( 'Lato:300,400,700,900,300italic,400italic,700italic' ),
			"//fonts.googleapis.com/css" );
	}

	return $font_url;
}

/**
 * Getter function for Featured Content Plugin.
 *
 * @return array An array of WP_Post objects.
 */
function fw_theme_get_featured_posts() {
	/**
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'fw_theme_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @return bool Whether there are featured posts.
 */
function fw_theme_has_featured_posts() {
	return ! is_paged() && (bool) fw_theme_get_featured_posts();
}

if ( ! function_exists( 'fw_theme_the_attached_image' ) ) : /**
 * Print the attached image with a link to the next attached image.
 */ {
	function fw_theme_the_attached_image() {
		$post = get_post();
		/**
		 * Filter the default attachment size.
		 *
		 * @param array $dimensions {
		 *     An array of height and width dimensions.
		 *
		 * @type int $height Height of the image in pixels. Default 810.
		 * @type int $width Width of the image in pixels. Default 810.
		 * }
		 */
		$attachment_size     = apply_filters( 'fw_theme_attachment_size', array( 810, 810 ) );
		$next_attachment_url = wp_get_attachment_url();

		/*
		 * Grab the IDs of all the image attachments in a gallery so we can get the URL
		 * of the next adjacent image in a gallery, or the first image (if we're
		 * looking at the last image in a gallery), or, in a gallery of one, just the
		 * link to that image file.
		 */
		$attachment_ids = get_posts( array(
			'post_parent'    => $post->post_parent,
			'fields'         => 'ids',
			'numberposts'    => - 1,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => 'ASC',
			'orderby'        => 'menu_order ID',
		) );

		// If there is more than 1 attachment in a gallery...
		if ( count( $attachment_ids ) > 1 ) {
			foreach ( $attachment_ids as $attachment_id ) {
				if ( $attachment_id == $post->ID ) {
					$next_id = current( $attachment_ids );
					break;
				}
			}

			// get the URL of the next image attachment...
			if ( $next_id ) {
				$next_attachment_url = get_attachment_link( $next_id );
			} // or get the URL of the first image attachment.
			else {
				$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
			}
		}

		printf( '<a href="%1$s" rel="attachment">%2$s</a>',
			esc_url( $next_attachment_url ),
			wp_get_attachment_image( $post->ID, $attachment_size )
		);
	}
}
endif;

if ( ! function_exists( 'fw_theme_list_authors' ) ) : /**
 * Print a list of all site contributors who published at least one post.
 */ {
	function fw_theme_list_authors() {
		$contributor_ids = get_users( array(
			'fields'  => 'ID',
			'orderby' => 'post_count',
			'order'   => 'DESC',
			'who'     => 'authors',
		) );

		foreach ( $contributor_ids as $contributor_id ) :
			$post_count = count_user_posts( $contributor_id );

			// Move on if user has not published a post (yet).
			if ( ! $post_count ) {
				continue;
			}
			?>

			<div class="contributor">
				<div class="contributor-info">
					<div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
					<div class="contributor-summary">
						<h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name',
								$contributor_id ); ?></h2>

						<p class="contributor-bio">
							<?php echo get_the_author_meta( 'description', $contributor_id ); ?>
						</p>
						<a class="button contributor-posts-link"
						   href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
							<?php printf( _n( '%d Article', '%d Articles', $post_count, 'unyson' ), $post_count ); ?>
						</a>
					</div>
					<!-- .contributor-summary -->
				</div>
				<!-- .contributor-info -->
			</div><!-- .contributor -->

		<?php
		endforeach;
	}
}
endif;

/**
 * Custom template tags
 */
{
	if ( ! function_exists( 'fw_theme_paging_nav' ) ) : /**
	 * Display navigation to next/previous set of posts when applicable.
	 */ {
		function fw_theme_paging_nav( $wp_query = null ) {

			if ( ! $wp_query ) {
				$wp_query = $GLOBALS['wp_query'];
			}

			// Don't print empty markup if there's only one page.

			if ( $wp_query->max_num_pages < 2 ) {
				return;
			}

			$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
			$pagenum_link = html_entity_decode( get_pagenum_link() );
			$query_args   = array();
			$url_parts    = explode( '?', $pagenum_link );

			if ( isset( $url_parts[1] ) ) {
				wp_parse_str( $url_parts[1], $query_args );
			}

			$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
			$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

			$format = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link,
				'index.php' ) ? 'index.php/' : '';
			$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%',
				'paged' ) : '?paged=%#%';

			// Set up paginated links.
			$links = paginate_links( array(
				'base'      => $pagenum_link,
				'format'    => $format,
				'total'     => $wp_query->max_num_pages,
				'current'   => $paged,
				'mid_size'  => 1,
				'add_args'  => array_map( 'urlencode', $query_args ),
				'prev_text' => __( '&larr; Previous', 'unyson' ),
				'next_text' => __( 'Next &rarr;', 'unyson' ),
			) );

			if ( $links ) :

				?>
				<nav class="navigation paging-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'unyson' ); ?></h1>

					<div class="pagination loop-pagination">
						<?php echo $links; ?>
					</div>
					<!-- .pagination -->
				</nav><!-- .navigation -->
			<?php
			endif;
		}
	}
	endif;

	if ( ! function_exists( 'fw_theme_post_nav' ) ) : /**
	 * Display navigation to next/previous post when applicable.
	 */ {
		function fw_theme_post_nav() {
			// Don't print empty markup if there's nowhere to navigate.
			$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '',
				true );
			$next     = get_adjacent_post( false, '', false );

			if ( ! $next && ! $previous ) {
				return;
			}

			?>
			<nav class="navigation post-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'unyson' ); ?></h1>

				<div class="nav-links">
					<?php
					if ( is_attachment() ) :
						previous_post_link( '%link',
							__( '<span class="meta-nav">Published In</span>%title', 'unyson' ) );
					else :
						previous_post_link( '%link',
							__( '<span class="meta-nav">Previous Post</span>%title', 'unyson' ) );
						next_post_link( '%link', __( '<span class="meta-nav">Next Post</span>%title', 'unyson' ) );
					endif;
					?>
				</div>
				<!-- .nav-links -->
			</nav><!-- .navigation -->
		<?php
		}
	}
	endif;

	if ( ! function_exists( 'fw_theme_posted_on' ) ) : /**
	 * Print HTML with meta information for the current post-date/time and author.
	 */ {
		function fw_theme_posted_on() {
			if ( is_sticky() && is_home() && ! is_paged() ) {
				echo '<span class="featured-post">' . __( 'Sticky', 'unyson' ) . '</span>';
			}

			// Set up and print post meta information.
			printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
				esc_url( get_permalink() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}
	}
	endif;

	/**
	 * Find out if blog has more than one category.
	 *
	 * @return boolean true if blog has more than 1 category
	 */
	function fw_theme_categorized_blog() {
		if ( false === ( $all_the_cool_cats = get_transient( 'fw_theme_category_count' ) ) ) {
			// Create an array of all the categories that are attached to posts
			$all_the_cool_cats = get_categories( array(
				'hide_empty' => 1,
			) );

			// Count the number of categories that are attached to the posts
			$all_the_cool_cats = count( $all_the_cool_cats );

			set_transient( 'fw_theme_category_count', $all_the_cool_cats );
		}

		if ( 1 !== (int) $all_the_cool_cats ) {
			// This blog has more than 1 category so fw_theme_categorized_blog should return true
			return true;
		} else {
			// This blog has only 1 category so fw_theme_categorized_blog should return false
			return false;
		}
	}

	/**
	 * Display an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index
	 * views, or a div element when on single views.
	 */
	function fw_theme_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		$current_position = false;
		if (function_exists('fw_ext_sidebars_get_current_position')) {
			$current_position = fw_ext_sidebars_get_current_position();
		}



		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php
				if ( ( in_array( $current_position,
						array( 'full', 'left' ) ) || is_page_template( 'page-templates/full-width.php' )
					|| empty($current_position)
				)
				) {
					the_post_thumbnail( 'fw-theme-full-width' );
				} else {
					the_post_thumbnail();
				}
				?>
			</div>

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>">
				<?php
				if ( ( in_array( $current_position,
						array( 'full', 'left' ) ) || is_page_template( 'page-templates/full-width.php' ) )
						|| empty($current_position)
				) {
					the_post_thumbnail( 'fw-theme-full-width' );
				} else {
					the_post_thumbnail();
				}
				?>
			</a>

		<?php endif; // End is_singular()
	}
}

/**
 * Change the header background style.
 *
 * Change the display style of the header element
 * according to the theme setting.
 * @param string $type
 * @return string
 */
function fw_theme_header_background_style($type){
	$style = fw_get_db_customizer_option('header_background');
	// var_dump($style);

	if($type == 'class'){
		if($style['header_background_style'] == 'transparent'){

			return 'vk-header-transparent';
		}
	}elseif($type == 'style'){
		if($style['header_background_style'] == 'solid'){

			
			return 'style="background-color: '.$style['solid']['header_background_color'].';"';
		}
	}
}
function fw_theme_fixed_style(){
	return fw_get_db_customizer_option('fixed_header');
}
function fw_section_background_style($atts){
	$style = '';
	if($atts['background_color_picker'] != ''){
	    $style = 'background-color: '.$atts['background_color_picker'].';';
	}
	if(!empty($atts['backgroud_image'])){
		$style .= 'background-image: url('.fw_filter_background_image($atts, 'full', false).')';
	}
	
	return $style;
}
/**
 * Display the proper header
 *
 * Load the proper header for the website using the selected options in administrator.
 * 
 */
function fw_theme_get_main_header(){
	// get the type of header from setting option
	$type = fw_get_db_customizer_option('header_style');
	// var_dump($type);
	// die();
	load_template(get_template_directory().'/inc/header-'.$type.'.php');

}
function fw_theme_shop_quick_cart_button($header_type){
	return '';
	echo $template;
	if($header_type == 'left'){

		$template = '<div class="shopping-cart hidden-md hidden-lg">
                        <i class="fa fa-shopping-basket" data-toggle="collapse" data-target="#shopping-cart-list"></i>
                        <span class="number-item">0</span>
                    </div>';

	}
	return $template;

}
function fw_theme_shop_quick_cart_button_desktop($header_type){
	return '';
	echo '<div class="shopping-cart">
                        <i class="fa fa-shopping-basket" data-toggle="collapse" data-target="#shopping-cart-list"></i>
                        <span class="number-item">0</span>
                    </div>';
}
function fw_theme_shop_quick_cart(){
	return '';
	$type = fw_get_db_customizer_option('header_style');
	load_template(get_template_directory().'/inc/quick-cart.php');
}
function fw_theme_header_notes($display){
	foreach($display as $key){
		if($key == 'phone_numbers'){
			// var_dump(fw_get_db_settings_option($key));
			$numbers = array_map(function($v){
				return $v['phone_number'];
			}, fw_get_db_settings_option($key));
			// var_dump($numbers);
			$value = join($numbers);

		}else{
			$value = fw_get_db_settings_option($key);
		}
		echo '<li>'.$value.'</li>';
	}
	
}
function fw_theme_logo(){
	$main_logo = fw_get_db_customizer_option('logo');
	$background_color = fw_get_db_customizer_option('logo_background', '#fcfcfc');

	// var_dump($background_color);
	if(!empty($main_logo)){
		echo '<a class="vk-navbar-brand navbar-brand" href="'.get_bloginfo('wpurl').'" ><img src="'.$main_logo['url'].'" id="wicon-logo-svg"/></a>';
	}
    // echo '<span class="logo-text text-uppercase">WICON</span>';

}
/**
 * Format the title with the first word being yellow and the second word being white
 * @param  string $title The title of the heading
 * @param  boolean $single_color Default multicolor layout if single color pass true
 * @return strinng        the formatted title of the heading
 */
function fw_format_title($title, $single_color = false){
	// split the text
	$widget_title_array = explode(' ', $title);
	// set default behaviour
	$title_template = '<h4 class="vk-heading text-uppercase"><span class="vk-text-color-yellow-1">%s</span> %s</h4>';
	// set single color behaviour if true
	if($single_color == true){
		$title_template = '<h4 class="vk-heading text-uppercase">%s %s</h4>';
	}
	// initialize variables
	$first_word = '';
	$other_words = [];
	$other_words_string = '';
	// Take out first and the rest words from title
	foreach($widget_title_array as $key => $val){
		if($key == 0){
			$first_word = $val;
		}else{
			$other_words[] = $val;
		}
	}
	// join all words other than the first
	$other_words_string = implode(' ', $other_words);
	// return formatted html string
	return sprintf($title_template, $first_word, $other_words_string);
}

function fw_span_title($title, $single_color = false){
	// split the text
	$widget_title_array = explode(' ', $title);
	// set default behaviour
	$title_template = '<span class="vk-text-color-yellow-1">%s</span> %s';
	// set single color behaviour if true
	if($single_color == true){
		$title_template = '%s %s';
	}
	// initialize variables
	$first_word = '';
	$other_words = [];
	$other_words_string = '';
	// Take out first and the rest words from title
	foreach($widget_title_array as $key => $val){
		if($key == 0){
			$first_word = $val;
		}else{
			$other_words[] = $val;
		}
	}
	// join all words other than the first
	$other_words_string = implode(' ', $other_words);
	// return formatted html string
	return sprintf($title_template, $first_word, $other_words_string);
}
function fw_title_seperator($title){
	// split the text
	$widget_title_array = explode(' ', $title);
	// set default behaviour
	$title_template = '<span class="vk-text-color-yellow-1">%s</span> %s';
	// set single color behaviour if true
	if($single_color == true){
		$title_template = '%s %s';
	}
	// initialize variables
	$first_word = '';
	$other_words = [];
	$other_words_string = '';
	// Take out first and the rest words from title
	foreach($widget_title_array as $key => $val){
		if($key == 0){
			$first_word = $val;
		}else{
			$other_words[] = $val;
		}
	}
	// join all words other than the first
	$other_words_string = implode(' ', $other_words);
	// return formatted html string
	return [$first_word, $other_words_string];
}

function fw_display_search_box(){
	echo '<div class="box-search-header collapse" id="box-search-header">
				
				<form method="get" action="'.get_bloginfo('wpurl').'" target="_self">
	            	<div class="vk-input-group">
	                	<input type="text" name="s" placeholder="Search" class="form-control">
	                    <button class="vk-btn btn-search" type="submit">
	                    	<i class="fa fa-search"></i>
	                    </button>
	                </div>
	            </form>
            </div>';
}
/**
 * Filter the attributes
 * @param  Array $atts [description]
 * @param  String $key  [description]
 * @return String       [description]
 */
function fw_filter_atts($atts, $key){
	if(array_key_exists($key, $atts)){

		return $atts[$key];
	}
	return 'N/A';
}
/**
 * [fw_filter_image_by_thumbnail description]
 * @param  Array  $image_array [description]
 * @param  string $thumbnail   [description]
 * @return [type]              [description]
 */
function fw_filter_image_by_thumbnail(Array $image_array, $thumbnail = ''){
	// var_dump($image_array);
	// var_dump($thumbnail);
	$background_image = wp_get_attachment_image_src($image_array['attachment_id'], $thumbnail);
	// var_dump($background_image);
	if(!empty($background_image)){
		
		// die();
		return $image = $background_image[0];
	}
	return null;	
}
function fw_filter_generate_video($videoAtts){
	// var_dump($videoAtts);
	echo '<div class="vk-background-overlay "></div>
			    <div class="vk-background-image">
			    <!--poster="poster.JPG" -->
			        <video class="videoBG"  autoplay muted loop>
					    <source src="'.$videoAtts['url'].'" type="video/mp4">
					</video>
		</div>';
	return;
}
/**
 * [fw_filter_image description]
 * @param  Array         $atts      [description]
 * @param  String        $key       [description]
 * @param  String|string $thumbnail [description]
 * @return [type]                   [description]
 */
function fw_filter_background_image(Array $atts, String $thumbnail = '', $html = true){
	// return if background image is not found or array is empty
	if(!array_key_exists('backgroud_image', $atts) && empty($atts['background_image'])) return;
	// Check if the bckground file is mp4
	// if true send to generate video html
	$file_type = wp_check_filetype($atts['backgroud_image']['url']);
	if($file_type['type'] == 'video/mp4') return fw_filter_generate_video($atts['backgroud_image']);
	
	// get background image
	$background_image = $atts['backgroud_image'];
	$image = $background_image['url'];
	if($thumbnail != ''){
		$background_image = wp_get_attachment_image_src($background_image['attachment_id'], $thumbnail);
		if(!empty($background_image)){
			$image = $background_image[0];
		}
	}
	if($html != true){
		return $image;
	}
		echo '<div class="vk-background-overlay "></div>
			    <div class="vk-background-image '.fw_parallax_class($atts['parallax_effect']).'">
			        <img src="'.$image.'" alt="">
			    </div>';


}

function fw_filter_parallax_class(Array $atts){
	$background = fw_filter_background_image($atts, 'full', false);

	if($background != null && array_key_exists('parallax_effect', $atts) && $atts['parallax_effect'] == 'yes'){

		$parallax_classes = 'vk-parallax';
		echo $parallax_classes;
		// $style = 'background-image: url('.$background.'); position: relative;';

	}
}
function fw_filter_slider_image(Array $atts, String $thumbnail = '', $html = true){
	// return if background image is not found or array is empty
	// var
	// 
	// var_dump($atts);
	if(!array_key_exists('slider_image', $atts) && empty($atts['slider_image'])) return;
	// get background image
	$background_image = $atts['slider_image'];
	$image = $background_image['url'];
	if($thumbnail != ''){
		$background_image = wp_get_attachment_image_src($background_image['attachment_id'], $thumbnail);
		if(!empty($background_image)){
			$image = $background_image[0];
		}
	}
	if($html != true){
		return $image;
	}
		echo '<div class="vk-background-overlay "></div>
			    <div class="vk-background-image '.fw_parallax_class($atts['parallax_effect']).'">
			        <img src="'.$image.'" alt="">
			    </div>';


}

/**
 * Generate text alignment class name according to argument
 * @param  String|string $alignment left center or right
 * @param  Boolea|bool $echo to echo or print default true
 * @return [type]                   [description]
 */
function fw_text_alignment_class(String $alignment = '', $echo = true){
	$class = '';
	switch ($alignment) {
		case 'left':
			$class = ' text-left';
			# code...
			break;
		case 'right':
			# code...
			$class = ' text-right';
			break;
		case 'center':
			# code...
			$class = ' text-center';
			break;
		
		default:
			# code...
			$class= ' text-left';
			break;
	}
	if($echo == false){

		return $class;
	}
	echo $class;
}
function fw_parallax_class(String $parallax_effect){
	if($parallax_effect == 'yes'){
		return 'vk-parallax';
	}
}
function fw_button_style($button){
	// echo 'vk-btn-icon vk-btn-default';
	// 
	// var_dump($button['cta_icon']['yes']['cta_icon']);
	$classes = [];
	if($button['cta_style'] == 'flat'){
		$classes[] = 'vk-btn-default';
	}
	if($button['cta_style'] == 'outline'){
		$classes[] = 'vk-btn-transparent ';
		
	}
	if($button['cta_style'] == '3d'){
		
		$classes[] = 'vk-border-bottom ';

	}
	if($button['cta_shape'] == 'round'){
		$classes[] = 'vk-border-radius';
	}
	if($button['cta_icon']['enable_icon'] == 'yes'){
		
		$classes[] = 'vk-btn-icon';

	}
	
	if($button['cta_color'] == 'style-yellow'){
		if($button['cta_style'] == 'outline'){
			$classes[] = ' vk-border-yellow';

		}else{
			
			$classes[] = 'vk-btn-default';
		}

	}elseif($button['cta_color'] == 'style-green'){
		if($button['cta_style'] == 'outline'){
			$classes[] = ' vk-border-green';

		}else{
			
			$classes[] = 'vk-btn-green';
		}

	}elseif($button['cta_color'] == 'style-purple'){
		if($button['cta_style'] == 'outline'){
			$classes[] = ' vk-border-violet';

		}else{
			
			$classes[] = 'vk-btn-violet';
		}

	}elseif($button['cta_color'] == 'style-torquise'){
		if($button['cta_style'] == 'outline'){
			$classes[] = ' vk-border-turquoise';

		}else{
			
			$classes[] = 'vk-btn-turquoise ';
		}

	}elseif($button['cta_color'] == 'style-blue'){
		if($button['cta_style'] == 'outline'){
			$classes[] = ' vk-border-blue';

		}else{
			
			$classes[] = 'vk-btn-blue';
		}

	}else{
		if($button['cta_style'] == 'outline'){
			$classes[] = ' vk-border-yellow';
		}else{
			
			$classes[] = 'vk-btn-default';
		}

	}

// 	style-yellow

// style-purple
// style-torquise
// style-blue
	$string_class = implode(' ', $classes);
	return $string_class;
	

}
function fw_cta_icon($button){
	if($button['cta_icon']['enable_icon'] == 'yes'){
		$cta_icon = $button['cta_icon']['yes']['cta_icon'];
		return '<span class="icon">
                	<i class="'.$cta_icon['icon-class'].'"></i>
				</span>';
	}
}
function fw_cta_buttons($atts){
	// var_dump($atts);
	if(!array_key_exists('cta_buttons', $atts) || empty($atts['cta_buttons'])) return;
	$buttons = $atts['cta_buttons'];
	echo '<div class="vk-buttons">';
		foreach($buttons as $button){
			echo   '<a href="'.$button['cta_link'].'" class="vk-btn '.fw_button_style($button).' text-uppercase">
                   		<span class="title">'.$button['cta_label'].'</span>
                   		'.fw_cta_icon($button).'
                        
                    </a>';
		}
	echo '</div>';
	// var_dump()
	// echo '<div class="vk-buttons">
 //                            
                            
 //                        </div>';
}
function fw_get_heading_style($atts){
	echo $atts['heading_style'];
	if($atts['heading_style'] != 'vk-heading-icon' && $atts['panel_alignment'] != ''){
		echo ' '.$atts['heading_style'].'-'.$atts['panel_alignment'];

	}
	
}
function fw_spaces_classes($atts){
	if(array_key_exists('enable_space', $atts) && $atts['enable_space']['space_status'] == 'yes'){
		echo 'vk-space '.$atts['enable_space']['yes']['space_type'];
	}
}
function fw_registered_post_types(){
	$types = get_post_types(['public' => true,'_builtin' => false]);
	$type_array = [
		'post' => 'Default Posts',
  		'page' => 'Default Pages'
	];
	foreach($types as $key => $type){
		$type_array[$key] = ucfirst($type);
	}
	return $type_array;
}
function fw_pagination_load_more(){
	echo '<a href="#" class="vk-btn vk-btn-transparent vk-fullwidth text-uppercase">Load more
                        <i class="fa fa-long-arrow-down"></i></a>';
}
function fw_pagination_links(){
	echo '<nav class="box-pagination text-center">'.paginate_links().'</nav>';
	return;
	echo ' <nav class="box-pagination text-center">
                                        <ul class="vk-pagination">
                                            <li class="begin arrow">
                                                <a href="#"><span>first</span></a>
                                            </li>
                                            <li class="prev arrow">
                                                <a href="#"><span>back</span></a>
                                            </li>
                                            <li class="active">
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <a href="#"><span>2</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>3</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>4</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>5</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>6</span></a>
                                            </li>
                                            <li class="next arrow">
                                                <a href="#"><span>next</span></a>
                                            </li>
                                            <li class="end arrow">
                                                <a href="#"><span>last</span></a>
                                            </li>
                                        </ul>
                                    </nav>';

}
function fw_get_breadcrumb_layout($text = null){
	// $banner_404 = fw_get_db_settings_option('404_featured');
	global $post;
	$thumbnail_url = get_the_post_thumbnail_url($post);
	if($thumbnail_url != ''){
		$background_image_url = $thumbnail_url;

	}else{
		$background_image_url = get_template_directory_uri().'/images/project/single-project/img-1.jpg';
	}
	$style = 'background-image: url('.$background_image_url.'); background-size: cover;';
	// var_dump($style);
	if($text == null){
		$text = $post->post_title;
	}
	$template = '<div class="vk-banner vk-background-image-1" style="%s">
            <div class="vk-background-overlay vk-background-black-1 _80"></div>
            <div class="container wrapper">
                <div class="page-heading">
                  	%s
                </div>
            </div>
        </div>';
	return sprintf($template, $style, $text );
}
function fw_get_404_banner_layout($text){
	$banner_404 = fw_get_db_settings_option('404_banner');
	$style = '';
	if(!empty($banner_404)){
		$style = 'background-image: url('.$banner_404['url'].'); background-size: cover;';
	}
	$template = '<div class="vk-banner vk-background-image-1" style="'.$style.'">
            <div class="vk-background-overlay vk-background-black-1 _80"></div>
            <div class="container wrapper">
                <div class="page-heading">
                  	%s
                </div>
            </div>
        </div>';
	return sprintf($template, $text);
}
function fw_get_search_banner_layout(){
	$banner_404 = fw_get_db_settings_option('search_banner');
	$style = '';
	if(!empty($banner_404)){
		$style = 'background-image: url('.$banner_404['url'].'); background-size: cover;';
	}
	$template = '<div class="vk-banner vk-background-image-1" style="'.$style.'">
            <div class="vk-background-overlay vk-background-black-1 _80"></div>
            <div class="container wrapper">
                <div class="page-heading">
                  	Search results for: '.get_search_query().'
                </div>
            </div>
        </div>';
	return sprintf($template, $text);
}
function get_posts_by_taxonomy($taxonomy_name, $taxonomy_id, $limit){
	$posts_array = get_posts(
	    array(
	        'posts_per_page' => $limit,
	        'post_type' => 'packages',
	        'tax_query' => array(
	            array(
	                'taxonomy' => $taxonomy_name,
	                'field' => 'term_id',
	                'terms' => $taxonomy_id,
	            )
	        )
	    )
	);	
	return $posts_array;
}
function fw_classify_text($text){
	return str_replace(' ', '-', $text);
}
function has_offset_header(){
	if(fw_get_db_customizer_option('header_style') == 'left-offset'){ return true; }
	return false;

}