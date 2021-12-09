<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 */

get_header(); ?>
<section class="vk-content">
        <?php 
            echo fw_get_breadcrumb_layout();
        ?>
        
		<?php echo fw_ext_get_breadcrumbs(  ) ?>
        <!-- vk-faq-shortcode -->
        <div class="vk-page ">
            <div class="container">
                <div class="row">
                
            <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					the_content();
				endwhile;
			?>
                </div>
            </div>
        </div>
</section>

<?php
get_footer();
