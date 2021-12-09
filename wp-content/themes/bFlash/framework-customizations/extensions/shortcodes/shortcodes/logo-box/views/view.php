<?php 
$style = '';
if($atts['background_color_picker'] != ''){
    $style = 'background-color: '.$atts['background_color_picker'].';';
}
?>
<div class="clearfix"></div>
            <div class="vk-client-shop-section" style="<?php echo $style;?>">
                <div class="container">
                    <div class="vk-list-client-shop">
                        <ul class="vk-list vk-list-client-style-2 vk-list-client-slider">
                            <?php 
                                array_walk($atts['logos'], function($logo){
                                    $image = $logo['logo']['url'];
                                    $template = '<li class="vk-img-frame">
                                                    <a href="%s">
                                                        <img src="%s" alt="">
                                                    </a>
                                                </li>';        
                                    printf($template, $logo['logo']['redirect_url'], $image);
                                });
                            ?>
                            

                        </ul>
                        <!--./vk-list-client-style-2-->                </div>
                    <!-- /.vk-list-client-shop -->
                </div>
                <!-- /.container -->
            </div>