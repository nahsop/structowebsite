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
                                        <!-- <div class="vk-img-frame"> -->
                                        	<?php 
                                        		if(has_post_thumbnail()){
                                        			// the_post_thumbnail();
                                        		}
                                        	?>
                                            <!-- <img src="images/blog-list/blog-list-1.jpg" alt=""> -->
                                        <!-- </div> -->
                                        <!-- <h4 class="vk-text-uppercase"><?php the_title(); ?></h4> -->
                                        <div class="vk-slider-project">
                                            <?php 
                                                $gallery = fw_get_db_post_option(get_the_ID(), 'gallery_images');
                                                // var_dump($gallery);
                                                if(!empty($gallery)):
                                            ?>

                                            <div class="slider-for">
                                                <?php 
                                                    foreach($gallery as $image):
                                                        $url = wp_get_attachment_image_src($image['attachment_id'], 'thumbSlider');
                                                        // var_dump($url);
                                                ?>
                                                <img src="<?php echo $url[0] ?>" alt="">
                                                <?php 
                                                    endforeach;
                                                ?>

                                                

                                            </div>
                                            <?php 
                                                endif;
                                            ?>
                                            <div class="slider-nav row" style="display: none;">
                                                <?php 
                                                    foreach($gallery as $image):
                                                        $url = wp_get_attachment_image_src($image['attachment_id'], 'thumb185');
                                                        // var_dump($url);
                                                ?>
                                                
                                                         <div class="col-md-2">
                                                            <div class="vk-img-frame">
                                                                <img src="<?php echo $url[0] ?>" alt="">
                                                            </div>
                                                        </div>
                                                <?php 
                                                    endforeach;
                                                ?>
                                               

                                                

                                            </div>

                                        </div>
                                        <!--./vk-slider-project-->
                                        <div class="info vk-space">
                                            <ul class="vk-list">
                                                <li class="vk-text-capitalize">Duration:<span>&nbsp; <?php echo fw_get_db_post_option(get_the_ID(), 'package_duration') ?> </span></li>
                                                <li class="vk-text-capitalize">Cost:<span>&nbsp; USD $ <?php echo fw_get_db_post_option(get_the_ID(), 'package_price_main') ?> </span></li>
                                                <li class="vk-text-capitalize">Group Size: &nbsp;<p><?php echo fw_get_db_post_option(get_the_ID(), 'package_group_size') ?> </p></li>
                                                <li class="vk-text-capitalize">Destination: &nbsp;<p><?php the_terms(get_the_ID(), 'destinations'); ?></p></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <div class="vk-tab tab-flat-no-bg">
                                                <ul class="vk-list vk-list-inline vk-nav-tabs clearfix">
                                                    <li role="presentation" class="active">
                                                        <a class="vk-cc-font-bold vk-text-uppercase" href="#general" data-toggle="tab" aria-expanded="false">General Information</a>
                                                    </li>
                                                    <li role="presentation" class="">
                                                        <a class="vk-cc-font-bold vk-text-uppercase" href="#itinerary" data-toggle="tab" aria-expanded="false">Itinerary</a>
                                                    </li>
                                                    <li role="presentation" >
                                                        <a class="vk-cc-font-bold vk-text-uppercase" href="#includes" data-toggle="tab" aria-expanded="true">Includes</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="vk-cc-font-bold vk-text-uppercase" href="#excludes" data-toggle="tab" aria-expanded="true">Excludes</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="vk-cc-font-bold vk-text-uppercase" href="#faq" data-toggle="tab" aria-expanded="true">FAQ</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content vk-tab-content">
                                                    <div class="tab-pane active" id="general">
                                                        <?php the_content(); ?>
                                                    </div>
                                                    <div class="tab-pane" id="itinerary">
                                                        <?php 
                                                            $itinerary_list = fw_get_db_post_option(get_the_ID(), 'itinerary_details');
                                                            $itinerary_text = fw_get_db_post_option(get_the_ID(), 'itinerary_main');
                                                            echo $itinerary_text;
                                                            if(!empty($itinerary_list)):
                                                                echo '<ul class="itinerary-list">';
                                                                foreach($itinerary_list as $list):
                                                        ?>
                                                                    <li>
                                                                        <h4><span><?php echo $list['itinerary_day']; ?></span> <?php echo $list['itinerary_title'] ?></h4>
                                                                        <p>
                                                                            
                                                                            <?php 
                                                                                echo $list['itinerary_text'];
                                                                            ?>
                                                                        </p>
                                                                    </li>
                                                            <?php 
                                                                endforeach;
                                                                echo '</ul>';
                                                            endif;
                                                            ?>

                                                        </div>
                                                    <div class="tab-pane " id="includes">
                                                        <?php 
                                                            echo fw_get_db_post_option(get_the_ID(), 'package_includes');
                                                        ?>
                                                        
                                                    </div>
                                                    <div class="tab-pane " id="excludes">
                                                        <?php 
                                                            echo fw_get_db_post_option(get_the_ID(), 'package_excludes');
                                                        ?>
                                                        
                                                    </div>
                                                    <div class="tab-pane " id="faq"> 
                                                        <!-- <div class="vk-section"> -->
                                                            <h4>Frequently Asked Questions</h4>
                                                            

                                                            <div class="vk-toggle vk-toggle-border vk-toggle-outlined">
                                                                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                                                    <?php 
                                                                        $faqs = fw_get_db_post_option(get_the_ID(), 'demo_multi_select_posts');
                                                                        // var_dump($faqs);
                                                                        if(!empty($faqs)):
                                                                            foreach($faqs as $faq ):
                                                                                $fpost = get_post($faq);
                                                                    ?>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab">
                                                                            <h4 class="panel-title">
                                                                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-<?php echo $fpost->ID ?>" aria-expanded="true" aria-controls="collapse-<?php echo $fpost->ID ?>" class="collapsed">
                                                                                    <?php echo $fpost->post_title ?>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapse-<?php echo $fpost->ID ?>" class="panel-collapse collapse " role="tabpanel">
                                                                            <div class="panel-body"> <?php echo $fpost->post_content; ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php  
                                                                            endforeach;
                                                                        endif;
                                                                    ?>
                                                                    
                                                                </div>
                                                            </div>

                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        	
                                        </div>
                                        

                                    </div>
                                    <?php 
                                    	endwhile;
                                    ?>
                                </div>
                                <div class="vk-space x-small hidden-md hidden-lg"></div>
                                <div class="col-md-3">
                                    <div class="share ">
                                            <ul class="list-inline">
                                                <li class="hidden-sm hidden-xs">
                                                    <h4 class="vk-text-uppercase">share</h4></li>
                                                <li>
                                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                
                                            </ul>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-block vk-btn-green " style="margin-bottom: 10px;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-bookmark" aria-hidden="true"></i> Book Now</a>

                                    <div class="sidebar-menu customized">
                                        
                                    
                                        <div class="catagory panelled" >
                                            <h4 class="vk-text-uppercase">Need More Information</h4>

                                            <ul class="vk-list vk-menu-right">
                                                <li>
                                                    <a href="#"><i class="fa fa-phone vk-text-right" aria-hidden="true"></i> Call Us: +97717727723</a>
                                                </li>
                                                <li class="vk-divider"></li>
                                                <li>
                                                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Email: info@mountainofnepal.com</a>
                                                </li>
                                                <li class="vk-divider"></li>
                                                <li>
                                                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Viber</a>
                                                </li>
                                                <li class="vk-divider"></li>

                                                <li>
                                                    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i> Skype</a>
                                                </li>
                                                <li class="vk-divider"></li>

                                                <li>
                                                    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
                                                </li>
                                                <li class="vk-divider"></li>
                                                
                                            </ul>
                                        </div>
                                        <?php 
                                            $package_map = fw_get_db_post_option(get_the_ID(), 'package_map');
                                            if(!empty($package_map)):
                                        ?>
                                                <div class="catagory panelled">
                                                    <h4 class="vk-text-uppercase"> Map</h4>
                                                    <a href="<?php echo $package_map['url'] ?>" class="vk-img" data-lightbox="image-slide-0" tabindex="0">
                                                        <img src="<?php echo $package_map['url'] ?>" alt="">
                                                    </a>
                                                </div>
                                        <?php 
                                            endif;
                                        ?>
                                        <div class="catagory panelled">
                                            <h4 class="vk-text-uppercase">Quick Contact</h4>
                                            <?php 
                                                echo do_shortcode('[contact-form-7 id="156" title="Contact form 1"]');
                                            ?>
                                        </div>
                                        
                                    </div>

                                        
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
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book This Trip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
            echo do_shortcode(fw_get_db_settings_option('booking_form'));
        ?>
      </div>
      
    </div>
  </div>
</div>
<?php
    
get_footer();
