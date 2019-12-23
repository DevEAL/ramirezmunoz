<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Counters Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Counters Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Counters", 'zytheme'),
		"base" 			=> "zy_counters_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-ellipsis-h",
		"description" 	=>esc_html__( 'Counters Block.','zytheme'),
		"params"		=> array(

			array(
				'type'				=> 'dropdown',
				"heading"		=>	esc_html__('Layout Style', 'zytheme'),
				"Description"	=>	esc_html__('Select Counters Layout Color Style', 'zytheme'),
				'param_name'		=> 'counter_style',
				"admin_label" => true,
				"value" => array(
					esc_html__("Default", 'zytheme') => "default",
					esc_html__("Light Style", 'zytheme') => "counter-light",
					esc_html__("Dark Style", 'zytheme') => "counter-dark",
				),
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Counters Title", 'zytheme'),
				"param_name" => "counter_title",
				"value" => "",
				"admin_label" => true,
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Counters Number", 'zytheme'),
				"param_name" => "counter_value",
				"admin_label" => true,
				"value" => "",
				'group' => esc_html__("Content", 'zytheme'),
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

function zy_counters( $atts, $content = null ) {
	$output = $counter_style = $counter_title = $counter_value = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_counters_module', $atts);
	extract($atts);

	// Enqueue Styles and Scripts
	wp_enqueue_script('zyt-waypoints' );
	wp_enqueue_script('zyt-counterup' );

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

  // ==========================================================================================
  // Module Heading Style
  // ==========================================================================================

	$output .= '<div '.$get_extra_id.' class="kolaso_counter counter counter-1 text-center '.$counter_style.$get_extra_class.'">';
		$output .= '<div class="count-box">';
			$output .= '<div class="counting">'.$counter_value.'</div>';
			$output .= '<div class="count-title">'.$counter_title.'</div>';
		$output .= '</div>';
	$output .= '</div>';
	return $output;

}
add_shortcode("zy_counters_module", "zy_counters");
