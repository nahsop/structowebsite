<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * @var $instance
 * @var $before_widget
 * @var $after_widget
 * @var $title
 */


?>
<?php if ( ! empty( $instance ) ) : ?>
	<?php  
	// echo $before_widget 
	?>
	<!-- <div class="wrap-social"> -->
		<?php echo $title; ?>
		<ul class="vk-list vk-social-link">
			<?php foreach ( $instance as $key => $value ) :
				if ( empty( $value ) ) {
					continue;
				}
				?>
				<li>
					<a href="<?php echo esc_attr( $value ); ?>" class="btn-share" target="_blank">
						<i class="fa fa-<?php echo $key ?>"></i>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<!-- </div> -->
	<?php 
		// echo $after_widget 
	?>
<?php endif; ?>
 <!-- <ul class="vk-list vk-social-link">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                        <li><a href="#"><i class="fa fa-skype"></i></a></li>

                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>

                    </ul> -->