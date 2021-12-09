<header class="vk-header <?php echo fw_theme_header_background_style('class') ?> <?php echo fw_theme_fixed_style() ?>" 
    <?php echo fw_theme_header_background_style('style') ?>>
        <nav class="vk-navbar  navbar">
            <div class="container container-bigger">
                <div class="vk-navbar-header navbar-header" style="background-color: <?php echo fw_get_db_customizer_option('logo_background', '#fcfcfc'); ?>">
                    <button type="button" class="navbar-toggle vk-navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                        <i class="toggle-icon"></i>
                    </button>
                    <!--./vk-navbar-toggle-->

                    <?php 
                        fw_theme_shop_quick_cart_button('left');
                    ?>
                    <!--./shopping-cart-->

                    
                        <?php fw_theme_logo(); ?>
                        
                    
                    <!--./vk-navbar-brand-->

                        <?php fw_theme_shop_quick_cart(); ?>
                    <!--./shopping-cart-list-->

                </div>
                <!--./vk-navbar-header-->

                <div class="collapse navbar-collapse vk-navbar-collapse" id="menu">
                    <?php 
                    // $navwalker = new Flash_Nav_Walker();

                    // var_dump($navwalker);
                    
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'menu' => 'primary',
                            'menu_class' => 'vk-navbar-nav navbar-right main_nav',
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

            </div>
            <!--./container-->

        </nav>
        <!--./vk-navbar-->

        <div class="vk-header-top hidden-xs hidden-sm">
            <div class="container container-bigger">
                <div class="content">
                    <?php fw_theme_shop_quick_cart_button_desktop('left'); ?>
                    <ul class="quick-address">
                        <?php 
                            fw_theme_header_notes(['phone_numbers', 'official_email', 'header_notes']);
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--./vk-header-top-->
    </header>