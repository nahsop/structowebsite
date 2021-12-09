
<?php 
    if($archive_object == null){
        $cats = get_categories([
            'hide_empty' => true,
        ]);
    }else{
        $cats = get_terms();
    }
 ?>
 <div class="vk-page vk-page-project vk-page-project-list vk-space x-large">
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

                    </ul>
                    <!--./vk-filter-->

                    <select class="vk-filter vk-filter-button form-control hidden-md hidden-lg">

                        <option class="data-filter" value="*">all</option>

                        <?php 
                            foreach($cats as $cat):
                        ?>
                        <option class="data-filter" value=".data-<?php echo $cat->slug; ?>"><?php echo $cat->name ?></option>
                        <?php 
                            endforeach;
                        ?>
                        

                    </select>
                    <!--./vk-filter-->
                </nav>
                <!--./box-filter-->

                <div class="vk-project-list clearfix vk-masonry-layout">
                    <?php 
                            while (have_posts()) {
                                the_post();
                                $categories = get_the_category();
                                $category_classes = [];
                                foreach($categories as $cat){
                                    $category_classes[] = 'data-'.$cat->slug;
                                }
                                
                        ?>
                    <div class="vk-project vk-project-list-item item <?php echo implode(' ', $category_classes) ?>">
                        <div class="col-md-4 left-content">
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
                        </div>
                        <div class="col-md-8 right-content">
                            <h4 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <ul class="vk-list vk-list-inline vk-detail-post" style="display: none;">
                                <li>Client: <span class="vk-text-color-yellow-1 vk-text">construction company</span></li>
                                <li>Year completed: <span class="vk-text-color-yellow-1 vk-text">2015</span></li>
                                <li>Project leader: <span class="vk-text-color-yellow-1 vk-text">john stone</span></li>
                            </ul>
                            <p class="post-brief-content">
                                <?php the_excerpt(); ?>
                            </p>
                            <div class="vk-buttons">
                                <a href="<?php the_permalink(); ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">further infomation
                                    <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php 
                            }
                        ?>

                    
                </div>
                <!--./vk-project-list-->

                <nav class="box-pagination">

                    <ul class="vk-pagination">
                        <li class="first arrow"><a href="#">first</a></li>
                        <li class="back arrow"><a href="#">back</a></li>
                        <li class="active">1</li>

                        <li><a href="#">2</a></li>


                        <li><a href="#">3</a></li>


                        <li><a href="#">4</a></li>


                        <li><a href="#">5</a></li>


                        <li><a href="#">6</a></li>


                        <li class="next arrow"><a href="#">next</a></li>
                        <li class="last arrow"><a href="#">last</a></li>
                    </ul>
                    <!--./vk-pagination-->
                </nav>
                <!--./box-pagination-->
            </div>
            <!--./container-->
        </div>
        <!--./vk-page-->