<div class="vk-what-we-do-section vk-section vk-section-style-2-blocked vk-section-style-3 <?php echo fw_parallax_class($atts['parallax_effect']) ?>" style="<?php echo fw_section_background_style($atts) ?>">
                <div class="container">
                    <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                    <span>
                        <?php echo fw_span_title($atts['heading']) ?>
                        
                    </span>
                    </h2>
                    <nav class="box-filter text-center clearfix">
                        <ul class="vk-filter vk-filter-button-fix hidden-xs hidden-sm">
                        <?php 
                            foreach($atts['information_box'] as $tab):
                        ?>

                            <li class="data-filter" data-filter=".data-<?php echo str_replace(' ', '-', $tab['tab_title']) ?>"><?php echo $tab['tab_title']; ?></li>

                        <!--./vk-filter-->
                        <?php 
                            endforeach;
                        ?>
                        </ul>
                        <select class="vk-filter vk-filter-button-fix form-control hidden-md hidden-lg" id="dropdown-filter">
                            <?php 
                                foreach($atts['information_box'] as $tab):
                            ?>
                            <option class="data-filter" value=".data-<?php echo str_replace(' ', '-', $tab['tab_title']) ?>"><?php echo $tab['tab_title']; ?></option>
                            <?php 
                                endforeach;
                            ?>
                        </select>
                        <!--./vk-filter-->
                    </nav>

                    <div class="row vk-filter-fix">
                        <?php 
                            foreach($atts['information_box'] as $key => $tab):
                                switch ($tab['tab_orientation']) {
                                    case 'image-left':
                                        # code...
                                        
                                        $first = 'right';
                                        $second = 'left';
                                        break;
                                    
                                    default:
                                        $first = 'left';
                                        $second = 'right';
                                        break;
                                }

                        ?>
                        <div class="item data-<?php echo str_replace(' ', '-', $tab['tab_title']) ?> <?php if($key == 0 ){ echo 'first'; } ?>">
                            <div class="col-md-6 <?php echo $first; ?>">

                                <div class="vk-img-frame">
                                    <?php 
                                        // var_dump($tab['tab_featured_image'])
                                        $image = fw_filter_image_by_thumbnail($tab['tab_featured_image'], 'thumb570');
                                        if($image != null){
                                            echo '<img src="'.$image .'" alt=""/>';
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                            <!--./left-->

                            <div class="col-md-6 <?php echo $second; ?>">
                                <div class="content">
                                    <h4 class="text-uppercase vk-title"><?php echo $tab['tab_heading'] ?></h4>
                                    <?php 
                                        echo do_shortcode($tab['tab_description']);
                                    ?>
                                </div>
                        <?php fw_cta_buttons($tab) ?>
                                <div class="vk-section  vk-section-style-2">
                                    <div class="vk-buttons hide">
                                        <div class="vk-counter vk-counter-non-icon">
                                            <ul class="content">
                                                <li class="number-count" data-to="500">500</li>
                                                <li class="title text-uppercase">projects</li>
                                            </ul>
                                        </div>
                                        <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>   
                                </div>
                                
                                <!--./vk-buttons-->

                                
                                <!--./vk-work-step-mini-->
                            </div>
                            <!--./right-->
                        </div>
                        <?php 
                            endforeach;
                        ?>

                        <div class="item data-design">
                            <div class="col-md-6 left">

                                <div class="vk-img-frame">
                                    <img src="images/services/image-6.jpg" alt=""/>
                                </div>
                            </div>
                            <!--./left-->

                            <div class="col-md-6 right">
                                <div class="content">
                                    <h4 class="text-uppercase vk-title">Design</h4>
                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee got that they don’t want us to eat. Cloth talk. Mogul talk. </p>
                                </div>
                                <div class="vk-buttons">
                                    <div class="vk-counter vk-counter-non-icon">
                                        <ul class="content">
                                            <li class="number-count" data-to="500">500</li>
                                            <li class="title text-uppercase">projects</li>
                                        </ul>
                                    </div>
                                    <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <!--./vk-buttons-->

                                <div class="vk-work-step-mini">
                                    <h4 class="vk-title text-uppercase">work process</h4>
                                    <ul class="vk-list vk-list-inline vk-list-step-mini">
                                        <li aria-level="1">first step</li>
                                        <li aria-level="2">second step</li>
                                        <li aria-level="3">third step</li>
                                    </ul>
                                </div>
                                <!--./vk-work-step-mini-->
                            </div>
                            <!--./right-->
                        </div>

                        <div class="item data-building">
                            <div class="col-md-6 left">

                                <div class="vk-img-frame">
                                    <img src="images/services/image-5.jpg" alt=""/>
                                </div>
                            </div>
                            <!--./left-->

                            <div class="col-md-6 right">
                                <div class="content">
                                    <h4 class="text-uppercase vk-title">building</h4>
                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee got that they don’t want us to eat. Cloth talk. Mogul talk. </p>
                                </div>
                                <div class="vk-buttons">
                                    <div class="vk-counter vk-counter-non-icon">
                                        <ul class="content">
                                            <li class="number-count" data-to="500">500</li>
                                            <li class="title text-uppercase">projects</li>
                                        </ul>
                                    </div>
                                    <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <!--./vk-buttons-->

                                <div class="vk-work-step-mini">
                                    <h4 class="vk-title text-uppercase">work process</h4>
                                    <ul class="vk-list vk-list-inline vk-list-step-mini">
                                        <li aria-level="1">first step</li>
                                        <li aria-level="2">second step</li>
                                        <li aria-level="3">third step</li>
                                    </ul>
                                </div>
                                <!--./vk-work-step-mini-->
                            </div>
                            <!--./right-->
                        </div>

                        <div class="item data-furniture">
                            <div class="col-md-6 left">

                                <div class="vk-img-frame">
                                    <img src="images/services/image-4.jpg" alt=""/>
                                </div>
                            </div>
                            <!--./left-->

                            <div class="col-md-6 right">
                                <div class="content">
                                    <h4 class="text-uppercase vk-title">furniture</h4>
                                    <p>Lorem Khaled Ipsum is a major key to success. Put it this way, it took me twenty five years to get these plants, twenty five years of blood sweat and tears, and I’m never giving up, I’m just getting started. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee got that they don’t want us to eat. Cloth talk. Mogul talk. </p>
                                </div>
                                <div class="vk-buttons">
                                    <div class="vk-counter vk-counter-non-icon">
                                        <ul class="content">
                                            <li class="number-count" data-to="500">500</li>
                                            <li class="title text-uppercase">projects</li>
                                        </ul>
                                    </div>
                                    <a href="4.2-project-grid.html" class="vk-btn vk-btn-transparent text-uppercase">SEE ALL
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <!--./vk-buttons-->

                                <div class="vk-work-step-mini">
                                    <h4 class="vk-title text-uppercase">work process</h4>
                                    <ul class="vk-list vk-list-inline vk-list-step-mini">
                                        <li aria-level="1">first step</li>
                                        <li aria-level="2">second step</li>
                                        <li aria-level="3">third step</li>
                                    </ul>
                                </div>
                                <!--./vk-work-step-mini-->
                            </div>
                            <!--./right-->
                        </div>

                    </div>
                    <!--./row-->
                </div>
                <!--./container-->
            </div>
            <!--./vk-what-we-do-section-->