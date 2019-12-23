<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Call To Action Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Call to Action Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Call to Action", 'zytheme'),
		"base" 			=> "zy_action_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-check",
		"description" 	=>esc_html__( 'Call to Action Block.','zytheme'),
		"params"		=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Select Layout Template", 'zytheme'),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"cta-1"		=> array (
						"tooltip"		=> esc_attr__("Style 1", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'action/preview/style-1.jpg',
					),
					"cta-2"		=> array (
						"tooltip"		=> esc_attr__("Style 2", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'action/preview/style-2.jpg',
					),
					"cta-3"		=> array (
						"tooltip"		=> esc_attr__("Style 3", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'action/preview/style-3.jpg',
					),
				),
				"admin_label" => true,
			),


			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("subTitle", 'zytheme'),
				"param_name" => "action_subtitle",
				"value" => "",
				'group' => esc_html__("Content", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('cta-2'))
			),

			
			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Title", 'zytheme'),
				"param_name" => "action_title",
				"value" => "",
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				'type' => 'textarea',
				"class" => "",
				"heading" => __("Description", 'zytheme'),
				"param_name" => "action_desc",
				"value" => "",
				'group' => esc_html__("Content", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('cta-1','cta-3'))
			),

			array(
			'type'        => 'vc_link',
					'class' 			=> "",
			'heading'     =>__("Button Link", 'zytheme'),
			'param_name'  => 'button_link',
					"value" 			=> "",
					'group'					=> esc_html__('Content', 'zytheme'),
			),
		
		array(
			"type" => "dropdown",
			"heading" =>  esc_html__("Style Content",'zytheme'),
			"param_name" => "action_style",
			"admin_label" => true,
			"value" => array(
				esc_html__("Dark", 'zytheme') => "cta-dark",
				esc_html__("Light", 'zytheme') => "cta-light",
			),
			"description" => "This changes the Style of the content",
			'group' => esc_html__("Style", 'zytheme'),
		),


		array(
			"type" => "dropdown",
			"heading" =>  esc_html__("Content Alignment",'zytheme'),
			"param_name" => "action_alignment",
			"admin_label" => true,
			"value" => array(
				esc_html__("Text Center", 'zytheme') => "text-center",
				esc_html__("Text Right", 'zytheme') => "text-right",
				esc_html__("Text Left", 'zytheme') => "text-left",
			),
			'std'         => 'text-left',
			'group' => esc_html__("Style", 'zytheme'),
		),

		array(
			'type' => 'dropdown',
			"heading" => esc_html__('Select Button style', 'zytheme'),
			'param_name' => 'action_btn_style',
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
			),
			'group' => esc_html__("Style", 'zytheme'),
		),

		array(
			'type' => 'dropdown',
			"heading" => esc_html__('Select Button Shapes', 'zytheme'),
			'param_name' => 'action_btn_shape',
			"value" => array(
				esc_html__("Button Default", 'zytheme') => "btn-default",
				esc_html__("Button Normal", 'zytheme') => "btn-square",
				esc_html__("Button Rounded", 'zytheme') => "btn-rounded",
				esc_html__("Button Circle", 'zytheme') => "btn-circle",
			),
			'std' => 'btn-rounded',
			'group' => esc_html__("Style", 'zytheme'),
		),

		array(
			'type' => 'dropdown',
			"heading" => esc_html__('Button Shadow', 'zytheme'),
			'param_name' => 'action_btn_shadow',
			"value" => array(
				esc_html__("Normal", 'zytheme') => "btn-normal",
				esc_html__("Shadow", 'zytheme') => "btn-shadow",
				esc_html__("Shadow in Hover Only", 'zytheme') => "btn-hover-shadow",
			),
			'group' => esc_html__("Style", 'zytheme'),
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
		)

	));
endif;

