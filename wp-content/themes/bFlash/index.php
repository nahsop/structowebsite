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
$arr = array_walk(fw_get_db_settings_option('templates_list'), function($val) use(&$archive_type) {
    if($val['post_type'][0] == 'post' ){

        $archive_type = $val['archive_type'];
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

        <?php
            // var_dump($archive_object);
            // var_dump(fw_get_db_settings_option('templates_list'));
            get_template_part('inc/'.$archive_type);
                // Start the Loop.
              
            ?>
</section>

<?php
get_footer();
