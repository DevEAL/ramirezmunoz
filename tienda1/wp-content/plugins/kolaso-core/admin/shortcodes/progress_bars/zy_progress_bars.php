<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Progress Bars Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Progress Bars Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Progress Bars", 'zytheme'),
		"base" 			=> "zy_progress_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-battery-3",
		"description" 	=>esc_html__( 'Progress Bars Block.','zytheme'),
		"params"		=> array(

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Progress Bars Title", 'zytheme'),
				"param_name" => "title",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Progress Bars Percent", 'zytheme'),
				"param_name" => "percent",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
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
		)

	));
endif;

function zy_progress( $atts, $content = null ) {

	$output = $modulestyle = $title = $percent = $extra_class = $extra_id =  '';

	$atts = vc_map_get_attributes('zy_progress_module', $atts);
	extract($atts);
	
	$output .= '<div class="skills skills-1 progress-gradient">';
		$output .= '<div class="progressbar">';
			$output .= '<div class="progress-title">';
				$output .= '<span class="title">'.$title.'</span>';
				$output .= '<span class="value" data-value="'.$percent.'">'.$percent.'%</span>';
			$output .= '</div>';
			$output .= ' <div class="progress">';
				$output .= '<div class="progress-bar" role="progressbar" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100"></div>';
			$output .= '</div>';
		$output .= '</div><!-- .progressbar end -->';
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_progress_module", "zy_progress");
