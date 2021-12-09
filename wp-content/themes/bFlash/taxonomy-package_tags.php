<?php
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
$archive_object = get_queried_object();
$img = fw_get_db_term_option($archive_object->term_id, $archive_object->taxonomy ,'main_image');
$img_url = '';
if(!empty($img)){
    $img_url = $img['url']; 
}
// var_dump($archive_object);
// var_dump($img);
?>

<section class="vk-content">
        
        <div class="vk-banner vk-background-image-8" style="background-image: url(<?php echo $img_url ?>); background-position: center;">
            <div class="vk-background-overlay vk-background-black-1 _20"></div>
            <div class="container wrapper">
                <div class="page-heading ">
                    <?php echo $archive_object->name ?>
                </div>
                
            </div>
        </div>
        
        <!--./vk-banner-->
		<?php echo fw_ext_get_breadcrumbs(  ) ?>

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
                                            $counter = 0;
                                            while (have_posts()) {
                                                ++$counter;
                                                the_post();
                                                if($counter == 1){
                                                    echo '<div class="row">';
                                                }
                                                # code...
                                        ?>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="content-box">

                                                <div class="vk-img-frame">
                                                    <?php 
                                                        if(has_post_thumbnail()):
                                                    ?>
                                                    <a class="vk-img" href="<?php the_permalink(); ?>">
                                                        <?php 
                                                            the_post_thumbnail('thumbArchveBig');
                                                        ?>
                                                    </a>
                                                    <?php
                                                        endif;
                                                     ?>
                                                </div>

                                                <div class="content">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <h4 class="vk-text-uppercase"><?php the_title(); ?></h4>
                                                    </a>
                                                    <div class="vk-divider"></div>
                                                    <?php the_excerpt(); ?>
                                                    <div class="vk-buttons">
                                                        <a href="<?php the_permalink() ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
                                                            <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>

                                                </div>
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
        <!-- / -->
</section>

<?php
get_footer();
