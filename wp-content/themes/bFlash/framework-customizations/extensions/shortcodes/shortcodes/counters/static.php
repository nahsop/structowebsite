<?php


if (!function_exists('_action_theme_shortcode_counters_enqueue_dynamic_css')):

/**
 * @internal
 * @param array $data
 */
function _action_theme_shortcode_counters_enqueue_dynamic_css($data) {
    // var_dump($data);

    $shortcode = 'counters';
    $atts = shortcode_parse_atts( $data['atts_string'] );
    $atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);

    wp_add_inline_style(
        $atts['id'],
        '#counters-'. $atts['id'] .' .vk-counter-section,#counters-'. $atts['id'] .' .vk-counter-section .vk-counter-section-style-1, #counters-'. $atts['id'] .' .vk-counter-section .vk-counter-non-icon,#counters-'. $atts['id'] .' .vk-counter-section .vk-counter-inline  { '.
            'background-color: '. $atts['background_color_picker'] .';'.
        ' } '.
        '#counters-'. $atts['id'] .' { '.
            'color: '. $atts['icon_color_option'] .';'.
        ' } '.
        '#counters-'. $atts['id'] .' { '.
            'color: '. $atts['text_color'] .';'.
        ' } '

    );
}
add_action(
    'fw_ext_shortcodes_enqueue_static:counters',
    '_action_theme_shortcode_counters_enqueue_dynamic_css'
);

endif;