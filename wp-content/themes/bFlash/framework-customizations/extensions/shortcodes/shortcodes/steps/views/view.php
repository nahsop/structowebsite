
<div class="vk-work-process">
                <div class="container">
                    <h2 class="vk-heading vk-heading-border vk-heading-border-right vk-text-right">
                    <span>
                                <?php echo fw_span_title($atts['heading']) ?>
                        
                    </span>
                    </h2>

                    <div class="vk-list-step">
                        <?php 
                            array_walk($atts['steps_pages'], function($page, $index){
                                $stepPage = get_post($page);
                                $data = [
                                    get_the_post_thumbnail_url($stepPage, 'thumb400'),
                                    $stepPage->post_title,
                                    $stepPage->post_content,
                                ];
                                // var_dump($data);

                                $template = '<div class="row item-row" aria-label="'.($index+1).'">
                                                <div class="col-md-6 left-step">
                                                    <div class="vk-img-frame">
                                                        <img src="%s" alt="">
                                                    </div>
                                                </div>
                                                <!--./left-->
                                                <div class="col-md-6 right-step">
                                                    <h4 class="vk-title text-uppercase">%s</h4>
                                                    %s
                                                </div>
                                                <!--./right-->
                                            </div>';
                                vprintf($template, $data);
                            });
                        ?>
                        
                        
                    </div>
                    <!--./vk-list-step-->
                </div>
                <!--./container-->
            </div>