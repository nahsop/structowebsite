<header class="vk-header vk-header-left-menu vk-header-home">
        <nav class="vk-navbar  navbar">
            <div class="">
                <div class="vk-navbar-header navbar-header">
                    <button type="button" class="navbar-toggle vk-navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                        <i class="toggle-icon"></i>
                    </button>
                    <!--./vk-navbar-toggle-->

                    <?php 
                                fw_theme_shop_quick_cart_button('left');
                            ?>
                            
                    <!--./shopping-cart-->

                    <a class="vk-navbar-brand navbar-brand" href="index.html">

                        <div class="hidden-md hidden-lg">
                            <?php fw_theme_logo(); ?>
                            <!-- <img src="images/logo/logo.png" alt=""> -->
                        </div>

                        <div class="hidden-xs hidden-sm">
                            <!-- <img src="images/logo/logo-left-menu.png" alt=""> -->
                            <?php fw_theme_logo(); ?>

                        </div>

                    </a>
                    <!--./vk-navbar-brand-->

<!--                     <ul class="search-shopcart-button vk-list hidden-xs hidden-sm">
                        <li class="item-search">
                            <span class="btn-search hidden-xs hidden-sm" data-toggle="collapse" data-target="#box-search-header"><i class="fa fa-search"></i></span>
                        </li>
                        <li >
                            <?php 
                                fw_theme_shop_quick_cart_button('left');
                            ?>
                            
                        </li>



                    </ul> -->

                </div>
                <!--./vk-navbar-header-->

                <div class="collapse navbar-collapse vk-navbar-collapse" id="menu">

                    <?php 
                    // $navwalker = new Flash_Nav_Walker();

                    // var_dump($navwalker);
                    
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'menu' => 'primary',
                            'menu_class' => 'vk-navbar-nav',
                            'menu_id' => 'primary_menu',
                            'container' => '',
                            'walker' => new FlashNavWalker()
                        ]);
                    ?>
                    <!--./vk-navbar-nav-->

                    <?php 
                        fw_display_search_box();
                    ?>
                    <!--./box-search-header-->

                </div>
                <!--./vk-navbar-collapse-->

                <div class="header-bot hidden-xs hidden-sm">
                    <ul class="vk-list quick-address">
                        <?php 
                            // fw_theme_header_notes(['phone_numbers', 'official_email', 'header_notes']);
                        ?>
                        <li><i class="fa fa-phone"></i><?php echo join(array_map(function($v){
                return $v['phone_number'];
            }, fw_get_db_settings_option('phone_numbers'))); ?></li>
                        <li><i class="fa fa-envelope"></i><a href="maito:<?php echo fw_get_db_settings_option('official_email') ?>"><?php echo fw_get_db_settings_option('official_email') ?></a></li>
                        <li><i class="fa fa-clock-o"></i><?php echo fw_get_db_settings_option('header_notes') ?></li>
                    </ul>
                </div>
                <!--./header-bot-->


            </div>
            <!--./container-->

        </nav>
        <!--./vk-navbar-->


    </header>