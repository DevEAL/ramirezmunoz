<?php
if (!defined('ABSPATH')) {exit;}
/**
 *
 * Divider Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if (function_exists('vc_map')):
// ==========================================================================================
    // Divider Blocks Style
    // ==========================================================================================

    vc_map(array(
        "name" => esc_html__("Divider", 'zytheme'),
        "base" => "zy_divider_module",
        "class" => "",
        "category" => esc_html__("Kolaso", 'kolaso'),
        "icon" => "fa fa-check",
        "description" => esc_html__('Divider Block.', 'zytheme'),
        "params" => array(
            array(
                "type" => "radio_image_select",
                "heading" => esc_html__("Select Layout Template", 'zytheme'),
                "param_name" => "modulestyle",
                "simple_mode" => false,
                "options" => array(
                    "divider-1" => array(
                        "tooltip" => esc_attr__("Style 1", 'zytheme'),
                        "src" => ZYTHEME_SHORTCODES . 'action/preview/style-1.jpg',
                    ),
                ),
                "admin_label" => true,
            ),

            array(
                'type' => 'colorpicker',
                'heading' => esc_html__('Background Color', 'zytheme'),
                'param_name' => 'divider_color',
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Extra Class", 'zytheme'),
                "param_name" => "extra_class",
                "value" => "",
                'group' => esc_html__("Extra Settings", 'zytheme'),
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Extra ID", 'zytheme'),
                "param_name" => "extra_id",
                "value" => "",
                'group' => esc_html__("Extra Settings", 'zytheme'),
            ),
        ),

    ));
endif;

function zy_divider($atts, $content = null)
{
    $output = $modulestyle = $divider_color = $extra_class = $extra_id = '';

    $atts = vc_map_get_attributes('zy_divider_module', $atts);
    extract($atts);

    (!empty($divider_color)) ? $divider_color = $divider_color : $divider_color = '#fff';

    // Check Heading has ID
    (!empty($extra_id)) ? $get_extra_id = 'id="' . $extra_id . '"' : $get_extra_id = '';

    // Check Heading has Class
    (!empty($extra_class)) ? $get_extra_class = ' ' . $extra_class : $get_extra_class = '';

    // ==========================================================================================
    // Module Action Style
    // ==========================================================================================

    if ($modulestyle == 'divider-1'):
        $output .= '<div ' . $get_extra_id . ' class="kolaso_divider divider ' . $modulestyle . ' ' . $get_extra_class . '">';
        $output .= '<div class="divider-content">';
        $output .= '<svg xmlns="http://www.w3.org/2000/svg" width="1600" height="112" viewBox="0 0 1600 112">
							<defs>
							<style>
								.cls-1 {
								fill: ' . $divider_color . ';
								fill-rule: evenodd;
								}
							</style>
							</defs>
							<path id="Divider" class="cls-1" d="M0,785s527.7-126.837,841.205-34.042C1193.79,855.321,1600,688,1600,688h0V800H0V785Z" transform="translate(0 -688)"/>
						</svg>';
        $output .= '</div>';
        $output .= '</div>';
    endif;

    return $output;

}
add_shortcode("zy_divider_module", "zy_divider");