function zy_action( $atts, $content = null ) {
	$output = $modulestyle	= $action_subtitle = $action_title	= $action_desc	= $action_style = $action_alignment	= $button_link	= $action_btn_style	= $action_btn_shape	= $action_btn_shadow = $extra_class	= $extra_id	= '';

	$atts = vc_map_get_attributes('zy_action_module', $atts);
	extract($atts);
	
	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
    $parse_args = vc_parse_multi_attribute( $button_link );
    $href       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
    $title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'button';
    $target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
  }
	
	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';


	 // Check Button Style
	 switch ($action_btn_style) {
        case 'btn-primary-outline':
            $action_btn_style = 'btn-primary btn-outline';
            break;
        case 'btn-primary-hover-light':
            $action_btn_style = 'btn-primary btn-hover-light';
            break;
        case 'btn-primary-hover-dark':
            $action_btn_style = 'btn-primary btn-hover-dark';
            break;
        case 'btn-secondary':
            $action_btn_style = 'btn-secondary';
            break;
        case 'btn-secondary-outline':
            $action_btn_style = 'btn-secondary btn-outline';
            break;
        case 'btn-secondary-hover-light':
            $action_btn_style = 'btn-secondary btn-hover-light';
            break;
        case 'btn-secondary-hover-primary':
            $action_btn_style = 'btn-secondary btn-hover-primary';
            break;
        case 'btn-white':
            $action_btn_style = 'btn-white';
            break;
        case 'btn-white-outline':
            $action_btn_style = 'btn-white btn-outline';
            break;
        case 'btn-white-hover-dark':
            $action_btn_style = 'btn-white btn-hover-dark';
            break;
        case 'btn-white-hover-primary':
            $action_btn_style = 'btn-white btn-hover-primary';
            break;
        case 'btn-link':
            $action_btn_style = 'btn-link';
            break;
        default:
            $action_btn_style = 'btn-primary';
            break;
	}


	// ==========================================================================================
	// Module Action Style
	// ==========================================================================================

	if ($modulestyle == 'cta-1'):
		$output .= '<div '.$get_extra_id.' class="kolaso_cta cta '.$modulestyle.' '.$action_alignment.' '.$action_style.' '.$get_extra_class.'">';
				$output .= '<div class="cta-content">';
					$output .= '<h2 class="cta-title">'.$action_title.'</h2>';
					if(!empty($action_desc) ):
						$output .= '<p class="cta-desc">'.$action_desc.'</p>';
					endif;
				$output .= '</div>';
				$output .= '<div class="cta-button">';
					$output .=  '<a href="'.esc_url($href).'" title="'.esc_attr($title).'" target="'.esc_attr($target).'" class="btn '.$action_btn_style.' '.$action_btn_shape.' '.$action_btn_shadow.'">'.esc_html($title).'</a>';
				$output .= '</div>';
		$output .= '</div>';
	elseif ($modulestyle == 'cta-2'):
		$output .= '<div '.$get_extra_id.' class="kolaso_cta cta '.$modulestyle.' '.$action_alignment.' '.$action_style.''.$get_extra_class.'">';
			$output .= '<div class="cta-content">';
			if(!empty($action_subtitle) )
				$output .= '<p class="cta-subtitle">'.$action_subtitle.'</p>';
				$output .= '<h2 class="cta-title">'.$action_title.'</h2>';
			$output .= '</div>';
			$output .= '<div class="cta-button">';
			$output .=  '<a href="'.esc_url($href).'" title="'.esc_attr($title).'" target="'.esc_attr($target).'" class="btn '.$action_btn_style.' '.$action_btn_shape.' '.$action_btn_shadow.'">'.esc_html($title).'</a>';
			$output .= '</div>';
		$output .= '</div>';
	elseif ($modulestyle == 'cta-3'):
		$output .= '<div '.$get_extra_id.' class="kolaso_cta cta '.$modulestyle.' '.$action_alignment.' '.$action_style.''.$get_extra_class.'">';
			$output .= '<div class="cta-content">';
				$output .= '<h2 class="cta-title">'.$action_title.'</h2>';
				if(!empty($action_desc) ):
					$output .= '<p class="cta-desc">'.$action_desc.'</p>';
				endif;
			$output .= '</div>';
			$output .= '<div class="cta-button">';
			$output .=  '<a href="'.esc_url($href).'" title="'.esc_attr($title).'" target="'.esc_attr($target).'" class="btn '.$action_btn_style.' '.$action_btn_shape.' '.$action_btn_shadow.'">'.esc_html($title).'</a>';
			$output .= '</div>';
		$output .= '</div>';
	endif;
	

	return $output;

}
add_shortcode("zy_action_module", "zy_action");
