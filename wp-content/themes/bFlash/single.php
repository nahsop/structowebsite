<?php
/**
 * The Template for displaying all single posts
 */

get_header(); 
    
?>
    
	<section class="vk-content">
        <?php 
            while(have_posts()):
                the_post();
        ?>
        <div class="vk-banner vk-background-image-8" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>); background-position: center;">
            <div class="vk-background-overlay vk-background-black-1 _20"></div>
            <div class="container wrapper">
                <div class="page-heading single-feature">
                    <?php the_title(); ?>
                </div>
                <div class="page-subheading single-feature">
                    <?php echo fw_get_db_post_option(get_the_ID(), 'package_subtitle'); ?>
                </div>
            </div>
        </div>
        <?php 
            endwhile;
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
                                		while(have_posts()):
                                			the_post();
                                	?>
                                    <div class="blog-content">
                                        <?php 
                                            if(function_exists('fw_render_post_slider')){
                                                fw_render_post_slider();
                                            }
                                        ?>
                                        <!--./vk-slider-project-->
                                        <div class="content">
                                            <div class="vk-tab tab-flat-no-bg">
                                                
                                                <?php the_content(); ?>
                                                
                                            </div>
                                        	
                                        </div>
                                        <div class="share">
                                            <ul class="list-inline">
                                                <li class="hidden-sm hidden-xs">
                                                    <h4 class="vk-text-uppercase">share</h4></li>
                                                <li>
                                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tag">
                                            <ul class="list-inline">
                                                <li class="hidden-sm hidden-xs"><h4 class="vk-text-uppercase">tag</h4></li>
                                                <li class="vk-tag"><a href="#">building</a></li>
                                                <li class="vk-tag"><a href="#">architecture</a></li>
                                                <li class="vk-tag"><a href="#">design</a></li>
                                                <li class="vk-tag"><a href="#">consultant</a></li>
                                                <li class="vk-tag"><a href="#">funiture</a></li>
                                                <li class="vk-tag"><a href="#">renovation</a></li>
                                            </ul>
                                        </div>
                                        

                                    </div>
                                    <?php 
                                    	endwhile;
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
