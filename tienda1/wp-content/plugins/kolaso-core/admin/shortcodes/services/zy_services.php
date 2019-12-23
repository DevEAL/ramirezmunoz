<?php
/**
 *
 * services Box Style
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// services Box Element
	// ==========================================================================================

	vc_map( array(
		"name" 					=> esc_html__("services Box", 'zytheme'),
		"base" 					=> "zy_services_module",
		"class" 				=> "",
		"category" 			=> esc_html__("Kolaso", 'kolaso'),
		"icon"      		=> "fa fa-circle",
		"description" 	=>esc_html__( 'Bulid Your Layout services Box.','zytheme'),
		"params"				=> array(

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
				'group' => esc_html__("Content", 'zytheme'),
			),

			array(
				"type" => "attach_images",
				"class" => "",
				"heading" => __("Upload Image", 'zytheme'),
				"param_name" => "icon_img",
				"value" => "",
				"description" => __("Select box icon images in this element.", 'zytheme'),
				'group'					=> esc_html__('Content', 'zytheme'),
			),
	


			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Title Text",'zytheme'),
				"description" => esc_html__("Title Block Text",'zytheme'),
				"param_name" => "blocktitle",
				"value" => "",
				'group'					=> esc_html__('Content', 'zytheme'),
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Step",'zytheme'),
				"description" => esc_html__("step before title ex: 01.",'zytheme'),
				"param_name" => "blocktitle_step",
				"value" => "",
				'group'					=> esc_html__('Content', 'zytheme'),
			),

			array(
				"type" => "textarea",
				"class" => "",
				"heading" => __("Content", 'zytheme'),
				"param_name" => "description",
				"value" => "",
				"description" => __("Please, enter content in this element.", 'zytheme'),
				'group'					=> esc_html__('Content', 'zytheme'),
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

function zy_services_box( $atts, $content = null ) {

	$output 	= $services_shadow	= $content_alignment	= $blocktitle	= $icon_img	= $description = $blocktitle_step	= $extra_class	= $extra_id	= $button_active = $button_link = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_services_module', $atts);
	extract($atts);

	$attachment_image 		= wp_get_attachment_image_src($icon_img, 'kolaso_blog_555x370', false);

	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
		$parse_args = vc_parse_multi_attribute( $button_link );
		$href       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
		$title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'button';
		$target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
	  }

	
	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

  // ==========================================================================================
  // Module services Style
  // ==========================================================================================

  $output .= '<div class="kolaso_services services">';
	$output .= '<div class="service-panel '. $content_alignment . '">';
	  	if($attachment_image[0]):
		$output .= '<div class="service-img">';
			$output .= '<img src="'.esc_url($attachment_image[0]).'" alt="'.$blocktitle.'"/>';
		$output .= '</div><!-- .service-img end -->';
		  endif;
		$output .= '<div class="service-content">';
			if($blocktitle):
				$output .= '<h4>';
				($blocktitle_step) ? $output .= '<span>'.$blocktitle_step.'</span>' : '';			
				$output .= $blocktitle;
				$output .= '</h4>';
			endif;
			if($description):
				$output .= '<p>'.$description.'</p>';
			endif;
		$output .= '</div><!-- .service-content end -->';
		if(isset($button_link) && $button_active == 'yes'):
			$output .= '<div class="service-more">';
				$output .=  '<a href="'.esc_url($href).'" title="'.esc_attr($title).'" target="'.esc_attr($target).'"><i class="fa fa-long-arrow-right"></i><span>'.$title.'</span></a>';
			$output .= '</div><!-- .service-more end -->';
		endif;
	$output .= '</div>';
  $output .= '</div>';

	return $output;

}
add_shortcode("zy_services_module", "zy_services_box");
