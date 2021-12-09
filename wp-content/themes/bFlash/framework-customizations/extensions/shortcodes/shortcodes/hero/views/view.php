<?php 
    // var_dump($atts);
    
?>
<div class="vk-join-our-team-section vk-background-fixed vk-background-image-4   vk-section-style-4 vk-space x-large <?php fw_filter_parallax_class($atts) ?>" 
style="background-image: url(<?php echo fw_filter_background_image($atts, 'full', false) ?>)">
                <div class="vk-background-overlay vk-background-black-1 _70"></div>

                <div class="container">
                    <div class="content-section text-uppercase <?php fw_text_alignment_class($atts['panel_alignment']); ?>">
                        <h2 class="vk-heading vk-heading-border vk-heading-border-<?php echo $atts['panel_alignment'] ?>">
                        <!-- <span> -->
                            <?php echo fw_span_title($atts['heading']); ?>
                        <!-- </span> -->

                        </h2>
                        <?php 
                            if($atts['sub_heading'] != ''):
                        ?>
                        <p><?php echo $atts['sub_heading']; ?></p>


                        <?php 
                            endif;
                        ?>
                        <?php fw_cta_buttons($atts) ?>
                        <!--./vk-buttons-->
                    </div>
                    <!--./content-section-->
                </div>
                <!-- /.container -->
            </div>