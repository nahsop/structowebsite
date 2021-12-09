<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>

<footer class="vk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item about">

                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
                <!--./about-->


                <div class="col-md-3 footer-item quick-link">
                    <?php dynamic_sidebar('footer-2') ?>
                </div>
                <!--./quick-link-->


                <div class="col-md-3 footer-item office">
                    <?php dynamic_sidebar('footer-3') ?>
                </div>
                <!--./office-->


                <div class="col-md-3 footer-item latest-works">
                    <?php dynamic_sidebar('footer-4'); ?>
                </div>
                <!--./latest-works-->
            </div>
            <!--./row-->

        </div>
        <!--./container-->
        <div class="footer-bot">
            <div class="container">
                <?php 
                    echo fw_get_db_settings_option('copyright');
                ?>
                <!-- <p class="vk-text">
                    Design by <a class="vk-text-color-yellow-1" href="http://vikitheme.com">VikiTemplate</a> With <span class="vk-text-color-yellow-1">Love</span>.
                </p>

                <p class="vk-text">
                    All Rights Reserved.
                </p> -->
            </div>
        </div>
        <!--./footer-bot-->
    </footer>
    <!--./vk-footer-->
</div><!-- .main-wrapper -->
	<?php wp_footer(); ?>
</body>
</html>
