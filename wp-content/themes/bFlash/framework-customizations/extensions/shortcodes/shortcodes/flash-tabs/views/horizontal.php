<?php 
// var_dump($atts);
$unique = $atts['id'];
    // vk-tab-border tab-border-bd
    $classes = [];
    if($atts['tab_border'] == 'enabled'){
        $classes[] = 'vk-tab-border';
    }
    if($atts['tab_background']['gadget'] == 'flat'){
        $classes[] = 'vk-tab-flat';
    }else{
        if(in_array('vk-tab-border', $classes)){

            $classes = array_diff( $classes, ['vk-tab-border'] );
        }
        $classes[] = 'vk-tab-flat';
        $classes[] = 'tab-flat-bg';
        if($atts['tab_background']['background']['background_color'] != ''){
            $style .= '.vk-tab.vk-tab-flat .vk-nav-tabs li.active a{background-color: '.$atts['tab_background']['background']['background_color'].';}';
        }

    }
    if($atts['base_color'] != ''){
        $style.= '.vk-tab.vk-tab-border .vk-nav-tabs li.active a{box-shadow: inset 0 5px 0 '.$atts['base_color'].';}';
        $style .= '.vk-tab.vk-tab-border .vk-nav-tabs li a{color: '.$atts['base_color'].';}';
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
                
            
                <div class="vk-tab <?php echo implode(' ', $classes) ?>  " >

                                
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

