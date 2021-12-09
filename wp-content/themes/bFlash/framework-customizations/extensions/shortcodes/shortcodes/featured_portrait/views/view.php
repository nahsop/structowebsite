<div class="vk-service-section vk-section-style-5">
            <?php 
                array_walk($atts['portrait_pages'], function($page, $index){
                    // var_dump($page);
                    $stepPage = get_post($page['selected_page'][0]);
                    if($page['redirect_type']['redirect_type_selector'] == 'custom_redirect'){
                        $link = $page['redirect_type']['custom_redirect']['link'];
                    }else{
                        $link = get_permalink($stepPage);
                    }
                    $data = [
                                    get_the_post_thumbnail_url($stepPage, 'thumbPortrait'),
                                    $stepPage->post_title,
                            ];

                    // if($page['redire'])
                    $template = '<div class="col-md-3 col-xs-6 vk-clear-padding">
                                    <div class="vk-img-frame">
                                        <a href="'.$link.'" class="vk-img">
                                            <img src="%s" alt="">
                                            <div class="vk-background-black-1 vk-background-overlay _50"></div>
                                        </a>

                                    </div>
                                    <h2 class="vk-heading text-uppercase" aria-label="'.($index + 1).'">
                                        <span><a href="'.$link.'">%s</a></span></h2>
                                </div>';
                    vprintf($template, $data);
                });
            ?>
                

                
                
            </div>
            <!--./vk-service-section-->
            <div class="clearfix"></div>