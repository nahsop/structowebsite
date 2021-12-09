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
            echo fw_get_404_banner_layout( fw_get_db_settings_option('404_heading', 'Seems you are lost!') );
        ?>
        
		<?php echo fw_ext_get_breadcrumbs(  ) ?>
        <!-- vk-faq-shortcode -->
        <div class="vk-page vk-page-404">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 left">
                        <div class="vk-img-frame">
                            <?php 
                                $image = fw_get_db_settings_option('404_featured');
                                if(!empty($image)){

                                    echo '<img class="img-responsive" src="'.$image['url'].'" alt="">';
                                }else{
                                    echo '<h2>404 <br /> Page Not Found</h2>';
                                }
                                // var_dump($image);
                            ?>
                        </div>
                        <div class="vk-search-form">
                            <form method="get" action="<?php echo get_bloginfo('wpurl') ?>" target="_self">
                                <div class="form-group">
                                    <input type="text" name="s" placeholder="Search" class="form-control">
                                    <button class="vk-btn vk-btn-search" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                            <div class="vk-buttons text-center">
                                <a href="#" class="vk-btn vk-btn-l text-uppercase vk-btn-go-back"><i class="fa fa-long-arrow-left"></i> go back</a>
                                <a href="<?php echo get_bloginfo('wpurl') ?>" class="vk-btn vk-btn-l vk-btn-default text-uppercase"><i class="fa fa-home"></i> home page</a>
                            </div>
                        </div>
                    </div>
                    <!-- ./left-->
                    <div class="col-md-3 right">
                        <?php 
                    // $navwalker = new Flash_Nav_Walker();

                    // var_dump($navwalker);
                    
                        wp_nav_menu([
                            'theme_location' => '404_menu',
                            'menu' => '404_menu',
                            'menu_class' => 'vk-list vk-menu-right',
                            'menu_id' => '404_menu',
                            'container' => '',
                            
                        ]);
                    ?>
                        <!-- <ul class="vk-list vk-menu-right">

                            <li><a href="2.1-about-page.html">about us</a></li>

                            <li><a href="#">services</a></li>

                            <li><a href="4.1-project-list.html">our project</a></li>

                            <li><a href="5.2-blog-grid.html">blog</a></li>

                            <li><a href="8.1-shop.html">shop</a></li>

                            <li><a href="2.4-faq-page.html">FAQ's</a></li>

                            <li><a href="2.5-career-page.html">career</a></li>

                            <li><a href="2.6-contact-page.html">contact us</a></li>

                        </ul> -->
                        <!--./vk-menu-right-->
                    </div>
                    <!--./right-->
                </div>
                <!--./row-->
            </div>
            <!--./container-->
        </div>
</section>

<?php
get_footer();
