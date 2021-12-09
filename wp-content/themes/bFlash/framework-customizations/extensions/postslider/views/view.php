                <div class="vk-slider-project" style="margin-bottom: 15px;">

                    <div class="slider-for">
                        <!-- thumb185 -->
                        <?php 
                            foreach($slider_images as $image):
                                $main_image = wp_get_attachment_image_src($image['attachment_id'], 'thumbSlider');
                                if(is_array($main_image)):   
                                    $image_url = $main_image[0];   
                                    vprintf('<img src="%s" alt="">',  [$image_url]);
                                endif;
                            endforeach;
                        ?>
                    </div>
                    <div class="slider-nav row">

                        <?php 
                            foreach($slider_images as $image):
                                $main_image = wp_get_attachment_image_src($image['attachment_id'], 'thumb185');
                                if(is_array($main_image)):   
                                    $image_url = $main_image[0];   
                                    vprintf('<div class="col-md-2">
                                            <div class="vk-img-frame">
                                                <img src="%s" alt="">
                                            </div>
                                        </div>',[$image_url]);
                                endif;
                            endforeach;
                        ?>
                        

                    
                    </div>

                </div>