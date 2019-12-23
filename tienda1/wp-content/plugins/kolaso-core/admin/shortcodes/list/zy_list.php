<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Icon List Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// List Content Blocks Style
	// ==========================================================================================
	vc_map( array(
		"name" 					=> esc_html__("List Icons", 'zytheme'),
		"base" 					=> "zy_listicon_module",
		"class" 				=> "",
		"category" 			=> esc_html__("Kolaso", 'kolaso'),
		"icon"      		=> "fa fa-eye",
		'params' => array(
			array(
				'type' => 'param_group',
				'heading' => __( 'Lists', 'zytheme' ),
				'param_name' => 'list_fields',
				'description' => __( 'Add your list content.', 'zytheme' ),
				'value' => urlencode( json_encode( array(
					array(
						'label' => __( 'Content', 'zytheme' ),
						'text_content' => '',
					),
					array(
						'label' => __( 'Content', 'zytheme' ),
						'text_content' => '',
					),
					array(
						'label' => __( 'Content', 'zytheme' ),
						'text_content' => '',
					),
				) ) ),
				'params' => array(
					array(
						'type' => 'textarea',
						'heading' => __( 'Text Content', 'zytheme' ),
						'param_name' => 'text_content',
						'description' => __( 'Enter value of bar.', 'zytheme' ),
						'admin_label' => true,
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
				),
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

function zy_listicon( $atts, $content = '', $id = '' ) {

	$output = $text_content = $icon_type = $kolaso_icons  = $icon_fontawesome = $icon_themify = $list_fields = $extra_class = $extra_id = '';
	

	$atts = vc_map_get_attributes('zy_listicon_module', $atts);
	extract($atts);

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';
	
	if( empty( $list_fields ) ) { return; }

	$list_fields = (array) vc_param_group_parse_atts( $list_fields );

	$output .= '<div '.$get_extra_id.' class="kolaso_lists'.$get_extra_class.'">';
	$output .= '<ul class="list list-icons">';
		foreach($list_fields as $fields) {
			$icon      = ( isset($fields['icon_type'])) ? 'icon_'.$fields['icon_type'] : 'icon_fontawesome';
			$icon_html = ( isset($icon)) ? ' <i class="'.sanitize_html_classes($fields[$icon]).'"></i>':'';
			$output .= '<li>'.$icon_html.''.$fields['text_content'].'</li>';
		}
	$output .= '</ul>';
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_listicon_module", "zy_listicon");
