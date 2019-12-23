<?php
if (!defined('ABSPATH')) {exit;}
/**
 *
 * Buttons Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if (function_exists('vc_map')):
// ==========================================================================================
    // Buttons Blocks Style
    // ==========================================================================================

    vc_map(array(
        "name" => esc_html__("Buttons", 'zytheme'),
        "base" => "zy_buttons_module",
        "class" => "",
        "category" => esc_html__("Kolaso", 'kolaso'),
        "icon" => "fa fa-caret-right",
        "description" => esc_html__('Buttons.', 'zytheme'),
        "params" => array(

            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Button Text", 'zytheme'),
                "param_name" => "button_text",
                "admin_label" => true,
                "value" => "",
            ),

            array(
                'type' => 'vc_link',
                "class" => "",
                "heading" => esc_html__('Button Link URL', 'zytheme'),
                "Description" => esc_html__('Add a custom link or select existing page. You can remove existing link as well', 'zytheme'),
                "param_name" => "button_link",
			),
			
			array(
                'type' => 'dropdown',
                "heading" => esc_html__('Select Button Mode', 'zytheme'),
                'param_name' => 'button_mode',
                "value" => array(
                    esc_html__("Button", 'zytheme') => "button",
                    esc_html__("Link", 'zytheme') => "link",
                ),
                'group' => esc_html__("Style", 'zytheme'),
            ),

            array(
                'type' => 'dropdown',
                "heading" => esc_html__('Button Size', 'zytheme'),
                'param_name' => 'button_size',
                "value" => array(
                    esc_html__("Normal", 'zytheme') => "btn-normal",
                    esc_html__("Super Large", 'zytheme') => "btn-large",
                    esc_html__("Small", 'zytheme') => "btn-small",
				),
                'dependency'		=> array('element' => 'button_mode', 'value' => array('button')),
                'group' => esc_html__("Style", 'zytheme'),
            ),


            array(
                'type' => 'dropdown',
                "heading" => esc_html__('Select Button style', 'zytheme'),
                'param_name' => 'button_style',
                "value" => array(
                    esc_html__("Button Primary", 'zytheme') => "btn-primary",
                    esc_html__("Button Primary Outline", 'zytheme') => "btn-primary-outline",
                    esc_html__("Button Primary + Hover Light", 'zytheme') => "btn-primary-hover-light",
                    esc_html__("Button Primary + Hover Dark", 'zytheme') => "btn-primary-hover-dark",
                    esc_html__("Button Secondary", 'zytheme') => "btn-secondary",
                    esc_html__("Button Secondary Outline", 'zytheme') => "btn-secondary-outline",
                    esc_html__("Button Secondary + Hover Light", 'zytheme') => "btn-secondary-hover-light",
                    esc_html__("Button Secondary + Hover Primary", 'zytheme') => "btn-secondary-hover-primary",
                    esc_html__("Button White", 'zytheme') => "btn-white",
                    esc_html__("Button White Outline", 'zytheme') => "btn-white-outline",
                    esc_html__("Button White + Hover Dark", 'zytheme') => "btn-white-hover-dark",
                    esc_html__("Button White + Hover Primary", 'zytheme') => "btn-white-hover-primary",
                    esc_html__("Button Link", 'zytheme') => "btn-link",
					esc_html__("Button Underlined", 'zytheme') => "btn-underlined",
					esc_html__("Button Underlined Primary", 'zytheme') => "btn-underlined-primary",
                    esc_html__("Button Underlined Wihte", 'zytheme') => "btn-underlined-white",
                    esc_html__("Custom", 'zytheme') => "btn-custom",
				),
                'dependency'		=> array('element' => 'button_mode', 'value' => array('button')),
                'group' => esc_html__("Style", 'zytheme'),
            ),
            
            array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Background Color','zytheme'),
				'param_name'		=> 'btn_background',
                'dependency'		=> array('element' => 'button_style', 'value' => array('btn-custom')),
                'group' => esc_html__("Style", 'zytheme'),
			),
			
			array(
                'type' => 'dropdown',
                "heading" => esc_html__('Select Link style', 'zytheme'),
                'param_name' => 'Link_style',
                "value" => array(
					esc_html__("Button Underlined", 'zytheme') => "btn-underlined",
					esc_html__("Button Underlined Primary", 'zytheme') => "btn-underlined-primary",
					esc_html__("Button Underlined Wihte", 'zytheme') => "btn-underlined-white",
					esc_html__("Button Link Normal", 'zytheme') => "btn-link",
				),
                'dependency'		=> array('element' => 'button_mode', 'value' => array('link')),
                'group' => esc_html__("Style", 'zytheme'),
            ),

            array(
                'type' => 'dropdown',
                "heading" => esc_html__('Select Button Shapes', 'zytheme'),
                'param_name' => 'button_shape',
                "value" => array(
                    esc_html__("Button Default", 'zytheme') => "btn-default",
                    esc_html__("Button Normal", 'zytheme') => "btn-square",
                    esc_html__("Button Rounded", 'zytheme') => "btn-rounded",
                    esc_html__("Button Circle", 'zytheme') => "btn-circle",
                ),
				'std' => 'btn-rounded',
                'dependency'		=> array('element' => 'button_mode', 'value' => array('button')),
                'group' => esc_html__("Style", 'zytheme'),
            ),

            array(
                'type' => 'dropdown',
                "heading" => esc_html__('Button width', 'zytheme'),
                'param_name' => 'button_width',
                "value" => array(
                    esc_html__("Width Default", 'zytheme') => "btn-default",
                    esc_html__("Full Width", 'zytheme') => "btn-fullwidth",
                    esc_html__("Width Auto", 'zytheme') => "btn-auto",
				),
                'dependency'		=> array('element' => 'button_mode', 'value' => array('button')),
                'group' => esc_html__("Style", 'zytheme'),
            ),

            array(
                'type' => 'dropdown',
                "heading" => esc_html__('Button Shadow', 'zytheme'),
                'param_name' => 'button_shadow',
                "value" => array(
                    esc_html__("No Shadow", 'zytheme') => "btn-normal",
                    esc_html__("Shadow", 'zytheme') => "btn-shadow",
                    esc_html__("Shadow in Hover Only", 'zytheme') => "btn-hover-shadow",
				),
                'dependency'		=> array('element' => 'button_mode', 'value' => array('button')),
                'group' => esc_html__("Style", 'zytheme'),
            ),

            array(
                'type' => 'dropdown',
                "heading" => esc_html__('Button Align', 'zytheme'),
                'param_name' => 'button_align',
                "value" => array(
                    esc_html__("Button Center", 'zytheme') => "btn-center",
                    esc_html__("Button Right", 'zytheme') => "btn-right",
                    esc_html__("Button Left", 'zytheme') => "btn-left",
				),
                'std' => 'btn-left',
                'group' => esc_html__("Style", 'zytheme'),
            ),

            // array(
            //     'type'                => 'dropdown',
            //     "heading"        =>    esc_html__('Select Button style', 'zytheme'),
            //     "Description"    =>    esc_html__('Select Button style', 'zytheme'),
            //     'param_name'        => 'button_icon',
            //     "value" => array(
            //         esc_html__("None Select", 'zytheme') => "none",
            //         esc_html__("With Icon", 'zytheme') => "with_icon",
            //         esc_html__("Without Icon", 'zytheme') => "without_icon",
            //     ),
            //     'group' => esc_html__("Icon", 'zytheme'),
            //     'dependency'        => array('element' => 'modulestyle', 'value' => array('btn-2')),
            // ),

            // array(
            //     'type' => 'dropdown',
            //     'heading' =>  esc_html__('Icon library','zytheme'),
            //     'param_name' => 'icon_type',
            //     'value' => array(
            //         esc_html__('Font Awesome', 'zytheme') => 'fontawesome',
            //         esc_html__('Themify Icon', 'zytheme') => 'themify',
            //         esc_html__('Linear Icon', 'zytheme') => 'linear',
            //         esc_html__('Typcn Icon', 'zytheme') => 'typcn',
            //     ),
            //     'group'                    => esc_html__('Icon', 'zytheme'),
            //     "dependency"         => array("element" => "button_icon","value" => array("with_icon")),
            //     'dependency'        => array('element' => 'modulestyle', 'value' => array('btn-2')),
            //     'description' => 'Select icon library.',
            // ),

            //fontawesome_icons
            // array(
            //     'type' => 'iconpicker',
            //     'heading' => __( 'Select Icon', 'zytheme' ),
            //     'param_name' => 'icon_fontawesome',
            //     'value' => 'fa fa-info-circle',
            //     'settings' => array(
            //         'emptyIcon' => false,
            //         'type' => 'fontawesomes_icons',
            //         'iconsPerPage' => 2000,
            //     ),
            //     'dependency' => array(
            //         'element' => 'icon_type',
            //         'value' => 'fontawesome',
            //     ),
            //     'group'                    => esc_html__('Icon', 'zytheme'),
            //     'description' => __( 'Select icon from library.', 'zytheme' ),
            // ),
            //themify_icons
            // array(
            //     'type' => 'iconpicker',
            //     'heading' => __( 'Select Icon', 'zytheme' ),
            //     'param_name' => 'icon_themify',
            //     'value' => 'fa fa-info-circle',
            //     'settings' => array(
            //         'emptyIcon' => false,
            //         'type' => 'themify_icons',
            //         'iconsPerPage' => 4000,
            //     ),
            //     'dependency' => array(
            //         'element' => 'icon_type',
            //         'value' => 'themify',
            //     ),
            //     'group'                    => esc_html__('Icon', 'zytheme'),
            //     'description' => __( 'Select icon from library.', 'zytheme' ),
            // ),
            //linear_icons

            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Extra Class", 'zytheme'),
                "param_name" => "extra_class",
                "value" => "",
                "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme'),
                'group' => esc_html__("Extra Settings", 'zytheme'),
            ),

            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Extra ID", 'zytheme'),
                "param_name" => "extra_id",
                "value" => "",
                "description" => __("If you wish to style particular content element differently, then use this field to add a id name and then refer to it in your css file.", 'zytheme'),
                'group' => esc_html__("Extra Settings", 'zytheme'),
            ),
        ),

    ));
endif;

function zy_buttons($atts, $content = null)
{
    $output = $button_text = $button_link = $button_style = $btn_background = $button_mode = $button_shape = $button_width = $button_shadow = $button_size = $button_align = $link_style = $extra_class = $extra_id = '';

    $atts = vc_map_get_attributes('zy_buttons_module', $atts);
    extract($atts);

    if (function_exists('vc_parse_multi_attribute')) {
        $parse_args = vc_parse_multi_attribute($button_link);
        $href = (isset($parse_args['url'])) ? $parse_args['url'] : '#';
        $title = (isset($parse_args['title'])) ? $parse_args['title'] : 'button';
        $target = (isset($parse_args['target'])) ? trim($parse_args['target']) : '_self';
    }

    // Check Button Style
    switch ($button_style) {
        case 'btn-primary-outline':
            $button_style = ' btn-primary btn-outline';
            break;
        case 'btn-primary-hover-light':
            $button_style = ' btn-primary btn-hover-light';
            break;
        case 'btn-primary-hover-dark':
            $button_style = ' btn-primary btn-hover-dark';
            break;
        case 'btn-secondary':
            $button_style = ' btn-secondary';
            break;
        case 'btn-secondary-outline':
            $button_style = ' btn-secondary btn-outline';
            break;
        case 'btn-secondary-hover-light':
            $button_style = ' btn-secondary btn-hover-light';
            break;
        case 'btn-secondary-hover-primary':
            $button_style = ' btn-secondary btn-hover-primary';
            break;
        case 'btn-white':
            $button_style = ' btn-white';
            break;
        case 'btn-white-outline':
            $button_style = ' btn-white btn-outline';
            break;
        case 'btn-white-hover-dark':
            $button_style = ' btn-white btn-hover-dark';
            break;
        case 'btn-white-hover-primary':
            $button_style = ' btn-white btn-hover-primary';
            break;
        case 'btn-link':
            $button_style = ' btn-link';
            break;
        case 'btn-custom':
            $button_style = ' btn-custom';
            break;
        default:
            $button_style = ' btn-primary';
            break;
	}


	// Check Link Style
    switch ($link_style) {
	      case 'btn-underlined-primary':
		  	$link_style = ' btn-underlined underlined-primary';
            break;
        case 'btn-underlined-white':
			$link_style = ' btn-underlined underlined-white';
			break;
		case 'btn-link':
			$link_style = ' btn btn-link';
            break;
        default:
			$link_style = ' btn btn-underlined';
            break;
	}
	
	// Check Button Shape
	($button_shape !='btn-default') ? $button_shape = ' ' . $atts['button_shape'] : $button_shape ='';

	// Check Button Width
	($button_width !='btn-default') ? $button_width = ' ' . $atts['button_width'] : $button_width ='';

	// Check Button shadow
    ($button_shadow !='btn-normal') ? $button_shadow = ' ' . $atts['button_shadow'] : $button_shadow ='';
    
    // Check Button shadow
    ($button_size !='btn-normal') ? $button_size = ' ' . $atts['button_size'] : $button_size ='';
    
    // Custom Button background
    if(isset($btn_background) ):
        $btn_background = 'style="background-color:'.$btn_background.';"';
    endif;

    // Check Heading has ID
    (!empty($extra_id)) ? $get_extra_id = 'id="' . $extra_id . '"' : $get_extra_id = '';

    // Check Heading has Class
    (!empty($extra_class)) ? $get_extra_class = ' ' . $extra_class : $get_extra_class = '';

    // ==========================================================================================
    // Module Button Style
    // ==========================================================================================
	if($button_mode == 'button'):
		$output = '<div ' . $extra_id . ' class="kolaso_button ' . $button_align . $extra_class . '">';
		$output .= '<a href="' . esc_url($href) . '" title="' . $button_text . '" target="' . esc_attr($target) . '" class="btn' . $button_style . $button_width . $button_shape . $button_shadow . $button_size . '" '.$btn_background.'>' . $button_text . '</a>';
		$output .= '</div>';
	else:
		$output = '<div ' . $extra_id . ' class="kolaso_button ' . $button_align . $extra_class . '">';
		$output .= '<a href="' . esc_url($href) . '" title="' . $button_text . '" target="' . esc_attr($target) . '" class="' . $link_style . '">' . $button_text . '</a>';
		$output .= '</div>';

	endif;

    return $output;

}
add_shortcode("zy_buttons_module", "zy_buttons");
