<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Spacer Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Spacer Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Spacer", 'zytheme'),
		"base" 			=> "zy_spacer_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-check",
		"description" 	=>esc_html__( 'Spacer Block.','zytheme'),
		"params"		=> array(

		array(
			"type" => "dropdown",
			"heading" =>  esc_html__("Extra large devices",'zytheme'),
			"param_name" => "spacer_lg",
			"admin_label" => true,
			"description" 	=>esc_html__( 'Large desktops, 1200px and up','zytheme'),
			"value" => array(
				esc_html__("None Select", 'zytheme') => "none",
				esc_html__("10 px", 'zytheme') => "1",
				esc_html__("20 px", 'zytheme') => "2",
				esc_html__("30 px", 'zytheme') => "3",
				esc_html__("40 px", 'zytheme') => "4",
				esc_html__("50 px", 'zytheme') => "5",
				esc_html__("60 px", 'zytheme') => "6",
				esc_html__("70 px", 'zytheme') => "7",
				esc_html__("80 px", 'zytheme') => "8",
				esc_html__("90 px", 'zytheme') => "9",
				esc_html__("100 px", 'zytheme') => "10",
			),
		),

		array(
			"type" => "dropdown",
			"heading" =>  esc_html__("Large devices",'zytheme'),
			"param_name" => "spacer_md",
			"admin_label" => true,
			"description" 	=>esc_html__( 'Desktops, 992px and up','zytheme'),
			"value" => array(
				esc_html__("None Select", 'zytheme') => "none",
				esc_html__("10 px", 'zytheme') => "1",
				esc_html__("20 px", 'zytheme') => "2",
				esc_html__("30 px", 'zytheme') => "3",
				esc_html__("40 px", 'zytheme') => "4",
				esc_html__("50 px", 'zytheme') => "5",
				esc_html__("60 px", 'zytheme') => "6",
				esc_html__("70 px", 'zytheme') => "7",
				esc_html__("80 px", 'zytheme') => "8",
				esc_html__("90 px", 'zytheme') => "9",
				esc_html__("100 px", 'zytheme') => "10",
			),
		),

		array(
			"type" => "dropdown",
			"heading" =>  esc_html__("Medium devices",'zytheme'),
			"param_name" => "spacer_sm",
			"admin_label" => true,
			"description" 	=>esc_html__( 'tablets, 768px and up','zytheme'),
			"value" => array(
				esc_html__("None Select", 'zytheme') => "none",
				esc_html__("10 px", 'zytheme') => "1",
				esc_html__("20 px", 'zytheme') => "2",
				esc_html__("30 px", 'zytheme') => "3",
				esc_html__("40 px", 'zytheme') => "4",
				esc_html__("50 px", 'zytheme') => "5",
				esc_html__("60 px", 'zytheme') => "6",
				esc_html__("70 px", 'zytheme') => "7",
				esc_html__("80 px", 'zytheme') => "8",
				esc_html__("90 px", 'zytheme') => "9",
				esc_html__("100 px", 'zytheme') => "10",
			),
		),

		array(
			"type" => "dropdown",
			"heading" =>  esc_html__("Small devices",'zytheme'),
			"param_name" => "spacer_xs",
			"admin_label" => true,
			"description" 	=>esc_html__( 'landscape phones, 320px and up','zytheme'),
			"value" => array(
				esc_html__("None Select", 'zytheme') => "none",
				esc_html__("10 px", 'zytheme') => "1",
				esc_html__("10 px", 'zytheme') => "1",
				esc_html__("20 px", 'zytheme') => "2",
				esc_html__("30 px", 'zytheme') => "3",
				esc_html__("40 px", 'zytheme') => "4",
				esc_html__("50 px", 'zytheme') => "5",
				esc_html__("60 px", 'zytheme') => "6",
				esc_html__("70 px", 'zytheme') => "7",
				esc_html__("80 px", 'zytheme') => "8",
				esc_html__("90 px", 'zytheme') => "9",
				esc_html__("100 px", 'zytheme') => "10",
			),
		),

		)

	));
endif;

function zy_spacer( $atts, $content = null ) {
	$output = $spacer_lg = $spacer_md = $spacer_sm = $spacer_cs = '';

	$atts = vc_map_get_attributes('zy_spacer_module', $atts);
	extract($atts);

	(!empty($spacer_lg ) && $spacer_lg != 'none') ? $spacer_lg = ' h-lg-'.$spacer_lg : $spacer_lg = '';

	(!empty($spacer_md ) && $spacer_md != 'none') ? $spacer_md = ' h-md-'.$spacer_md : $spacer_md = '';

	(!empty($spacer_sm ) && $spacer_sm != 'none') ? $spacer_sm = ' h-sm-'.$spacer_sm : $spacer_sm = '';

	(!empty($spacer_xs ) && $spacer_xs != 'none') ? $spacer_xs = ' h-xs-'.$spacer_xs : $spacer_xs = '';
	
	$unique_id = uniqid();

	$output .= '<div id="spacer'.$unique_id.'" class="kolaso_spacer'.$spacer_lg. $spacer_md. $spacer_sm. $spacer_xs.'">';
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_spacer_module", "zy_spacer");
