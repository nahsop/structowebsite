<?php 
    // var_dump($atts);
    $rd = rand();
    $cols_class = 'col-md-4 col-sm-6';
    $row_class = 'row';
    $container_class = 'container';
    $main_container_class= [];
    $icon_box_class = [];
    $background_style = [
        'main_background' => '',
        'alternate' => '',
        'hover-color' => ''
    ];
    if($atts['layout_background']['background_type'] == 'transparent'){
        $main_container_class[] = 'vk-iconbox-without-background';
        // $main_container_class = '';
        // $icon_box_class = '';
    }else{
        $main_container_class[] = 'vk-iconbox-with-background';
        $icon_box_class[] = 'vk-iconbox-background';
        if($atts['layout_background']['background_type'] == 'solid'){
            $background_style['main_background']  =  'background-color: '.$atts['layout_background']['solid']['background_color'].';';
            $background_style['alternate'] =  'background-color: '.$atts['layout_background']['solid']['background_color_alternnate'].';';
            $background_style['hover-color'] = 'background-color: '.$atts['layout_background']['solid']['background_hover_color'].';';
            echo '';
        }


    }
    if($atts['layout_border']['background_type'] == 'yes'){
        $main_container_class[] = 'vk-iconbox-with-outline';
        $icon_box_class[] = 'vk-iconbox-border';
        
    }
    if($atts['layout_type'] == 'full'){
        $main_container_class = ['vk-iconbox-fullwidth', 'clearfix'];
        $cols_class = 'col-md-3 col-sm-6 vk-clear-padding'; 
        $row_class = '';
        $container_class = '';
    }

?>
<style type="text/css">
    .rd-<?php echo $rd; ?> .vk-iconbox{
        <?php echo $background_style['main_background']; ?>
    }
    .rd-<?php echo $rd; ?> .ib-container:nth-child(odd) .vk-iconbox{
        <?php echo $background_style['alternate']; ?>
    }
    .rd-<?php echo $rd; ?> .vk-iconbox:hover{
        <?php echo $background_style['hover-color']; ?>
    }
    <?php 
        if($atts['icon_color'] != ''){
            echo '.rd-'.$rd.' .vk-iconbox .icon{ color: '.$atts['icon_color'].';  }';
        }
        if($atts['icon_color_hover'] != ''){
            echo '.rd-'.$rd.' .vk-iconbox:hover .icon{ color: '.$atts['icon_color_hover'].';  }';
        }
        if($atts['heading_color'] != ''){
            echo '.rd-'.$rd.' .vk-iconbox .vk-title{ color: '.$atts['heading_color'].';  }';
        }
        if($atts['heading_color_hover'] != ''){
            echo '.rd-'.$rd.' .vk-iconbox:hover .vk-title{ color: '.$atts['heading_color_hover'].';  }';
        }
        if($atts['content_color'] != ''){
            echo '.rd-'.$rd.' .vk-iconbox p{ color: '.$atts['content_color'].';  }';
        }
        if($atts['content_color_hover'] != ''){
            echo '.rd-'.$rd.' .vk-iconbox:hover p{ color: '.$atts['content_color_hover'].';  }';
        }
        if($atts['layout_border']['background_type'] == 'yes' && $atts['layout_border']['yes']['border_color'] != ''){
            echo '.rd-'.$rd.' .vk-iconbox-border{ border-color: '.$atts['layout_border']['yes']['border_color'].';  }';
        }
    ?>
</style>
<div class="vk-iconbox-element rd-<?php echo $rd; ?>">
            <div class="<?php echo implode(' ', $main_container_class); ?> list-item">
                <div class="<?php echo $container_class; ?>">
                    <!-- <div class="text-center vk-space x-large">
                        <h2 class="vk-heading vk-heading-line vk-heading-line-center">
                         <span>
                            <span class="vk-text-color-yellow-1">Icon box</span>
                            with background
                        </span>
                        </h2>
                    </div> -->

                    <div class="<?php echo $row_class; ?>">
                        <?php 
                            foreach($atts['cards'] as $key => $card):
                                // var_dump($card);
                        ?>
                        <div class="<?php echo $cols_class; ?> ib-container">

                            <div class="vk-iconbox <?php echo implode(' ', $icon_box_class); ?> text-center">
                                <div class="icon">
                                    <!-- flaticon flaticon-home-1 -->
                                    <?php 
                                    // var_dump($card);
                                        if($card['icon']['type'] == 'icon-font'):
                                            if($card['icon']['pack-name'] == 'linecons' || $card['icon']['pack-name'] == 'typicons'){
                                                $f_size = 60; 
                                                if($atts['layout_type'] == 'full'){
                                                    $f_size = 65;
                                                    // if($card['icon']['pack-name'] == 'typicons'){
                                                    //     $f_size = 60.9;
                                                    // }

                                                }
                                            }elseif($card['icon']['pack-name'] == 'entypo'){
                                                $f_size = 72;
                                                if($atts['layout_type'] == 'full'){
                                                    $f_size = 79;

                                                }
                                            }elseif($card['icon']['pack-name'] == 'linearicons'){
                                                $f_size = 78;
                                                if($atts['layout_type'] == 'full'){
                                                    $f_size = 80;
                                                    

                                                }
                                            }else{
                                                $f_size = 80;
                                                if($atts['layout_type'] == 'full'){
                                                    $f_size = 81;
                                                    if($card['icon']['pack-name'] == 'dashicons'){
                                                        $f_size = 86;
                                                    }
                                                    if($card['icon']['pack-name'] == 'font-awesome'){
                                                        $f_size = 81;
                                                    }

                                                }
                                            }
                                            
                                    ?>
                                        <i class="<?php echo $card['icon']['icon-class'] ?>" style="font-size: <?php echo $f_size; ?>px;"></i>
                                        <link rel="stylesheet" type="text/css" href="<?php echo $card['icon']['pack-css-uri'] ?>">
                                    <?php 
                                        else:
                                    ?>
                                        <img src="<?php echo $card['icon']['url']; ?>" style="width: 78px;">
                                    <?php endif; ?>
                                </div>
                                <div class="iconbox-content">
                                    <h4 class="vk-title text-uppercase"><?php echo $card['card_heading']; ?></h4>
                                    <p class="vk-text">
                                        <?php echo $card['card_content']; ?>
                                            
                                    </p>
                                </div>
                                <?php 
                                    if(array_key_exists('cta_buttons', $card)){
                                        fw_cta_buttons($card);

                                    }
                                ?>
                            </div>
                            <!--./vk-iconbox-->

                        </div>
                        <?php 
                            endforeach;
                        ?>

                    </div>
                    <!--./row-->
                </div>
                <!--./container-->
            </div>
</div>