
<div class="vk-section vk-recent-blog-section">
    <div class="container">
        <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                <span>
                    <?php echo fw_span_title($atts['heading']) ?>
                    
                </span>
        </h2>

                    <div class="row">
                        <div class="vk-recent-blog-list vk-slider-arrow-top  vk-slider-arrow-dot-top recent-blog-slider">
                            <?php 
                                $displayed_posts = get_posts([
                                    'post_type' => $atts['post_type'][0],
                                    'numberposts' => $atts['limit']
                                ]);
                                if(!empty($displayed_posts)):
                                    foreach($displayed_posts as $post):
                            ?>
                            <div class="col-md-6">
                                <div class="vk-recent-blog">
                                    <div class="vk-img-frame">
                                        <a href="<?php echo get_permalink($post->ID) ?>" class="vk-img">
                                            <?php 
                                                echo get_the_post_thumbnail($post->ID, 'thumb370b');
                                            ?>
                                        </a>
                                    </div>
                                    <!--./vk-recent-blog-->

                                    <div class="brief-content">
                                        <h4 class="vk-title"><a href="5.3-single-blog.html"><?php echo $post->post_title ?></a></h4>
                                        <p class="vk-text brief"><?php echo get_the_excerpt($post->ID) ?></p>
                                        <div class="vk-buttons">
                                            <a href="<?php echo get_permalink($post->ID); ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
                                                <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!--./brief-content-->
                                </div>
                                <!-- /.vk-recent-blog -->
                            </div>
                            <?php 
                                    endforeach;
                                endif;
                            ?>
                            
                        </div>
                    </div>
                    <!--.row-->
                </div>
                <!-- /.container -->

            </div>
            <!-- /.vk-recent-blog-section -->