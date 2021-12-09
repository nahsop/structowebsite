  <header class="vk-header vk-header-two-nav <?php echo fw_theme_header_background_style('class') ?>" 
    <?php echo fw_theme_header_background_style('style') ?>>
        <nav class="vk-navbar  navbar">
            <div class="container">
                <?php fw_theme_shop_quick_cart(); ?>
                <!--./shopping-cart-list-->

                <div class="vk-navbar-header navbar-header" style="background-color: <?php echo fw_get_db_customizer_option('logo_background', '#fcfcfc'); ?>">
                    <div class="vk-divider left hidden-xs hidden-sm"></div>
                    <div class="vk-divider right hidden-xs hidden-sm"></div>

                    <button type="button" class="navbar-toggle vk-navbar-toggle collapsed" data-toggle="collapse">
                        <i class="toggle-icon"></i>
                    </button>
                    <!--./vk-navbar-toggle-->

                    <?php 
                        fw_theme_shop_quick_cart_button('left');
                     ?>
                    <!--./shopping-cart-->

                    <!-- <a class="vk-navbar-brand navbar-brand" href="<?php echo get_bloginfo('wpurl') ?>"> -->
                        <?php fw_theme_logo(); ?>
                        
                        <!-- <span class="logo-text text-uppercase">WICON</span> -->
                    <!-- </a> -->
                    <!--./vk-navbar-brand-->
                </div>
                <!--./vk-navbar-header-->

                <div class="collapse navbar-collapse vk-navbar-collapse" id="menu">
                    <?php 
                    // $navwalker = new Flash_Nav_Walker();

                    // var_dump($navwalker);
                    
                        wp_nav_menu([
                            'theme_location' => 'primary_left',
                            'menu' => 'primary_left',
                            'menu_class' => 'vk-navbar-nav vk-navbar-left',
                            'menu_id' => 'primary_menu_left',
                            'container' => '',
                            'walker' => new FlashNavWalker()
                        ]);
                    ?>
                    <?php 
                    // $navwalker = new Flash_Nav_Walker();

                    // var_dump($navwalker);
                    
                        wp_nav_menu([
                            'theme_location' => 'primary_right',
                            'menu' => 'primary_right',
                            'menu_class' => 'vk-navbar-nav vk-navbar-right',
                            'menu_id' => 'primary_menu_right',
                            'container' => '',
                            'walker' => new FlashNavWalker()
                        ]);
                        fw_display_search_box();
                    ?>
                    
                    <!-- <div class="box-search-header collapse" id="box-search-header" aria-expanded="false" role="search">
                        <div class="vk-input-group">
                            <input type="text" name="key" placeholder="Search" class="form-control">
                            <button class="vk-btn btn-search">
                                <i class="fa fa-search" ></i>
                            </button>
                        </div>
                    </div> -->
                </div>
                <!--./vk-navbar-collapse-->
            </div>
            <!--./container-->
        </nav>
        <!--./vk-navbar-->

        <div class="vk-header-top hidden-xs hidden-sm">
            <div class="container">
                <div class="content">
                    <?php fw_theme_shop_quick_cart_button_desktop('left'); ?>
                    
                    <ul class="quick-address">
                        <!-- <li>Mon - Sun: 8h00 - 18h00</li> -->
                        <?php 
                            fw_theme_header_notes(['header_notes']);
                        ?>
                        <li class="item-search">
                            <span class="btn-search hidden-xs hidden-sm" data-toggle="collapse" data-target="#box-search-header"><i class="fa fa-search"></i></span>

                        </li>

                    </ul>
                    <ul class="quick-address vk-navbar-left">
                        <?php 
                            fw_theme_header_notes(['phone_numbers', 'official_email']);
                        ?>
                        <!-- <li>(122) 675 485 035</li>
                        <li>email@domain.com</li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!--./vk-header-top-->
    </header>
    <!--./vk-header-->