<?php 
    // vk-tab-border tab-border-bd
    // var
    // 
// var_dump($atts);
$unique = $atts['id'];

    $classes = [];
    if($atts['tab_border'] == 'enabled'){
        $classes[] = 'tab-vertical-outline';
    }
    if($atts['tab_background']['gadget'] == 'flat'){
        // $classes[] = 'tab-vertical-flat flat-2';
    }else{
        if(in_array('tab-vertical-outline', $classes)){

            $classes = array_diff( $classes, ['tab-vertical-outline'] );
        }
        $classes[] = 'tab-vertical-flat';
        $classes[] = 'flat-2';
        if($atts['tab_background']['background']['background_color'] != ''){
            $style .= '.vk-tab.tab-vertical-flat .vk-nav-tabs li.active a{background-color: '.$atts['tab_background']['background']['background_color'].';}';
        }

    }
    if($atts['base_color'] != ''){
        $style.= '.vk-tab.tab-vertical-outline .vk-nav-tabs li.active{border-left: solid 5px '.$atts['base_color'].';}';
        $style .= '.vk-tab.tab-vertical-outline .vk-nav-tabs li.active a{color: '.$atts['base_color'].';}';
    }
?>
<style type="text/css">
    <?php echo $style; ?>
</style>
<div class="vk-tab-wrapper">
    <div class="container">
        <div class="row ">
    <div class="clearfix"></div>
    <div class="vk-space medium"></div>

                        <div class="vk-heading vk-text-center">
                            <h2 class="vk-heading vk-heading-line vk-heading-line-center">
                         <span>
                                  <?php echo fw_span_title($atts['heading']) ?>
                             
                        </span>
                            </h2>
                        </div>

                        <!-- <div class="vk-space x-small"></div> -->
        <div class="col-md-12">
                <div class="vk-tab vk-vertical-tab <?php echo implode(' ', $classes) ?> ">
                            <div class="row">
                                
                                <!-- Nav tabs -->
                                <div class="col-md-2 col-sm-2 col-xs-5">
                                    <ul class="vk-list vk-list-inline vk-nav-tabs clearfix">
                                        <?php 
                                            array_walk($atts['tab'], function($value, $index) use ($unique){
                                                $class = '';
                                                if($index == 0){
                                                    $class = 'active';
                                                }
                                                $template = '<li role="presentation" class="%s">
                                                                                                <a class="vk-cc-font-bold vk-text-uppercase" href="#%s-%d" data-toggle="tab">%s</a>
                                                                                            </li>';  
                                                vprintf($template, [
                                                    $class,
                                                    $unique,
                                                    $index,
                                                    $value['tab_heading']
                                                ]);      
                                            });

                                        ?>
                                    </ul>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-7">
                                    <div class="tab-content vk-tab-content">
                                        <?php 
                                        array_walk($atts['tab'], function($value, $index) use ($unique){
                                            $class = '';
                                            if($index == 0){
                                                $class = 'active';
                                            }
                                            $template = '<div class="tab-pane %s" id="%s-%d">%s</div>';  
                                            vprintf($template, [
                                                $class,
                                                $unique,
                                                $index,
                                                $value['tab_content']
                                            ]);     
                                        });

                                    ?>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
        </div>
</div>       
    </div>
</div>
