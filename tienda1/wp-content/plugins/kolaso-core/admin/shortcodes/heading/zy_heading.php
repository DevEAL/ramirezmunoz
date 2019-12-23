<?php
/**
 *
 * Heading Style
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Heading Element
	// ==========================================================================================

	vc_map( array(
		"name" 					=> esc_html__("Heading", 'zytheme'),
		"base" 					=> "zy_heading_module",
		"class" 				=> "",
		"category" 			=> esc_html__("Kolaso", 'zytheme'),
		"icon"      		=> "fa fa-text-height",
		"description" 	=>esc_html__( 'Bulid Heading Section.','zytheme'),
		"params"				=> array(
			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Heading Style",'zytheme'),
				"param_name" => "stylecolor",
				"admin_label" => true,
				"value" => array(
					esc_html__("Default", 'zytheme') => "text-default",
					esc_html__("Dark", 'zytheme') => "text-dark",
					esc_html__("Light", 'zytheme') => "text-light",
				),
			),

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Heading Layout",'zytheme'),
				"param_name" => "layout",
				"admin_label" => true,
				"value" => array(
					esc_html__("Heading 1", 'zytheme') => "heading-1",
					esc_html__("Heading 2", 'zytheme') => "heading-2",
					esc_html__("Heading 3", 'zytheme') => "heading-3",
					esc_html__("Heading 4", 'zytheme') => "heading-4",
				),
			),
			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Heading Alignment",'zytheme'),
				"param_name" => "content_alignment",
				"admin_label" => true,
				"value" => array(
					esc_html__("Text Center", 'zytheme') => "text-center",
					esc_html__("Text Right", 'zytheme') => "text-right",
					esc_html__("Text Left", 'zytheme') => "text-left",
				),
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("SubTitle Text",'zytheme'),
				"param_name" => "subtitle_text",
				"value" => "",
				'group'	=> esc_html__('Sub Title', 'zytheme'),
			),

			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Subtitle Color','zytheme'),
				'param_name'		=> 'subtitle_color',
				'group'	=> esc_html__('Sub Title', 'zytheme'),
			),

			array(
				'type' => 'dropdown',
				'heading' =>  esc_html__('Subtitle - Text Transform','zytheme'),
				'param_name' => 'subtitle_transform',
				'value' => array(
					esc_html__('Default', 'zytheme') => 'default',
					esc_html__('Uppercase', 'zytheme') => 'uppercase',
					esc_html__('Lowercase', 'zytheme') => 'lowercase',
					esc_html__('Capitalize', 'zytheme') => 'capitalize',
				),
				'group'	=> esc_html__('Sub Title', 'zytheme'),
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("SubTitle - Font Size",'zytheme'),
				"param_name" => "subtitle_size",
				"value" => "",
				'group'	=> esc_html__('Sub Title', 'zytheme'),
				"description" => "Add Font size with unit ex: 18px",
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Title Text",'zytheme'),
				"description" => esc_html__("Title Block Text",'zytheme'),
				"param_name" => "title_text",
				"value" => "",
				'group'	=> esc_html__('Title', 'zytheme'),
			),

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Heading Element Tag",'zytheme'),
				"param_name" => "element_tag",
				"admin_label" => true,
				"value" => array(
					esc_html__("H1", 'zytheme') => "h1",
					esc_html__("H2", 'zytheme') => "h2",
					esc_html__("H3", 'zytheme') => "h3",
					esc_html__("H4", 'zytheme') => "h4",
					esc_html__("H5", 'zytheme') => "h5",
					esc_html__("H6", 'zytheme') => "h6",
				),
				'std'         => 'h2',
				"description" => "This changes the Element Tag of the Heading",
				'group'	=> esc_html__('Title', 'zytheme'),
			),		

			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('title Color','zytheme'),
				'param_name'		=> 'title_color',
				'group'	=> esc_html__('Title', 'zytheme'),
			),

			array(
				'type' => 'dropdown',
				'heading' =>  esc_html__('title - Text Transform','zytheme'),
				'param_name' => 'title_transform',
				'value' => array(
					esc_html__('Default', 'zytheme') => 'default',
					esc_html__('Uppercase', 'zytheme') => 'uppercase',
					esc_html__('Lowercase', 'zytheme') => 'lowercase',
					esc_html__('Capitalize', 'zytheme') => 'capitalize',
				),
				'group'	=> esc_html__('Title', 'zytheme'),
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Title - Font Size",'zytheme'),
				"param_name" => "title_size",
				"value" => "",
				'group'	=> esc_html__('Title', 'zytheme'),
				"description" => "Add Font size with unit ex: 18px",
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Title - Line Height",'zytheme'),
				"param_name" => "title_lineheight",
				"value" => "",
				'group'	=> esc_html__('Title', 'zytheme'),
				"description" => "Add Line Height with unit ex: 28px",
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Title - Letter Spacing",'zytheme'),
				"param_name" => "title_spacing",
				"value" => "",
				'group'	=> esc_html__('Title', 'zytheme'),
				"description" => "Add Letter Spacing with unit ex: 2px",
			),

			array(
				'type' => 'dropdown',
				'heading' =>  esc_html__('title - Font Weight','zytheme'),
				'param_name' => 'title_weight',
				'value' => array(
					esc_html__('Default', 'zytheme') => 'default',
					esc_html__('ExtraBold', 'zytheme') => '800',
					esc_html__('Bold', 'zytheme') => '700',
					esc_html__('SemiBold', 'zytheme') => '600',
					esc_html__('Medium', 'zytheme') => '500',
					esc_html__('Normal', 'zytheme') => '400',
					esc_html__('Light', 'zytheme') => '300',
				),
				'group'	=> esc_html__('Title', 'zytheme'),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('Active Custom Google Font', 'zytheme'),
				'param_name' => 'custom_heading_font',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Title', 'zytheme' ),
				
			),

			array(
                'type' => 'google_fonts',
                'param_name' => 'title_font',
                'settings' => array(
                    'fields' => array(
                        'font_family_description' => __( 'Select Font Family.', 'zytheme' ),
                        'font_style_description' => __( 'Select Font Style.', 'zytheme' ),
                    ),
                ), 
                'weight' => 0,
				'group'	=> esc_html__('Title', 'zytheme'),    
				'dependency' => Array('element' => "custom_heading_font", 'value' => 'true')               
            ),   

			array(
				"type" => "textarea",
				"class" => "",
				"heading" => __("Content", 'zytheme'),
				"param_name" => "content_text",
				"value" => "",
				"description" => __("Please, enter content in this element.", 'zytheme'),
				'group'					=> esc_html__('Description', 'zytheme'),
			),

			array(
				'type'				=> 'colorpicker',
				'heading' =>  esc_html__('Content Color','zytheme'),
				'param_name'		=> 'content_color',
				'group'	=> esc_html__('Description', 'zytheme'),
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Content - Font Size",'zytheme'),
				"param_name" => "content_size",
				"value" => "",
				'group'	=> esc_html__('Description', 'zytheme'),
				"description" => "Add Font size with unit ex: 18px",
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Content - Line Height",'zytheme'),
				"param_name" => "content_lineheight",
				"value" => "",
				'group'	=> esc_html__('Description', 'zytheme'),
				"description" => "Add Line Height with unit ex: 28px",
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

function zy_heading( $atts, $content = null ) {


	$output = $style_class = $layout_class = $content_alignment = $element_tag = $title_text = $font_family = $custom_heading_font = $title_font = $subtitle_text = $subtitle_color = $subtitle_transform = $subtitle_size = $subtitle_custom_style = $title_custom_style = $title_color = $title_transform = $title_size = $title_lineheight = $title_spacing = $title_weight = $content_text = $content_color = $content_size = $content_lineheight = $content_custom_style = $extra_class = $extra_id = $animation = $animation_classes = '';

	$atts = vc_map_get_attributes('zy_heading_module', $atts);
	extract($atts);

	/*
	* Google Csutom Font
	*/

	 // Build the string of values in an Array
	 if (!function_exists('zy_getFontsData'))   {

			function zy_getFontsData( $fontsString ) {   
		
			// Font data Extraction
			$googleFontsParam = new Vc_Google_Fonts();      
			$fieldSettings = array();
			$fontsData = strlen( $fontsString ) > 0 ? $googleFontsParam->_vc_google_fonts_parse_attributes( $fieldSettings, $fontsString ) : '';
			return $fontsData;		
		}
	}
		
   if (!function_exists('googleFontsStyles'))   {
	   function googleFontsStyles( $fontsData ) {
			
		if (isset($fontsData) && $fontsData != ''){
			// Inline styles
			$fontFamily = explode( ':', $fontsData['values']['font_family'] );
			$styles[] = 'font-family:' . $fontFamily[0];
			$fontStyles = explode( ':', $fontsData['values']['font_style'] );
			$styles[] = 'font-weight:' . $fontStyles[1];
			$styles[] = 'font-style:' . $fontStyles[2];
			
			$inline_style = '';     
			foreach( $styles as $attribute ){           
				$inline_style .= $attribute.'; ';       
			}   
			
			return $inline_style;
			
			}
		}   
   }
		
	// Enqueue right google font from Googleapis
	if (!function_exists('enqueueGoogleFonts'))   {
	   function enqueueGoogleFonts( $fontsData ) {
			
		   // Get extra subsets for settings (latin/cyrillic/etc)
		   $settings = get_option( 'wpb_js_google_fonts_subsets' );
		   if ( is_array( $settings ) && ! empty( $settings ) ) {
			   $subsets = '&subset=' . implode( ',', $settings );
		   } else {
			   $subsets = '';
		   }
			
		   // We also need to enqueue font from googleapis
		   if ( isset( $fontsData['values']['font_family'] ) ) {
			   wp_enqueue_style( 
				   'vc_google_fonts_' . vc_build_safe_css_class( $fontsData['values']['font_family'] ), 
				   '//fonts.googleapis.com/css?family=' . $fontsData['values']['font_family'] . $subsets
			   );
		   }	
	   }
   	}

	if($custom_heading_font == true):

		$text_font_data = zy_getFontsData( $title_font );
		
		$text_font_inline_style = googleFontsStyles( $text_font_data );   
				 
	   enqueueGoogleFonts( $text_font_data );

	   $font_family = $text_font_inline_style;
		
	endif;

	//Check Heading has Style
	( $atts['stylecolor'] && $atts['stylecolor'] != 'text-default' ) ? $style_class = ' ' . $atts['stylecolor'] : $style_class = '';
	
	// Custom Subtitle Heading Style
	(! empty ($subtitle_color)) ? $subtitle_color = 'color:'.$subtitle_color.';' : $subtitle_color = '' ;
	( $atts['subtitle_transform'] && $atts['subtitle_transform'] != 'default' ) ? $subtitle_transform = 'text-transform:' . $atts['subtitle_transform'].';' : $subtitle_transform = '';
	(! empty ($subtitle_size)) ? $subtitle_size = 'font-size:'.$subtitle_size.';' : $subtitle_size = '' ;

	if(isset($subtitle_color) || isset($subtitle_transform) || isset($subtitle_size)):
		$subtitle_custom_style = 'style="' .$subtitle_color .$subtitle_transform .$subtitle_size .'"' ;
	endif;


	// Custom Title Heading Style
	(! empty ($title_color)) ? $title_color = 'color:'.$title_color.';' : $title_color = '' ;
	( $atts['title_transform'] && $atts['title_transform'] != 'default' ) ? $title_transform = 'text-transform:' . $atts['title_transform'].';' : $title_transform = '';
	(! empty ($title_size)) ? $title_size = 'font-size:'.$title_size.';' : $title_size = '' ;

	(! empty ($title_lineheight)) ? $title_lineheight = 'line-height:'.$title_lineheight.';' : $title_lineheight = '' ;
	(! empty ($title_spacing)) ? $title_spacing = 'letter-spacing:'.$title_spacing.';' : $title_spacing = '' ;

	( $atts['title_weight'] && $atts['title_weight'] != 'default' ) ? $title_weight = 'font-weight:' . $atts['title_weight'].';' : $title_weight = '';

	if(isset($title_color) || isset($title_transform) || isset($title_size) || isset($title_lineheight) || isset($font_family) || isset($title_spacing) || 
	isset($title_weight) ):
		$title_custom_style = 'style="'.$font_family .$title_color .$title_transform .$title_size . $title_lineheight. $title_spacing . $title_weight.'"' ;
	endif;


	// Custom Description Heading Style
	(! empty ($content_color)) ? $content_color = 'color:'.$content_color.';' : $content_color = '' ;
	(! empty ($content_size)) ? $content_size = 'font-size:'.$content_size.';' : $content_size = '' ;

	(! empty ($content_lineheight)) ? $content_lineheight = 'line-height:'.$content_lineheight.';' : $content_lineheight = '' ;


	if(isset($content_color) || isset($content_size) || isset($content_lineheight)):
		$content_custom_style = 'style="'.$content_color .$content_size . $content_lineheight.'"' ;
	endif;


	//Check Heading has Layout
	( $atts['layout'] ) ? $layout_class = ' ' . $atts['layout'] : $layout_class = '' ;

	//Check Heading has Alignment
	( $atts['content_alignment'] ) ? $content_alignment = ' ' . $atts['content_alignment'] :$content_alignment = '' ;

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';


	// Animaton
	if ( '' !== $animation && 'none' !== $animation ):
		wp_enqueue_script( 'waypoints' );
		wp_enqueue_style( 'animate-css' );
		$animation_classes = ' wpb_animate_when_almost_visible wpb_' . $animation . ' ' . $animation;
	endif;

  // ==========================================================================================
  // Module Heading Style
  // ==========================================================================================
	
	$output .= '<div '.$get_extra_id.' class="kolaso_heading'.$get_extra_class.$animation_classes.'">';
	$output .= '<div class="heading '.$content_alignment .$style_class . $layout_class .'">';
		if($subtitle_text):
			$output .= '<div class="heading-subtitle" '.$subtitle_custom_style.'>'.$subtitle_text.'</div> ';
		endif;
		$output .= '<'.$element_tag.' class="heading-title" '.$title_custom_style.'>'.$title_text.'</'.$element_tag.'>';
		if($atts['content_text']):
			$output .= '<div class="heading-desc" '. $content_custom_style .'>'.$atts['content_text'].'</div> ';
		endif;
	$output .= '</div>';

	$output .= '</div>';
	return $output;

}
add_shortcode("zy_heading_module", "zy_heading");
