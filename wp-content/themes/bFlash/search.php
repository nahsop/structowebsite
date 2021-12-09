<?php
/**
 * The Template for displaying all single posts
 */

get_header(); 
    
?>
    
	<section class="vk-content">
        <?php 
            echo fw_get_search_banner_layout(  );
        ?>
        <!--./vk-banner-->


		<?php echo fw_ext_get_breadcrumbs(  ) ?>
        
        <!--./vk-breadcrumb-->

        <!--  -->
        <div class="" data-example-id="media-alignment">
            <div class="vk-blog-wrapper">
                <!------ BEGIN BLOG WRPPER ------>
                <div class="container">
                    <div class="row">
                        <div class="">
                            <div class="single-blog">
                                <div class="col-md-9">
                                	<?php
							        	get_template_part('inc/list-simple');
											// Start the Loop.
									?>
                                </div>
                                <div class="vk-space x-small hidden-md hidden-lg"></div>
                                <div class="col-md-3">
                                	<?php 
                                	get_sidebar();
                                	?>
                                    
                                </div>
                            </div>
                            <!--------------------------------------------                 -------------------------------------------->
                            <div class="vk-space medium hidden-md hidden-lg"></div>
                        </div>
                    </div>
                    <!------ END BLOG WRAPPER ------>
                </div>
                <div class="vk-space x-medium"></div>
            </div>
        </div>
        <!-- / -->

    </section>
<?php
    
get_footer();
