<div class="container">
    <div class="vk-element-section <?php fw_spaces_classes($atts) ?>">
        <div class="heading-wrapper">
            <h2 class="vk-heading <?php fw_get_heading_style($atts) ?>">
        		<span>
        			<?php echo fw_span_title($atts['main_heading']) ?>
                    <?php 
                        if($atts['heading_style'] == 'vk-heading-icon'):
                    ?>
                    <span class="icon"><i class="flaticon flaticon-bomb"></i></span>
                <?php endif; ?>
        		</span>
            </h2>
            <?php 
                if($atts['heading_content'] != ''):
            ?>
            <div class="content-sample">
                <p class="vk-text">
                    <?php echo $atts['heading_content']; ?>
                </p>
            </div>
            <?php 
                endif;
            ?>
        </div>
    </div>
</div>