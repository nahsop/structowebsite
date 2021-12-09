<?php 
    $animation = [
        [
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInUp', 'delay' => '1s'],
            ['animation' => 'fadeInUp', 'delay' => '1.3s']
        ],[
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInRight', 'delay' => '0.6s']
        ],[
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInUp', 'delay' => '0.7s'],
            ['animation' => 'fadeInUp', 'delay' => '0.9s']
        ],[
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInUp', 'delay' => '1s'],
            ['animation' => 'fadeInUp', 'delay' => '1.3s']
        ],[
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInUp', 'delay' => '0.6s']
        ],[
            ['animation' => 'fadeInUp', 'delay' => '0.5s'],
            ['animation' => 'fadeInUp', 'delay' => '0.7s'],
            ['animation' => 'fadeInUp', 'delay' => '0.9s']
        ],
    ];
?>
<?php 
        if(array_key_exists('slider_container', $atts) && !empty($atts['slider_container'])):
?>
<div class="vk-baner-slider vk-slider-arrow-image" data-navigation="<?php echo $atts['show_navigations'] ?>" data-bullets="<?php echo $atts['show_bullets'] ?>">
            <?php 
                foreach($atts['slider_container'] as $key => $slider):
                    $title = fw_title_seperator($slider['slider_heading']);
                    $subheading = fw_title_seperator($slider['slider_subheading']);
                    // var_dump($slider)
            ?>
            <!-- vk-background-image-25 -->
                <div class="vk-banner vk-banner-large vk-banner-mod " style="background-image: url(<?php echo fw_filter_slider_image($slider, 'full', false) ?>)" data-animation="fadeIn">
                    <div class="vk-background-overlay vk-background-black _70"></div>
                    <div class="container wrapper">
                        <div class="page-heading text-<?php echo $slider['slider_alignment']; ?>">
                         <span class="vk-text title-main">
                             <span class="vk-text-color-yellow-1" data-animation="<?php echo $animation[$key][0]['animation'] ?>" data-delay="<?php echo $animation[$key][0]['delay'] ?>"><?php echo $title[0] ?></span>
                             <span data-animation="<?php echo $animation[$key][1]['animation'] ?>" data-delay="<?php echo $animation[$key][0]['delay'] ?>"><?php echo $title[1] ?></span>
                        </span>
                            <?php 
                                if($slider['show_subheading'] == 'yes'):
                            ?>
                            <span class="vk-text title-sub " data-animation="<?php echo $animation[$key][2]['animation'] ?>" data-delay="<?php echo $animation[$key][2]['animation'] ?>"><span class="vk-text-color-yellow-1"><?php echo $subheading[0] ?></span> <?php echo $subheading[1]; ?></span>
                            <?php 
                                endif;
                            ?>
                            <?php 
                                if(array_key_exists('cta_buttons', $slider)){
                                    fw_cta_buttons($slider);

                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!--./vk-banner-->
            <?php 
                endforeach;
            ?>

               

            </div>
<?php 
    endif;
?>
        <!-- <div class="vk-home vk-home-slider"> </div>-->
