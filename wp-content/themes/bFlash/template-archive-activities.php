<?php
/**
 * Template Name: Activity Archive Page
 */

/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 

?>

<section class="vk-content">
        
        <?php 
            while(have_posts()):
                the_post();
        ?>
        <div class="vk-banner vk-background-image-8" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>); background-position: center;">
            <div class="vk-background-overlay vk-background-black-1 _20"></div>
            <div class="container wrapper">
                <div class="page-heading single-feature">
                    <?php the_title(); ?>
                </div>
                <div class="page-subheading single-feature">
                    <?php echo fw_get_db_post_option(get_the_ID(), 'package_subtitle'); ?>
                </div>
            </div>
        </div>
        <?php 
            endwhile;
        ?>
        
        
        <!--./vk-banner-->
        <?php echo fw_ext_get_breadcrumbs(  ) ?>


        <!-- Start Grid stuff -->

        <div class="" data-example-id="media-alignment">
            <div class="vk-blog-wrapper vk-blog-grid">
                <!------ BEGIN BLOG WRPPER ------>
                <div class="container">
                    <div class="row">
                        <div class="blog-list clearfix">
                            <!-- BLOG CONTENT -->
                            <div class="col-md-12">
                                <div class=" blog-content">

                                    <!-- <div class="row"> -->
                                        <?php 
                                            $terms = get_terms('package_tags');
                                            $counter = 0;
                                            foreach ($terms as $term) {
                                                // var_dump($term);
                                                $img = fw_get_db_term_option($term->term_id, $term->taxonomy ,'main_image');

                                                // var_dump($img);
                                                // 
                                                ++$counter;
                                                // the_post();
                                                if($counter == 1){
                                                    echo '<div class="row">';
                                                }
                                                # code...
                                        ?>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="content-box customize-archive-block">

                                                <div class="vk-img-frame">
                                                    <?php 
                                                        if(is_array($img)):
                                                            $img_thumb = wp_get_attachment_image_src($img['attachment_id'], 'thumb570');
                                                    ?>
                                                    <a class="vk-img" href="<?php echo get_term_link($term); ?>">
                                                        <img src="<?php echo $img_thumb[0]; ?>">
                                                        
                                                    </a>
                                                    <?php
                                                        endif;
                                                     ?>
                                                </div>

                                                <div class="content customize-archive-title">
                                                    <a href="<?php echo get_term_link($term); ?>">
                                                        <h4 class="vk-text-uppercase"><?php echo $term->name; ?></h4>
                                                    </a>
                                                </div>
                                                <a  href="<?php echo get_term_link($term); ?>" class="vk-btn vk-border-radius vk-btn-xl vk-btn-green text-uppercase customize-archive-count"><?php echo $term->count; ?></a>
                                            </div>
                                        </div>

                                        <?php 
                                                if($counter == 3){
                                                    echo '</div>';
                                                    $counter = 0;
                                                }

                                        }
                                        if($counter != 0){
                                            echo '</div>';
                                        }
                                            fw_pagination_links();
                                       
                                        ?>
                                        
                                    <!-- </div> -->

                                    

                                </div>
                            </div>

                            <!-- BLOG SIDEBAR -->
                            
                        </div>
                    </div>
                    <!------ END BLOG WRAPPER ------>
                </div>
            </div>
        </div>
        <!-- End Grid Stuff -->

</section>

<?php
get_footer();
