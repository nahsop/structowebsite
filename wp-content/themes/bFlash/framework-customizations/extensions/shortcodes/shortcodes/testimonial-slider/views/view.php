
<h2 class="vk-heading vk-heading-border vk-heading-border-left">
                                <span>
                                  <?php echo fw_span_title($atts['heading']) ?>
                                    
                                </span>
                            </h2>

                            <div class="row">
                                <div class="vk-testimonial-list vk-slider-arrow-top customer-slider">
                                    <?php 
                                        if(!empty($atts['selected_testimoninals'])):
                                            foreach($atts['selected_testimoninals'] as $testimonial_id):
                                                $testimonial = get_post($testimonial_id);
                                                $name = fw_get_db_post_option($testimonial_id, 'author_name');
                                                $post = fw_get_db_post_option($testimonial_id, 'author_post');
                                                $image = fw_get_db_post_option($testimonial_id, 'author_image');
                                    ?>
                                                <div class="col-md-6 item">
                                                    <div class="vk-testimonial">
                                                        <div class="avatar">
                                                            <div class="vk-img-frame">
                                                                <a href="#" class="vk-img">
                                                                    <?php 
                                                                        if(!empty($image)):
                                                                            $image = wp_get_attachment_image_src($image['attachment_id'], 'thumb80');
                                                                    ?>
                                                                        <img src="<?php echo $image[0] ?>" alt="">

                                                                    <?php 
                                                                        else:
                                                                    ?>
                                                                    <img src="images/testimonial/testimonial-1.jpg" alt="">
                                                                    <?php 
                                                                        endif;
                                                                    ?>
                                                                </a>
                                                            </div>
                                                            <div class="profile">
                                                                <span class="name"><?php echo $name ?></span>
                                                                <span class="position"><?php echo $post ?></span>
                                                            </div>
                                                        </div>
                                                        <!--./avatar-->

                                                        <div class="content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p class="vk-text"><?php echo $testimonial->post_content; ?></p>
                                                        </div>
                                                        <!-- ./content-->
                                                    </div>
                                                    <!--./testimonial-->
                                                </div>
                                    <?php 
                                            endforeach;
                                        endif;
                                    ?>
                                </div>
                                <!--./vk-testimonial-list-->
                            </div>