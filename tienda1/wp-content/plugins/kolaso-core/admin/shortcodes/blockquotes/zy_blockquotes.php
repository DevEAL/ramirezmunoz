<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Blockquotes Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Blockquotes Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Blockquotes", 'zytheme'),
		"base" 			=> "zy_blockquotes_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-quote-right",
		"params"		=> array(
		
			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Select Layout Template",'zytheme'),
				"param_name" => "modulestyle",
				"admin_label" => true,
				"value" => array(
					esc_html__("Style 1", 'zytheme') => "blockquote-1",
					esc_html__("Style 2", 'zytheme') => "blockquote-2",
					esc_html__("Style 3", 'zytheme') => "blockquote-3",
					esc_html__("Style 4", 'zytheme') => "blockquote-4",
				),
			),

			array(
				"type" => "textarea",
				"class" => "",
				"heading" => __("Content", 'zytheme'),
				"param_name" => "content_blockquote",
				"value" => "",
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Author", 'zytheme'),
				"param_name" => "title",
				"value" => "",
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

function zy_blockquotes( $atts, $content = null ) {
	$output = $modulestyle = $title = $content_blockquote = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_blockquotes_module', $atts);
	extract($atts);

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	$output .= '<blockquote '.$get_extra_id.' class="zytheme_blockquote blockquote '.$modulestyle.$get_extra_class.'">';
		$output .= ''.$content_blockquote.'';
		$output .= '<span class="quote-author">';
			$output .= ''.$title.'';
		$output .= '</span>';
	$output .= '</blockquote>';

	return $output;

}
add_shortcode("zy_blockquotes_module", "zy_blockquotes");
