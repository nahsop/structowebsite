<?php 
$background = fw_filter_background_image($atts, 'full', false);
$parallax_classes = '';
$style = '';
if($background != null){
	$parallax_classes = 'vk-parallax';
	$style = 'background-image: url('.$background.'); position: relative;';

}
?>
<div class="vk-image-slider-element">
	<div class="vk-image-slider-style-3 <?php echo $parallax_classes ?> list-item" style="<?php echo $style; ?>">
		<?php 
			if($background != null):

		?>
            <div class="vk-background-overlay vk-background-black-1 _90"></div>
        <?php 
        	endif;
        ?>

            <div class="container">
                <div class="text-center vk-space x-large">
                <?php
                    if($atts['heading'] != ''):
                 ?>
                    <h2 class="vk-heading vk-heading-line vk-heading-line-center">
                         <span>
                    <?php echo fw_span_title($atts['heading']) ?>
                            
                        </span>
                    </h2>
                <?php endif; ?>
                </div>
                <div class="row">
                    <div class="vk-slider vk-slick-slider vk-slider-circle" data-slick='{"slidesToShow": 4}'>
                    	<?php 
                                		array_walk($atts['slides'], function($slide, $index){
                                			$thumbnail = wp_get_attachment_image_src($slide['image']['attachment_id'], 'thumbSliderTwo');
                                			$attributes = 'class="vk-img" data-lightbox="image-slide-'.$index.'"';
		                                    	
                                			$href = $slide['image']['url'];
                                			if($slide['image_click_behaviour']['image_click'] == 'redirect'){
                                				$attributes = '';
                                				$href = $slide['image_click_behaviour']['redirect']['redirect'];
                                			}
                                			// if($atts[''])
                                			$template = '<div class="item col-md-3">
		                                        <div class="vk-img-frame">
		                                            <a href="%s" '.$attributes.'>
		                                                <img src="%s" alt="">
		                                            </a>
		                                        </div>
		                                        <ul class="content">
		                                            <li class="title">%s</li>
		                                            <li class="position">%s</li>
		                                        </ul>
		                                    </div>';
		                                    vprintf($template, [
		                                    	$href,
		                                    	$thumbnail[0],
		                                    	$slide['image_heading'],
		                                    	$slide['image_sub_heading']

		                                    ]);
                                		});
                                	?>
                        
                    </div>
                    <!--./vk-slider-->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
</div>