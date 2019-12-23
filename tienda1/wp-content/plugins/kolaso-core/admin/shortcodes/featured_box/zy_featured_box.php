<?php
/**
 *
 * Featured Box Style
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Featured Box Element
	// ==========================================================================================

	vc_map( array(
		"name" 					=> esc_html__("Featured Box", 'zytheme'),
		"base" 					=> "zy_featured_module",
		"class" 				=> "",
		"category" 			=> esc_html__("Kolaso", 'kolaso'),
		"icon"      		=> "fa fa-circle",
		"description" 	=>esc_html__( 'Bulid Your Layout Featured Box.','zytheme'),
		"params"				=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Select Layout Template", 'zytheme'),
				"param_name"	=> "featuredboxstyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"features-1"		=> array (
						"tooltip"		=> esc_attr__("Style 1", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'featured_box/preview/style-1.jpg',
					),
					"features-2"		=> array (
						"tooltip"		=> esc_attr__("Style 2", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'featured_box/preview/style-2.jpg',
					),

					"features-3"		=> array (
						"tooltip"		=> esc_attr__("Style 3", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'featured_box/preview/style-3.jpg',
					),

					"features-4"		=> array (
						"tooltip"		=> esc_attr__("Style 4", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'featured_box/preview/style-4.jpg',
					),

					"features-5"		=> array (
						"tooltip"		=> esc_attr__("Style 5", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'featured_box/preview/style-5.jpg',
					),
				),
				"admin_label" => true,
			),

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Content Alignment",'zytheme'),
				"param_name" => "content_alignment",
				"admin_label" => true,
				"value" => array(
					esc_html__("None Select", 'zytheme') => "none",
					esc_html__("Text Center", 'zytheme') => "text-center",
					esc_html__("Text Right", 'zytheme') => "text-right",
					esc_html__("Text Left", 'zytheme') => "text-left",
				),
				"description" => "This changes the Alignment of the icon box",
				'group' => esc_html__("Style", 'zytheme'),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('Featured Active', 'zytheme'),
				'param_name' => 'featured_active',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'on' => 'Yes',
							'off' => 'No',
						),
					),
					"description" => "Add Bordered Active",
					'group' => esc_html__("Style", 'zytheme'),
					'dependency'		=> array('element' => 'featuredboxstyle', 'value' => array('features-4')),
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
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Color','zytheme'),
				'param_name'		=> 'icon_color',
				'group'					=> esc_html__('Icon', 'zytheme'),
			),
		
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Title Text",'zytheme'),
				"description" => esc_html__("Title Block Text",'zytheme'),
				"param_name" => "blocktitle",
				"value" => "",
				'group'					=> esc_html__('Title', 'zytheme'),
			),

			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Color','zytheme'),
				'param_name'		=> 'blocktitle_color',
				'group'					=> esc_html__('Title', 'zytheme'),
			),

			array(
				"type" => "textarea",
				"class" => "",
				"heading" => __("Content", 'zytheme'),
				"param_name" => "description",
				"value" => "",
				"description" => __("Please, enter content in this element.", 'zytheme'),
				'group'					=> esc_html__('Description', 'zytheme'),
			),

			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Color','zytheme'),
				'param_name'		=> 'desc_color',
				'group'					=> esc_html__('Description', 'zytheme'),
			),
			
			array(
				'type'          => 'checkbox',
				'heading'       => esc_html__('Enable Read More', 'zytheme'),
				'param_name'    => 'button_active',
				'group' => esc_html__("Read More", 'zytheme'),
				'description'   => '',
				'value'         => array( esc_html__('yes', 'zytheme') => 'yes' )
			),

			array(
				'type'        => 'vc_link',
				'class' 			=> "",
				'heading'     =>__("Button Link", 'zytheme'),
				'param_name'  => 'button_link',
				'group' => esc_html__("Read More", 'zytheme'),
			  ),

			  array(
				"type" => "animation_style",
				"class" => "",
				"heading" => __("Animation", 'zytheme'),
				"param_name" => "animation",
				"value" => "",
				'group' => esc_html__("Animation", 'zytheme'),
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

function zy_featured_box( $atts, $content = null ) {

	$output = $featuredboxstyle	= $featured_shadow = $content_alignment = $blocktitle = $icon_type	= $kolaso_icons = $icon_fontawesome = $icon_themify = $description = $extra_class	= $extra_id	= $button_active = $button_link = $animation = $animation_classes = $featured_active = $icon_color = $blocktitle_color = $desc_color = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_featured_module', $atts);
	extract($atts);

	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
		$parse_args = vc_parse_multi_attribute( $button_link );
		$href       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
		$title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'button';
		$target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
	  }

	  switch ($icon_type) {
		case 'kolaso':
			$icon = '<i class="' . $icon_kolaso . '"></i>';
		break;
		case 'themify':
				$icon = '<i class="oi ' . $icon_themify . '"></i>';
				break;

		case 'fontawesome':
				$icon = '<i class="' . $icon_fontawesome . '"></i>';
				break;
		default: 
		$icon = '<i></i>';
	}
	//Icon Color
	(!empty($icon_color)) ? $icon_color = ' style="color:'.$icon_color.';"' : $icon_color ='';

	//Title Color
	(!empty($blocktitle_color)) ? $blocktitle_color = ' style="color:'.$blocktitle_color.';"' : $blocktitle_color ='';


	//Desc Color
	(!empty($desc_color)) ? $desc_color = ' style="color:'.$desc_color.';"' : $desc_color ='';



	// Check Content Alignment
	($content_alignment != 'none') ? $content_alignment= $content_alignment : $content_alignment =''; 
	
	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	($featured_active == 'true') ? $featured_active= ' active' : $featured_active='';

	// Animaton
	if ( '' !== $animation && 'none' !== $animation ):
		wp_enqueue_script( 'waypoints' );
		wp_enqueue_style( 'animate-css' );
		$animation_classes = ' wpb_animate_when_almost_visible wpb_' . $animation . ' ' . $animation;
	endif;

	// ==========================================================================================
	// Module Featured Style
	// ==========================================================================================
	$output .= '<div '.$get_extra_id.' class="zytheme_features features '.$featuredboxstyle.$get_extra_class.$animation_classes.'">';
		$output .= '<div class="feature-panel '.$featured_shadow. $content_alignment . $featured_active . '">';
			$output .= '<div class="feature-icon"'.$icon_color.'>';
				$output .= ''.$icon.'';
			$output .= '</div><!-- .feature-icon end -->';
			$output .= '<div class="feature-content">';
				if($blocktitle):
					$output .= '<h4'.$blocktitle_color.'>'.$blocktitle.'</h4>';
				endif;
				if($description):
					$output .= '<p'.$desc_color.'>'.$description.'</p>';
				endif;
			$output .= '</div><!-- .feature-content end -->';
			if(isset($button_link) && $button_active == 'yes'):
				$output .= '<div class="feature-more">';
					$output .=  '<a href="'.esc_url($href).'" title="'.esc_attr($title).'" target="'.esc_attr($target).'"><i class="fa fa-long-arrow-right"></i><span>'.$title.'</span></a>';
				$output .= '</div><!-- .feature-more end -->';
			endif;
		$output .= '</div>';
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_featured_module", "zy_featured_box");
