<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Countdown Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Countdown Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Countdown", 'zytheme'),
		"base" 			=> "zy_countdown_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-bullseye",
		"description" 	=>esc_html__( 'Countdown Block.','zytheme'),
		"params"		=> array(
			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Countdown Year", 'zytheme'),
				"param_name" => "countdown_year",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Countdown Month", 'zytheme'),
				"param_name" => "countdown_month",
				"value" => "",
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Countdown Day", 'zytheme'),
				"param_name" => "countdown_day",
				"value" => "",
			),

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Style",'zytheme'),
				"param_name" => "countdown_style",
				"admin_label" => true,
				"value" => array(
					esc_html__("Dark", 'zytheme') => "countdown-dark",
					esc_html__("Light", 'zytheme') => "countdown-light",
					
				),
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

function zy_countdown( $atts, $content = null ) {
	$output = $countdown_style	= $countdown_year = $countdown_month = $countdown_day	= $extra_class = $extra_id	= '';

	$atts = vc_map_get_attributes('zy_countdown_module', $atts);
	extract($atts);

	// Enqueue Styles and Scripts
	wp_enqueue_script('zyt-countdown' );

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
		
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	// ==========================================================================================
	// Module Heading Style
	// ==========================================================================================

	$output .= '<div '.$get_extra_id.' class="kolaso_countdown'.$get_extra_class.'">';
		$output .= '<div class="countdown '.$countdown_style.'" data-count-date="'.$countdown_year.', '.$countdown_month.', '.$countdown_day.'"></div>';
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_countdown_module", "zy_countdown");
