<div class="" data-example-id="media-alignment">
            <div class="vk-blog-wrapper vk-blog-grid">
                <!------ BEGIN BLOG WRPPER ------>
                <div class="container">
                    <div class="row">
                        <div class="blog-list clearfix">
                            <!-- BLOG CONTENT -->
                            <div class="col-md-9">
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
                                        <div class="col-md-6 col-sm-6">
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
                                                    <!-- <div class="vk-divider"></div> -->
                                                    <?php the_excerpt(); ?>
                                                    <div class="vk-buttons">
                                                        <a href="<?php the_permalink() ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
                                                            <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <?php 
                                                if($counter == 2){
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
                            <div class="col-md-3">
                                <div class="sidebar-menu">
                                    <!---- Input search ---->
                                    <div class="vk-search-form  vk-fullwidth">
                                        <div class="form-group">
                                            <input type="text" name="key" placeholder="Enter keyword" class="form-control">
                                            <button class="vk-btn vk-btn-search"><i class="fa fa-search"></i></button>
                                        </div>

                                    </div>
                                    <div class="vk-space x-small"></div>
                                    <!---- Catagory ---->
                                    <div class="catagory">
                                        <h5 class="vk-text-uppercase">catetgory</h5>
                                        <ul class="vk-list vk-menu-right">
                                            <li><a href="#">Construction Consultant<i class="fa fa-long-arrow-right vk-text-right" aria-hidden="true"></i></a></li>
                                            <li class="vk-divider"></li>
                                            <li><a href="#">Building Renovation <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li class="vk-divider"></li>
                                            <li><a href="#">Furniture Design<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li class="vk-divider"></li>
                                            <li><a href="#">Architecture & Building<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li class="vk-divider"></li>
                                            <li><a href="#">Construction Renovation<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="vk-space x-small"></div>
                                    <!---- Recentpots ---->
                                    <div class="recentpots">
                                        <h5 class="vk-text-uppercase">recen posts</h5>
                                        <div class="row">
                                            <div class="recent-box col-sm-6 col-md-12">
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="5.3-single-blog.html">
                                                        <img src="images/recentpost/recentpost-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a href="5.3-single-blog.html" class="vk-title">The other day the grass was brown</a>
                                                <span>January 11, 2015</span>
                                            </div>
                                            <div class="recent-box col-sm-6 col-md-12">
                                                <div class="vk-divider hidden-sm"></div>
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="5.3-single-blog.html">
                                                        <img src="images/recentpost/recentpost-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a href="5.3-single-blog.html" class="vk-title">The other day the grass was brown</a>
                                                <span>January 11, 2015</span>
                                            </div>
                                            <div class="recent-box col-sm-6 col-md-12">
                                                <div class="vk-divider hidden-sm"></div>
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="5.3-single-blog.html">
                                                        <img src="images/recentpost/recentpost-3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a href="5.3-single-blog.html" class="vk-title">The other day the grass was brown</a>
                                                <span>January 11, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vk-space x-small"></div>
                                    <!---- Archives ---->
                                    <div class="archives">
                                        <h5 class="vk-text-uppercase">archives</h5>
                                        <ul class="vk-list vk-menu-right">
                                            <li><a href="#">january 2015<i class="fa fa-long-arrow-right vk-text-right" aria-hidden="true"></i></a></li>
                                            <li><a href="#">february 2015<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="#">march 2015<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="#">apirl 2015<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="#">may 2015<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="#">jun 2015<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="vk-space x-small"></div>
                                    <!---- Tag ---->
                                    <div class="tag ">
                                        <h5 class="vk-text-uppercase">tag</h5>
                                        <ul class="list-inline">
                                            <li class="vk-tag"><a href="#" class="vk-text-capitalize">building</a></li>
                                            <li class="vk-tag"><a href="#" class="vk-text-capitalize">architecture</a></li>
                                            <li class="vk-tag"><a href="#" class="vk-text-capitalize">design</a></li>
                                            <li class="vk-tag"><a href="#" class="vk-text-capitalize">consultant</a></li>
                                            <li class="vk-tag"><a href="#" class="vk-text-capitalize">funiture</a></li>
                                            <li class="vk-tag"><a href="#" class="vk-text-capitalize">renovation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------ END BLOG WRAPPER ------>
                </div>
            </div>
        </div>
        <!-- / -->