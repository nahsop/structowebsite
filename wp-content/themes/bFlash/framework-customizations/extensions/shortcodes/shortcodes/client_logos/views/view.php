<h2 class="vk-heading vk-heading-border vk-heading-border-left">
                                <span>
                                  <?php echo fw_span_title($atts['heading']) ?>
                                    
                                </span>

                            </h2>
                            <ul class="vk-list vk-list-client-style-1">
                                <?php 
                                    if(!empty($atts['associate_logos'])):
                                        foreach($atts['associate_logos'] as $logo):
                                            $image = wp_get_attachment_image_src($logo['attachment_id'], 'thumb185');
                                ?>
                                <li class="vk-img-frame">
                                    <img src="<?php echo $logo['url']; ?>" alt="" >
                                </li>
                                <?php 
                                        endforeach;
                                    endif;
                                ?>

                            </ul>