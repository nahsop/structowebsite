<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>


<section class="vk-content">
        <div class="<?php if(is_home() || is_front_page()): ?>vk-home vk-home-default <?php else: ?> vk-page vk-page-about <?php endif; ?>">
            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    the_content();
                endwhile;
            ?>
            
        </div>
        <!--./home-->
    </section>
    <!--./content-->
<?php
get_footer();
