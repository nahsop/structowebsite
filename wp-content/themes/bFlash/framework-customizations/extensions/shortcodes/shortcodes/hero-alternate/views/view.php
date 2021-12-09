<?php 
$offset = '';
    if($atts['panel_alignment'] == 'right'){
        $offset = 'col-md-offset-7';
    }
?>
<div class="vk-buynow-section  vk-section-style-8" style="background-image: url(<?php echo fw_filter_background_image($atts, 'thumbHero', false) ?>); position: relative;">
                <div class="vk-background-overlay vk-background-black-1 _50"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 <?php echo $offset; ?>">
                            <div class="box-content">
                                <div class="content">
                                    <h1 class="vk-heading-main text-uppercase"><?php echo fw_span_title($atts['heading']); ?></h1>
                                    <p class="vk-title-main text-capitalize"><?php echo $atts['sub_heading']; ?></p>
                                    <p class="vk-price-main vk-text-color-yellow-1"><?php echo $atts['breaker_title'] ?></p>
                                </div>
                                <?php fw_cta_buttons($atts) ?>

                                
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>