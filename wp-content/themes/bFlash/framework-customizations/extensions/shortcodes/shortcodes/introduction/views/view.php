<?php 
    $image_url = 'images/about/about-10.jpg';
    $first_content_style = 'left-content';
    $second_content_style = 'right_content';
    if($atts['layout_style'] == 'left'){
        $first_content_style = 'right_content';
        $second_content_style = 'left-content';
    }
    if(!empty($atts['introduction_image'])){

        $image = wp_get_attachment_image_src($atts['introduction_image']['attachment_id'], 'thumb570');
        $image_url =  $image[0];
        // var_dump($image);
    }
?>
<div class="vk-who-we-are vk-section vk-section-style-1">
                <div class="container">
                    <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                    <span>
                        <?php echo fw_span_title($atts['heading']) ?>
                    </span>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 <?php echo $first_content_style ?>">
                            <div class="vk-img-frame">
                                <img src="<?php echo $image_url; ?>" alt=""/>
                            </div>
                        </div>
                        <!--./left-->

                        <div class="col-md-6 <?php echo $second_content_style ?>">
                            <div class="content">
                                <h4 class="text-uppercase vk-title"><?php echo $atts['sub_heading']; ?></h4>
                                <p><?php echo $atts['introduction_text']; ?></p>
                                
                            </div>
                            <!-- <div class="vk-buttons">
                                <a href='#' class="vk-btn vk-btn-default vk-btn-icon text-uppercase">
                                    <span class="title"><i class="fa fa-file-pdf-o"></i>download profile</span>
                                    <span class="icon"><i class="fa fa-download"></i></span>
                                </a>
                            </div> -->
                        <?php fw_cta_buttons($atts) ?>

                        </div>
                        <!--./right-->
                    </div>
                    <!--./row-->
                </div>
                <!--./container-->
            </div>
            <!--./vk-who-we-are-->