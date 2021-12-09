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
$archive_type = 'list-simple';
$arr = array_walk(fw_get_db_settings_option('templates_list'), function($val) use($archive_object, &$archive_type) {
    // var_dump($val);
	if($val['post_type'][0] == $archive_object->name){
    

        $archive_type = $val['archive_type'];
        // var_dump($archive_type);
        return $val;
    }
});
?>

<section class="vk-content">
        <?php 
            echo fw_get_breadcrumb_layout($archive_object->label);
        ?>
        
        <!--./vk-banner-->
		<?php echo fw_ext_get_breadcrumbs(  ) ?>
        <div class="vk-page vk-page-testimonial">
            <div class="container">
                <div class="row">
                    <div class="vk-testimonial-list vk-masonry-layout">
                        <?php 
                            while(have_posts()):
                                the_post();
                                $author_name = fw_get_db_post_option(get_the_ID(), 'author_name');
                                $author_post = fw_get_db_post_option(get_the_ID(), 'author_post');
                                $author_image = fw_get_db_post_option(get_the_ID(), 'author_image');
                        ?>
                        <div class="col-md-6 item">
                            <div class="vk-testimonial">
                                <div class="avatar">
                                    <div class="vk-img-frame">
                                        <a href="#" class="vk-img">
                                            <?php 
                                                if(!empty($author_image)):
                                            ?>
                                            <img src="<?php echo $author_image['url'] ?>" alt="">
                                            <?php 
                                                else:
                                            ?>
                                            <img src="images/testimonial/testimonial-1.jpg" alt="">

                                            <?php 
                                                endif;
                                            ?>
                                        </a>
                                    </div>
                                    <div class="profile">
                                        <span class="name"><?php echo $author_name ?></span>
                                        <span class="position"><?php echo $author_post ?></span>
                                    </div>
                                </div>
                                <!--./avatar-->

                                <div class="content">
                                    <i class="fa fa-quote-left"></i>
                                    <p class="vk-text"><?php the_content() ?></p>
                                </div>
                                <!-- ./content-->
                            </div>
                            <!--./testimonial-->
                        </div>
                        <?php 
                            endwhile
                        ?>
                        
                    </div>
                    <!--./vk-testimonial-list-->
                </div>
                <!--./row-->
                <div class="vk-buttons">
                    <?php fw_pagination_links(); ?>
                    
                </div>
            </div>
            <!--./container-->
        </div>
        
</section>

<?php
get_footer();
