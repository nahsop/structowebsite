<style type="text/css">
    <?php 
        echo '#counters-'. $atts['id'] .' .vk-counter-section,#counters-'. $atts['id'] .' .vk-counter-section-style-3, #counters-'. $atts['id'] .' .vk-counter-section .vk-counter-non-icon,#counters-'. $atts['id'] .' .vk-counter-section .vk-counter-inline  { '.
            'background-color: '. $atts['background_color_picker'] .';'.
        ' } '.
        '#counters-'. $atts['id'] .' .counter-icon{ '.
            'color: '. $atts['icon_color_option'] .';'.
            'border: 2px solid' . $atts['icon_color_option'] .';'.
        ' } '.
        '#counters-'. $atts['id'] .' .vk-counter{ '.
            'color: '. $atts['text_color'] .';'.
        ' } ';
    ?>
</style>
<div class="vk-counter-element" id="counters-<?php echo esc_attr($atts['id']); ?>">
	<div class="vk-counter-section-style-3">
                <div class="container">
                    <div class="row">
                    	<?php 
                            array_walk($atts['counts'], function($count, $index){
                                // var_dump($count);
                                // 
                                $icon = '';
                                $child = '';
                                if(!empty($count['count_icon'])){
                                    $icon = $count['count_icon']['icon-class'];
                                }
                                if($index == 0){
                                    $child = 'first-child';
                                }
                                $template = '<div class="col-md-'.$atts['column'].' col-sm-6">

					                            <div class="vk-counter %s">
					                                <i class="counter-icon %s"></i>
					                                <ul class="content">
					                                    <li class="number-count" data-to="%s"></li>
					                                    <li class="title text-uppercase">%s</li>
					                                </ul>
					                            </div>
					                            <!--./vk-counter-->

					                        </div>';
                                vprintf($template, [$child, $icon,  $count['count_number'],  $count['count_heading'] ]);
                            })
                         ?>
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
</div>