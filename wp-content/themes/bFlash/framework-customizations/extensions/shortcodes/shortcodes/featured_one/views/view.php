<?php 
    // var_dump($atts);
?>
<div class="vk-section vk-our-project-section">
                <div class="container">
                    <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                <span>
                    <?php echo fw_span_title($atts['heading']) ?>
                    
                </span>
                    </h2>

                    <nav class="box-filter text-center clearfix">
                        <ul class="vk-filter vk-filter-button hidden-xs hidden-sm">
                            <!-- <li class="data-filter" data-filter=".all">all</li> -->
                            <?php 
                                $items = [];
                                if(count($atts['information_box']) > 0):
                                    foreach($atts['information_box'] as $tab):
                                        // $items[] = $tab['tab_content'];
                                        $tab['tab_content']['tab_title'] = $tab['tab_title'];
                                        $items = array_merge($items, $tab['tab_content']);
                            ?>
                            <li class="data-filter" data-filter=".data-<?php echo fw_classify_text($tab['tab_title']) ?>"><?php echo $tab['tab_title'] ?></li>
                            <?php 
                                    endforeach;
                                endif;
                            ?>
                            

                        </ul>
                        <!--./vk-filter-->

                        <select class="vk-filter vk-filter-button form-control hidden-md hidden-lg">
                            <!-- <option class="data-filter" value=".all">all</option> -->

                            <?php 
                                if(count($atts['information_box']) > 0):
                                    foreach($atts['information_box'] as $tab):
                            ?>
                            
                                <option class="data-filter" value=".data-<?php echo fw_classify_text($tab['tab_title']) ?>"><?php echo $tab['tab_title'] ?></option>
                            <?php 
                                    endforeach;
                                endif;
                            ?>
                            

                            
                        </select>
                        <!--./vk-filter-->                </nav>
                    <!--./box-filter-->

                    <div class="row">
                        <?php 
                            // var_dump($items);
                        ?>
                        <div class="vk-our-project-list vk-slider-filter">
                            <?php 
                                foreach($atts['information_box'] as $tab):

                            ?>
                            <div class="item  data-<?php echo fw_classify_text($tab['tab_title']) ?>" data-identifier=".data-<?php echo fw_classify_text($tab['tab_title']) ?>">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">
                                <?php 

                                    foreach($tab['tab_content'] as $item):
                                ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-<?php echo fw_classify_text($tab['tab_title']) ?>">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="<?php echo $item['item_url']; ?>" class="vk-img">
                                                    <?php 
                                                        $image = fw_filter_image_by_thumbnail($item['item_image'], 'thumb370');
                                                        if($image != null){
                                                            echo '<img src="'.$image .'" alt=""/>';
                                                        }
                                                    ?>
                                                    <!-- <img src="images/project/project-grid/img-1.jpg" alt=""> -->
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="<?php echo $item['item_url']; ?>"><?php echo $item['item_title'] ?></a></h4>
                                                <!-- <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                    endforeach;
                                ?>
                                </div>
                            </div>
                            <?php 
                                endforeach;
                            ?>
                            
                            <div class="item data-consultant">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">5-STAR HOTEL</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">ART MUSEUM TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CULTURAL AND TRADITIONAL TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item data-design">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">5-STAR HOTEL</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">ART MUSEUM TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CULTURAL AND TRADITIONAL TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item data-building">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">5-STAR HOTEL</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">ART MUSEUM TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CULTURAL AND TRADITIONAL TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item data-furniture">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">5-STAR HOTEL</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">ART MUSEUM TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CULTURAL AND TRADITIONAL TOUR</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">MOUNTAIN FLIGHT</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="images/project/project-grid/img-9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY TOURS NAME</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
