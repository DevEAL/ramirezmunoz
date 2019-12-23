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
		"name" 					=> esc_html__("Contact Info", 'zytheme'),
		"base" 					=> "zy_contact_module",
		"class" 				=> "",
		"category" 			=> esc_html__("Kolaso", 'kolaso'),
		"icon"      		=> "fa fa-circle",
		"description" 	=>esc_html__( 'Bulid Your get in touch Box.','zytheme'),
		"params"				=> array(

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Content Type",'zytheme'),
				"param_name" => "contact_type",
				"admin_label" => true,
				"value" => array(
					esc_html__("Address Info", 'zytheme') => "address",
					esc_html__("Email Info", 'zytheme') => "email",
					esc_html__("Support Info", 'zytheme') => "support",
					esc_html__("Telephone Info", 'zytheme') => "telephone",
				),
			),


			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Title",'zytheme'),
				"description" => esc_html__("Title Block Text",'zytheme'),
				"param_name" => "contact_title",
				"value" => "",
			),

			array(
				"type" => "textarea",
				"class" => "",
				"heading" => __("Content", 'zytheme'),
				"param_name" => "contact_description",
				"value" => "",
				"description" => __("Please, enter content in this element.", 'zytheme'),
			),
			
			array(
				'type'          => 'checkbox',
				'heading'       => esc_html__('Enable Link To', 'zytheme'),
				'param_name'    => 'button_active',
				'group' => esc_html__("Link To", 'zytheme'),
				'description'   => '',
				'value'         => array( esc_html__('yes', 'zytheme') => 'yes' )
			),

			array(
				'type'        => 'vc_link',
				'class' 			=> "",
				'heading'     =>__("Button Link", 'zytheme'),
				'param_name'  => 'button_link',
				'group' => esc_html__("Link To", 'zytheme'),
			  ),

			  
			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Content Alignment",'zytheme'),
				"param_name" => "contact_alignment",
				"admin_label" => true,
				"value" => array(
					esc_html__("Text Center", 'zytheme') => "text-center",
					esc_html__("Text Right", 'zytheme') => "text-right",
					esc_html__("Text Left", 'zytheme') => "text-left",
				),
				"description" => "This changes the Alignment of the icon box",
				'group' => esc_html__("Style", 'zytheme'),
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

function zy_contact_box( $atts, $content = null ) {

	$output = $contact_type	= $contact_alignment = $contact_title = $contact_description = $button_active = $button_link = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_contact_module', $atts);
	extract($atts);

	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
		$parse_args = vc_parse_multi_attribute( $button_link );
		$href       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
		$title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'button';
		$target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
	  }

	switch ($contact_type) {
		case 'address':
			$icon = '<i class="kolaso-Globe"></i>';
			break;
		case 'email':
			$icon = '<i class="kolaso-Mail"></i>';
			break;
		case 'support':
			$icon = '<i class="kolaso-Support"></i>';
			break;
		case 'telephone':
			$icon = '<i class="Astronaut-Icon"></i>';
			break;
	}
	
	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

  // ==========================================================================================
  // Module Featured Style
  // ==========================================================================================

  $output .= '<div '.$get_extra_id.' class="kolaso_contact contact'.$get_extra_class.'">';
	$output .= '<div class="contact-panel '. $contact_alignment . '">';
		$output .= '<div class="contact-icon">';
			$output .= ''.$icon.'';
		$output .= '</div><!-- .contact-icon end -->';
		$output .= '<div class="contact-content">';
			if($contact_title):
				$output .= '<h4>'.$contact_title.'</h4>';
			endif;
			if($contact_description):
				$output .= '<p>'.$contact_description.'</p>';
			endif;
		$output .= '</div><!-- .contact-content end -->';
		if(isset($button_link) && $button_active == 'yes'):
			$output .= '<div class="contact-more">';
				$output .=  '<a class="btn btn-underlined" href="'.esc_url($href).'" title="'.esc_attr($title).'" target="'.esc_attr($target).'">'.$title.'</a>';
			$output .= '</div><!-- .contact-more end -->';
		endif;
	$output .= '</div>';
  $output .= '</div>';

	return $output;

}
add_shortcode("zy_contact_module", "zy_contact_box");
