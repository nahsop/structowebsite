<?php 
    // var_dump($atts);
    $unique_id = $atts['unique_id'];
?>
<div class="vk-section">
                            <h2 class="vk-heading vk-heading-line vk-heading-line-center">
                             <span>
                                <?php echo fw_span_title($atts['heading']) ?>
                                
                            </span>
                            </h2>


                            <div class="vk-toggle <?php echo $atts['faq_type'] ?>">
                                <div class="panel-group" id="accordion<?php echo $unique_id ?>" role="tablist" aria-multiselectable="true">
                                    <?php 
                                        $type = $atts['faq_content_type']['faq_type_selector'];
                                        // var_dump($atts['faq_content_type'][$atts['faq_content_type']['faq_type_selector']]);
                                        array_walk($atts['faq_content_type'][$atts['faq_content_type']['faq_type_selector']]['faqs'], function($faq) use ( $type, $unique_id ){
                                            // var_dump($faq);
                                            if($type == 'static'){
                                                $data = [
                                                    $faq['faq_title'],
                                                    $faq['faq_text'],
                                                ];
                                            }else{
                                                $faq_object = get_post($faq);
                                                $data = [
                                                    $faq_object->post_title,
                                                    $faq_object->post_content,
                                                ];
                                            }
                                            $random = rand();
                                            $template = '<div class="panel panel-default">
                                                            <div class="panel-heading" role="tab">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion'.$unique_id.'" href="#collapse-'.$random.'" aria-expanded="true" aria-controls="collapse-'.$random.'" class="collapsed">
                                                                        %s
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-'.$random.'" class="panel-collapse collapse " role="tabpanel">
                                                                <div class="panel-body"> %s</div>
                                                            </div>
                                                        </div>';
                                            vprintf($template, $data);
                                        });
                                        
                                    ?>
                                    

                                </div>
                            </div>

                        </div>