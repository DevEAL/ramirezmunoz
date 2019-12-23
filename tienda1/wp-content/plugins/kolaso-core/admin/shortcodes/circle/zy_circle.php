<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Circle Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Circle Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Circle", 'zytheme'),
		"base" 			=> "zy_circle_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-spinner",
		"description" 	=>esc_html__( 'Circle Block.','zytheme'),
		"params"		=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Select Layout Template", 'zytheme'),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"pie-chart-1"		=> array (
						"tooltip"		=> esc_attr__("Style 1", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'circle/preview/style-1.jpg',
					),
					"pie-chart-2"		=> array (
						"tooltip"		=> esc_attr__("Style 2", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'circle/preview/style-2.jpg',
					),
				),
				"admin_label" => true,
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Circle Title", 'zytheme'),
				"param_name" => "title",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				'type' => 'textarea',
				"class" => "",
				"heading" => __("Circle Description", 'zytheme'),
				"param_name" => "desc",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Circle Percent", 'zytheme'),
				"param_name" => "percent",
				"value" => "",
				"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				'type'				=> 'dropdown',
				"heading"		=>	esc_html__('Select Circle Style', 'zytheme'),
				"Description"	=>	esc_html__('Select Circle Style', 'zytheme'),
				'param_name'		=> 'select_circle',
				"value" => array(
					esc_html__("None Select", 'zytheme') => "none",
					esc_html__("Show Icon", 'zytheme') => "show_icon",
					esc_html__("Show Percent", 'zytheme') => "show_percent",
				),
				'group'					=> esc_html__('Icon', 'zytheme'),
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
				"dependency" => Array("element" => "select_circle","value" => array("show_icon")),
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
				"heading" => __("Circle Width", 'zytheme'),
				"param_name" => "circle_width",
				"value" => "",
				'group' => esc_html__("Style", 'zytheme'),
			),

			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Circle Color', 'zytheme'),
				'param_name'    => 'circle_color',
				'group' => esc_html__("Style", 'zytheme'),
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

function zy_circle( $atts, $content = null ) {
	$output = $modulestyle	= $title = $desc	= $percent	= $select_circle= $icon_type= $icon_kolaso  = $icon_fontawesome = $icon_themify= $icon_fonts	= $circle_width	= $circle_color	= $extra_class	= $extra_id	= '';

	$atts = vc_map_get_attributes('zy_circle_module', $atts);
	extract($atts);

	// Enqueue Styles and Scripts
	wp_enqueue_script('zyt-piechart' );

	switch ($icon_type) {
		case 'themify':
				$icon = '<i class="' . $icon_themify . '"></i>';
				break;

		case 'fontawesome':
				$icon = '<i class="' . $icon_fontawesome . '"></i>';
				break;

		case 'kolaso':
				$icon = '<i class="' . $icon_kolaso . '"></i>';
				break;
	}

	if ($select_circle == 'show_percent') {
		$circle = '<div class="prcentage"><span class="prcent">'.$percent.'</span><span class="symbol">%</span></div>';
	} elseif ($select_circle == 'show_icon') {
		$circle = '<div class="rounded-icon">'.$icon.'</div>';
	} else {
		$circle = '';
	}

	if(isset($circle_width) && $circle_width != ''){
		$circle_width_data = $circle_width;
	}else{
		$circle_width_data = '3';
	}

	if(isset($circle_width) && $circle_width != ''){
		$circle_width_data_big = $circle_width;
	}else{
		$circle_width_data_big ='11';
	}

	if(isset($circle_color) && $circle_color != ''){
		$circle_color_data = $circle_color;
	}else{
		$circle_color_data = '#e74c3c';
	}

	if ($modulestyle == 'pie-chart-1') {
		$output .= '<div class="pie-chart '.$modulestyle.' text-center">';
		$output .= '<div class="skill">';
			$output .= '<div class="rounded-skill" data-percent="'.$percent.'" data-width="'.$circle_width_data.'" data-color="'.$circle_color_data.'" data-size="166" data-line="square">';
				$output .= ''.$circle.'';
			$output .= '</div>';
			$output .= '<div class="clearfix"></div>';
			$output .= '<div class="skill-name">';
				$output .= '<h6>'.$title.'</h6>';
				$output .= '<p>'.$desc.'</p>';
			$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
	} elseif ($modulestyle == 'pie-chart-2') {
		$output .= '<div class="pie-chart '.$modulestyle.' text-center">';
		$output .= '<div class="skill">';
			$output .= '<div class="rounded-skill" data-percent="'.$percent.'" data-width="'.$circle_width_data_big.'" data-color="'.$circle_color_data.'" data-size="166" data-line="square">';
				$output .= ''.$circle.'';
			$output .= '</div>';
			$output .= '<div class="clearfix"></div>';
			$output .= '<div class="skill-name">';
				$output .= '<h6>'.$title.'</h6>';
				$output .= '<p>'.$desc.'</p>';
			$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
	}

	return $output;

}
add_shortcode("zy_circle_module", "zy_circle");
