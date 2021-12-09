<?php 
    // var_dump($archive_object);
    if($archive_object == null){
        $cats = get_categories([
            'hide_empty' => true,
        ]);
    }else{
        $cats = get_terms();
    }
?>
<div class="vk-page vk-page-project vk-page-project-grid vk-space x-large">
            <div class="container">
                <nav class="box-filter text-center clearfix">
                    <ul class="vk-filter vk-filter-button hidden-xs hidden-sm">
                        <li class="data-filter" data-filter="*">all</li>
                        <?php 
                            foreach($cats as $cat):
                        ?>
                        <li class="data-filter" data-filter=".data-<?php echo $cat->slug; ?>"><?php echo $cat->name ?></li>
                        <?php 
                            endforeach;
                        ?>

                        <!-- <li class="data-filter" data-filter=".data-design">design</li>

                        <li class="data-filter" data-filter=".data-building">building</li>

                        <li class="data-filter" data-filter=".data-furniture">furniture</li> -->

                    </ul>
                    <!--./vk-filter-->

                    <select class="vk-filter vk-filter-button form-control hidden-md hidden-lg">
                        <option class="data-filter" value="*">all</option>

                         <?php 
                            foreach($cats as $cat):
                        ?>
                        <li class="data-filter" data-filter=".data-<?php echo $cat->slug; ?>"><?php echo $cat->name ?></li>
                        <?php 
                            endforeach;
                        ?>


                    </select>
                    <!--./vk-filter-->            </nav>
                <!--./box-filter-->

                <div class="row">
                    <div class="vk-project-grid clearfix vk-masonry-layout">
                        <?php 
                            while (have_posts()) {
                                the_post();
                                $categories = get_the_category();
                                $category_classes = [];
                                foreach($categories as $cat){
                                    $category_classes[] = 'data-'.$cat->slug;
                                }
                                
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 item <?php echo implode(' ', $category_classes) ?>">
                            <div class="vk-project vk-project-grid-item">
                                <div class="vk-img-frame">
                                                    <?php 
                                                        if(has_post_thumbnail()):
                                                    ?>
                                                    <a class="vk-img" href="<?php the_permalink(); ?>">
                                                        <?php 
                                                            the_post_thumbnail('thumb370');
                                                        ?>
                                                    </a>
                                                    <?php 
                                                        else:
                                                    ?>
                                                    <a class="vk-img" href="<?php the_permalink(); ?>">
                                                        <img src="images/project/project-list/img-1.jpg" alt="">
                                                        
                                                    </a>
                                                    <?php
                                                        endif;
                                                     ?>
                                                </div>

                                <div class="content-hidden">
                                    <h4 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <ul class="vk-list vk-list-inline vk-list-action-post">
                                        <li><a href="<?php the_permalink(); ?>"><span class="ti-eye"></span></a></li>
                                        <!-- <li><a href="#"><span class="ti-share"></span></a></li> -->
                                        <!-- <li><a href="#"><span class="ti-heart"></span></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>
                        
                    </div>
                </div>
                <!--./row-->

                <div class="vk-buttons text-center">
                    <a href="#" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">load more
                        <i class="fa fa-long-arrow-down"></i></a>
                </div>
                <!--./vk-buttons-->
            </div>
            <!--./container-->
        </div>
        <!--./vk-page-->