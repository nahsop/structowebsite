<?php 
	// var_dump($atts);
	$style = '';
	if($atts['background_color_picker'] != ''){
	    $style = 'background-color: '.$atts['background_color_picker'].';';
	}
	$packages = get_posts_by_taxonomy('package_categories', $atts['post_type'][0], $atts['limit']);
	$splices = array_chunk($packages, 3);
	// array_chunk(input, size)
	// array_slice(array, offset)
	// array_splice(input, offset)
	// var_dump($splices);
?>
<div class="vk-section vk-recent-blog-section" style="<?php echo $style;?>">
    <div class="container">
        <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                <span>
                    <?php echo fw_span_title($atts['heading']) ?>
                    
                </span>
        </h2>
				<div class="blog-content">
					<?php 
						foreach($splices as $slice):
					?>
		                    <div class="row">
		                    	<?php 
		                    		if(is_array($slice)):
		                    			foreach($slice as $package):
		                    	?>
		                        <div class="col-md-4 col-sm-12" style="margin-bottom: 25px;">
		                                            <div class="content-box shortcode-packge-grid">

		                                                <div class="vk-img-frame">
		                                                    <a class="vk-img" href="<?php echo get_the_permalink($package) ?>">

		                                                        <img src="<?php echo get_the_post_thumbnail_url($package, 'thumb370') ?>" alt="">
		                                                    </a>
		                                                </div>

		                                                <div class="content">
		                                                    <a href="<?php echo get_the_permalink($package) ?>">
		                                                        <h4 class="vk-text-uppercase"><?php echo $package->post_title ?></h4>
		                                                    </a>
		                                                    <div class="vk-divider"></div>
		                                                    <div class="row vk-space x-small ">
		                                                    	<div class="col-md-6 col-xs-6">
		                                                    		<strong>Trip Cost</strong>
		                                                    		<h4>USD $<?php echo fw_get_db_post_option($package->ID, 'package_price_main') ?></h4>
		                                                    	</div>
		                                                    	<div class="col-md-6 col-xs-6 text-right"> 
		                                                    		<strong>Days</strong>
		                                                    		<h4><?php echo fw_get_db_post_option($package->ID, 'package_duration') ?></h4>
		                                                    		
		                                                    	</div>
		                                                    </div>
		                                                    <!-- <p>The other day the grass was brown, now it’s green because I ain’t give up. Never surender. They will try to close the door on you, just open it.</p> -->
		                                                    <div class="vk-buttons">
		                                                        <a href="<?php echo get_the_permalink($package) ?>" class="vk-btn  vk-btn-blue text-uppercase">
								                                    <span class="title">More Details</span>
									                                    
								                                </a>
		                                                    </div>

		                                                </div>
		                                            </div>
		                        </div>
		                        <?php 
		                        		endforeach;
		                        	else:
		                        		echo '<h2>Nothing found.</h2>';
			                        endif;
		                        ?>
		                        
		                                        
		                    </div>
                    <?php 
                    	endforeach;
                    ?>       
                    <!--.row-->
                	</div>
                </div>
                <!-- /.container -->

            </div>
            <!-- /.vk-recent-blog-section -->