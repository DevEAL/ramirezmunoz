<?php
/**
 *
 * banners Box Style
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// banners Box Element
	// ==========================================================================================

	vc_map( array(
		"name" 					=> esc_html__("Banners Images", 'zytheme'),
		"base" 					=> "zy_banners_module",
		"class" 				=> "",
		"category" 			=> esc_html__("Kolaso", 'kolaso'),
		"icon"      		=> "fa fa-circle",
		"description" 	=>esc_html__( 'Bulid Your banners images.','zytheme'),
		"params"				=> array(

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Images Positions",'zytheme'),
				"param_name" => "img_positions",
				"admin_label" => true,
				"value" => array(
					esc_html__("Images Left", 'zytheme') => "position-left",
					esc_html__("Images Right", 'zytheme') => "position-right",
				),
			),

			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Background Color','zytheme'),
				'param_name'		=> 'background',
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Height", 'zytheme'),
				"param_name" => "layer_height",
				"value" => "",
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Border Radius", 'zytheme'),
				"param_name" => "border_radius",
				"value" => "",
			),

			array(
				"type" => "attach_images",
				"class" => "",
				"heading" => __("Upload Image Layer 1", 'zytheme'),
				"param_name" => "img_layer_1",
				"value" => "",
				"description" => __("Select box icon images in this element.", 'zytheme'),
			),

			array(
				"type" => "animation_style",
				"class" => "",
				"heading" => __("Animation Layer 1", 'zytheme'),
				"param_name" => "animation_layer_1",
				"value" => "",
			),

			array(
				"type" => "attach_images",
				"class" => "",
				"heading" => __("Upload Image Layer 2", 'zytheme'),
				"param_name" => "img_layer_2",
				"value" => "",
				"description" => __("Select box icon images in this element.", 'zytheme'),
			),

			array(
				"type" => "animation_style",
				"class" => "",
				"heading" => __("Animation Layer 2", 'zytheme'),
				"param_name" => "animation_layer_2",
				"value" => "",
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('Hidden Centered Layer', 'zytheme'),
				'param_name' => 'hidden_layer',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
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

function zy_banners_images( $atts, $content = null ) {

	$output = $img_positions = $background = $layer_height = $border_radius = $img_layer_1 = $img_layer_2 = $animation_layer_1 = $animation_layer_2 = $hidden_layer = $extra_class = $extra_id	= '';

	$atts = vc_map_get_attributes('zy_banners_module', $atts);
	extract($atts);

	$attachment_layer_1 = wp_get_attachment_image_src($img_layer_1, 'full', false);

	$attachment_layer_2 = wp_get_attachment_image_src($img_layer_2, 'full', false);

	// Custom background
	(!empty($background)) ? $background = 'background-color:'.$background.';"' : $background ='';
	
	//Custom Height
	(!empty($layer_height)) ? $layer_height = 'height:'.$layer_height.';"' : $layer_height ='';

	//Custom Border radius
	(!empty($border_radius)) ? $border_radius = 'border-radius:'.$border_radius.';"' : $border_radius ='';
	
	//Custom background 1
	(!empty($attachment_layer_1)) ? $bg_1 = 'background:url('.esc_url($attachment_layer_1[0]).');' : $bg_1 ='';
	
	//Custom background 2
	(!empty($attachment_layer_2)) ? $bg_2 = 'background:url('.esc_url($attachment_layer_2[0]).');' : $bg_2 ='';
		
	//Hidden Layer 1
	($hidden_layer == 'true')? $hidden_layer = ' layer-hidden' : $hidden_layer ='';

	$style_layer_1 = 'style="'.$background.$layer_height.$border_radius.'"';
	$style_layer_2 = 'style="'.$layer_height.$border_radius.$bg_1.'"';
	$style_layer_3 = 'style="'.$layer_height.$border_radius.$bg_2.'"';

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	// Animaton
	if ( '' !== $animation_layer_1 && 'none' !== $animation_layer_1 ):
		wp_enqueue_script( 'waypoints' );
		wp_enqueue_style( 'animate-css' );
		$animation_layer_1classes = ' wpb_animate_when_almost_visible wpb_' . $animation_layer_1 . ' ' . $animation_layer_1;
	endif;

	if ( '' !== $animation_layer_2 && 'none' !== $animation_layer_2 ):
		wp_enqueue_script( 'waypoints' );
		wp_enqueue_style( 'animate-css' );
		$animation_layer_2classes = ' wpb_animate_when_almost_visible wpb_' . $animation_layer_2 . ' ' . $animation_layer_2;
	endif;

  // ==========================================================================================
  // Module banners Style
  // ==========================================================================================

  $output .= '<div '.$get_extra_id.' class="kolaso_banners'.$get_extra_class.'">';
	$output .= '<div class="banners '.$img_positions.$hidden_layer.'">';
		$output .= '<div class="banner-layer-1" '.$style_layer_1.'></div>';
		if(!empty($attachment_layer_1)):
			$output .= '<div class="banner-layer-2 '.$animation_layer_1classes.'" '.$style_layer_2.'></div>';
		endif;
		if(!empty($attachment_layer_2)):
			$output .= '<div class="banner-layer-3 '.$animation_layer_2classes.'" '.$style_layer_3.'></div>';
		endif;
	$output .= '</div>';
  $output .= '</div>';

	return $output;

}
add_shortcode("zy_banners_module", "zy_banners_images");
