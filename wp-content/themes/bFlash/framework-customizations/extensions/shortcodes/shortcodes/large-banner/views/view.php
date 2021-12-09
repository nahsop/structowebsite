<div class="vk-banner vk-banner-x-large vk-banner-homepage <?php fw_parallax_class($atts['parallax_effect']) ?>">
    <?php fw_filter_background_image($atts, 'thumbBanner'); ?>
    <div class="content">
        <div class="container wrapper">
            <div class="page-heading <?php fw_text_alignment_class($atts['panel_alignment']); ?>">
                <span class="vk-text title-main"><?php echo fw_filter_atts($atts, 'heading'); ?></span><span class="vk-text title-sub"><?php echo fw_filter_atts($atts, 'sub_heading'); ?> </span>

                <?php 
                	fw_cta_buttons($atts);
                ?>
            </div>

        </div>
    </div>
                <!--./content-->
</div>