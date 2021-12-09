<div class="recentpots">
                                            <h4 class="vk-text-uppercase"><?php echo $title; ?></h4>
                                            <div class="row">
                                                <?php 
                                                    if(!empty($selected_posts)):
                                                        foreach($selected_posts as $sp):
                                                ?>
                                                <div class="recent-box col-sm-6 col-md-12">
                                                    <div class="vk-img-frame">
                                                        <a class="vk-img" href="<?php echo get_permalink($sp) ?>">
                                                                <img src="<?php echo get_the_post_thumbnail_url($sp, 'thumb370') ?>" alt="">
                                                            
                                                        </a>
                                                    </div>
                                                    <a href="<?php echo get_permalink($sp) ?>" class="vk-title"><?php echo $sp->post_title; ?></a>
                                                    <!-- <span>January 11, 2015</span> -->
                                                </div>
                                                <?php 
                                                        endforeach;
                                                    endif;
                                                ?>
                                                
                                            </div>
                                        </div>