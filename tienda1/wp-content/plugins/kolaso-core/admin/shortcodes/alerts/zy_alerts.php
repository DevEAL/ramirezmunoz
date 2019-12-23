<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Alerts Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Alerts Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Alerts", 'zytheme'),
		"base" 			=> "zy_alerts_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'zytheme'),
		"icon"      	=> "fa fa-bell-o",
		"description" 	=>esc_html__( 'Alerts block.','zytheme'),
		"params"		=> array(

			array(
				'type' => 'dropdown',
				'heading' =>  esc_html__('Natifaction Types','zytheme'),
				'param_name' => 'alert_type',
				'admin_label' => true,
				'value' => array(
					esc_html__('None Select', 'zytheme') => 'none',
					esc_html__('Primary', 'zytheme') => 'primary',
					esc_html__('Secondary', 'zytheme') => 'secondary',
					esc_html__('Success', 'zytheme') => 'success',
					esc_html__('Danger', 'zytheme') => 'danger',
					esc_html__('Warning', 'zytheme') => 'warning',
					esc_html__('Info', 'zytheme') => 'info',
					esc_html__('Light', 'zytheme') => 'light',
					esc_html__('Dark', 'zytheme') => 'dark',
					esc_html__('Custom', 'zytheme') => 'custom',
				),
				'description' => 'This changes the style of Natifaction',
			),

			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Main Alart Color','zytheme'),
				'param_name'		=> 'main_color',
				'dependency'		=> array('element' => 'alert_type', 'value' => array('custom')),
			),
			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Background Alart Color','zytheme'),
				'param_name'		=> 'background_color',
				'dependency'		=> array('element' => 'alert_type', 'value' => array('custom')),
			),
			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Text Alart Color','zytheme'),
				'param_name'		=> 'text_color',
				'dependency'		=> array('element' => 'alert_type', 'value' => array('custom')),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Alerts Title", 'zytheme'),
				"param_name" => "alert_title",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Alerts Description", 'zytheme'),
				"param_name" => "alert_desc",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
			),
			array(
				'type' => 'dropdown',
				'heading' =>  esc_html__('Icon library','zytheme'),
				'param_name' => 'icon_type',
				'value' => array(
					esc_html__('Kolaso Icons', 'zytheme') => 'kolaso',
					esc_html__('Font Awesome', 'zytheme') => 'fontawesome',
					esc_html__('Themify Icon', 'zytheme') => 'themify',
				),
				'group'					=> esc_html__('Icon', 'zytheme'),
				'description' => 'Select icon library.',
			),

			//kolaso_icons
			array(
				'type' => 'iconpicker',
				'heading' => __( 'Select Icon', 'zytheme' ),
				'param_name' => 'icon_kolaso',
				'value' => 'kolaso-Newspaper',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'kolaso_icons',
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'icon_type',
					'value' => 'kolaso',
				),
				'group'					=> esc_html__('Icon', 'zytheme'),
				'description' => __( 'Select icon from library.', 'zytheme' ),
			),

			//fontawesome_icons
			array(
				'type' => 'iconpicker',
				'heading' => __( 'Select Icon', 'zytheme' ),
				'param_name' => 'icon_fontawesome',
				'value' => 'fa fa-info-circle',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'fontawesomes_icons',
					'iconsPerPage' => 2000,
				),
				'dependency' => array(
					'element' => 'icon_type',
					'value' => 'fontawesome',
				),
				'group'					=> esc_html__('Icon', 'zytheme'),
				'description' => __( 'Select icon from library.', 'zytheme' ),
			),
			//themify_icons
			array(
				'type' => 'iconpicker',
				'heading' => __( 'Select Icon', 'zytheme' ),
				'param_name' => 'icon_themify',
				'value' => 'fa fa-info-circle',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'themify_icons',
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'icon_type',
					'value' => 'themify',
				),
				'group'					=> esc_html__('Icon', 'zytheme'),
				'description' => __( 'Select icon from library.', 'zytheme' ),
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Extra Class", 'zytheme'),
				"param_name" => "extra_class",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Extra Settings", 'zytheme'),
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Extra ID", 'zytheme'),
				"param_name" => "extra_id",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a id name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Extra Settings", 'zytheme'),
			),

		),
	));
endif;
function zy_alerts( $atts, $content = null ) {

	$output = $modulestyle =$alert_type = $alert_title = $alert_desc = $icon_type = $icon_fontawesome = $icon_themify = $icon_kolaso =  $main_color = $background_color = $text_color = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_alerts_module', $atts);
	extract($atts);
	
	(! empty ($background_color)) ? $background_color = ' style="background-color:'.$background_color.';"' : $background_color = '' ;
	(! empty ($main_color)) ? $icon_color = ' style="background-color:'.$main_color.';"' : $icon_color = '' ;
	(! empty ($main_color)) ? $h4_color = ' style="color:'.$main_color.';"' :  $h4_color = '' ;
	(! empty ($text_color)) ? $i_color = ' style="color:'.$text_color.';"' :  $i_color = '' ;
	(! empty ($text_color)) ? $p_color = ' style="color:'.$text_color.';"' :  $p_color = '' ;

	switch ($icon_type) {
		case 'kolaso':
			$icon = '<i class="' . $icon_kolaso . '"'.$i_color.'></i>';
		break;
		case 'themify':
				$icon = '<i class="oi ' . $icon_themify . '"'.$i_color.'></i>';
				break;

		case 'fontawesome':
				$icon = '<i class="' . $icon_fontawesome . '"'.$i_color.'></i>';
				break;
		default: 
		$icon = '<i></i>';
	}

	if ($alert_type == 'custom'):
		$output .= '<div id="alerts-block '.$extra_id.'" class="zytheme-alerts alerts alert-custom '.$extra_class.'" '.$background_color.'>';
			$output .= '<div class="alert-icon"'. $icon_color.'>';
				$output .= ''.$icon.'';
			$output .= '</div>';
			$output .= '<div class="alert-content">';
				if($alert_title) $output .= '<h4' .$h4_color . '>'.$alert_title.'</h4>';
				if($alert_desc) $output .= '<p' .$p_color.'>'.$alert_desc.'</p>';
			$output .= '</div>';
		$output .= '</div>';
	else:
		$output .= '<div id="alerts-block '.$extra_id.'" class="zytheme-alerts alert alert-'.$alert_type.' '.$extra_class.'" role="alert">';
			if($alert_title) $output .= '<strong>'.$alert_title.'</strong>';
			if($alert_desc) $output .= ''.$alert_desc.'';
		$output .= '</div>';
	endif;

	return $output;

}
add_shortcode("zy_alerts_module", "zy_alerts");