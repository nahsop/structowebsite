<div class="" data-example-id="media-alignment">
            <div class="vk-blog-wrapper vk-blog-list">
                <!------ BEGIN BLOG WRPPER ------>
                <div class="container">
                    <div class="row">
                        <div class="blog-list clearfix">
                            <div class="col-md-9">
                                <div class="blog-content">
                                    <?php 
                                        while (have_posts()) {
                                            the_post();
                                            # code...
                                    ?>
                                        <!---------------------------------- ---------------------------------->
                                        <div class="content-box">
                                            <div class="vk-img-frame">
                                                <?php 
                                                    if(has_post_thumbnail()):
                                                ?>
                                                <a class="vk-img" href="<?php the_permalink(); ?>">
                                                    <?php 
                                                        the_post_thumbnail('thumbArchveBig');
                                                    ?>
                                                </a>
                                                <?php
                                                    endif;
                                                 ?>
                                            </div>
                                            <h4 class="vk-text-uppercase"><?php the_title(); ?></h4>
                                            <div class="info">
                                                <ul class="vk-list">
                                                    <li class="vk-text-capitalize">catagory:<span>&nbsp; <?php echo get_the_category_list(',', 'single'); ?>  </span></li>
                                                    <li class="vk-text-capitalize">date: <span>&nbsp; <?php the_date(); ?> </span></li>
                                                    <!-- <li class="vk-text-capitalize">comments: &nbsp;
                                                        <p>4</p>
                                                    </li> -->
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <?php the_excerpt(); ?>
                                                <div class="vk-buttons">
                                                    <a href="<?php the_permalink() ?>" class="vk-btn vk-btn-transparent vk-btn-readmore text-uppercase">
                                                        FURTHER INFORMATION
                                                        <i class="fa fa-long-arrow-right vk-text-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="vk-divider"></div>
                                        </div>
                                        <!---------------------------------- ---------------------------------->
                                    <?php 
                                        }
                                        fw_pagination_links();
                                   
                                    ?>
                                    
                                    
                                    <!-- PAGE NUMBER -->

                                   
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                
                            </div> -->
                        </div>

                    </div>
                    <!------ END BLOG WRAPPER ------>
                </div>

            </div>
        </div>