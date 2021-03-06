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
        <!-- <div class="<?php if(has_offset_header() ): ?> vk-home vk-home-left-menu <?php endif; ?>"> -->

            <?php 
                echo fw_get_breadcrumb_layout($archive_object->label);
            ?>
            
            
            <!--./vk-banner-->
    		<?php echo fw_ext_get_breadcrumbs(  ) ?>

            <?php
            	get_template_part('inc/'.$archive_type);
    				// Start the Loop.
    		?>
        <!-- </div> -->
</section>

<?php
get_footer();
