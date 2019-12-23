<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 *
 * Pricing Elements
 * @since 1.0.0
 * @version 1.0.0
 * Shortcode attributes
 * @var $atts
 * @var $content - shortcode content
 * @var $this WPBakeryShortCode_VC_Accordion
 */
// ==========================================================================================
	// pricing Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Pricing", 'zytheme'),
		"base" 			=> "zy_pricing_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-credit-card",
		"description" 	=>esc_html__( 'Pricing Block.','zytheme'),
		"params"		=> array(

			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Select Layout Template", 'zytheme'),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"pricing-1"		=> array (
						"tooltip"		=> esc_attr__("Style 1", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'pricing/preview/style-1.jpg',
					),
					"pricing-2"		=> array (
						"tooltip"		=> esc_attr__("Style 2", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'pricing/preview/style-2.jpg',
					),
				),
				"admin_label" => true,
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
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Pricing Title", 'zytheme'),
				"param_name" => "price_title",
				"value" => "",
				'group' => esc_html__("Header", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Pricing subTitle", 'zytheme'),
				"param_name" => "price_subtitle",
				"value" => "",
				'group' => esc_html__("Header", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Pricing Percent", 'zytheme'),
				"param_name" => "price_percent",
				"value" => "",
				'group' => esc_html__("Header", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Pricing Symbol", 'zytheme'),
				"param_name" => "price_symbol",
				"value" => "",
				'group' => esc_html__("Header", 'zytheme'),
			),

			array(
				'type' => 'textfield',
				"class" => "",
				"heading" => __("Pricing Period", 'zytheme'),
				"param_name" => "price_period",
				"value" => "",
				'group' => esc_html__("Header", 'zytheme'),
			),
			array(
				'type' => 'param_group',
				'heading' => __( 'Lists', 'zytheme' ),
				'param_name' => 'list_fields',
				'description' => __( 'Add your list content.', 'zytheme' ),
				'group' => esc_html__("Content", 'zytheme'),
				'value' => urlencode( json_encode( array(
					array(
						'label' => __( 'Content', 'zytheme' ),
						'text_content' => 'Enter list content here',
					),
					array(
						'label' => __( 'Content', 'zytheme' ),
						'text_content' => 'Enter list content here',
					),
					array(
						'label' => __( 'Content', 'zytheme' ),
						'text_content' => 'Enter list content here',
					),
				) ) ),
				'params' => array(
					array(
						'type' => 'textarea',
						'heading' => __( 'List Content', 'zytheme' ),
						'param_name' => 'text_content',
						'description' => __( 'Enter value of bar.', 'zytheme' ),
						'admin_label' => true,
					),
				),
			),

			array(
			'type'        => 'vc_link',
			'class' 			=> "",
			'heading'     =>__("Button Link", 'zytheme'),
			'param_name'  => 'button_link',
					"value" 			=> "",
					"description" => __("Please, enter content in this element.", 'zytheme'),
					'group'					=> esc_html__('Footer', 'zytheme'),
			),

			array(
                'type' => 'dropdown',
                "heading" => esc_html__('Select Button style', 'zytheme'),
                'param_name' => 'button_style',
                "value" => array(
                    esc_html__("Button Default", 'zytheme') => "btn-default",
                    esc_html__("Button Primary", 'zytheme') => "btn-primary",
                    esc_html__("Button Primary Outline", 'zytheme') => "btn-primary-outline",
                    esc_html__("Button Primary + Hover Light", 'zytheme') => "btn-primary-hover-light",
                    esc_html__("Button Primary + Hover Dark", 'zytheme') => "btn-primary-hover-dark",
                    esc_html__("Button Secondary", 'zytheme') => "btn-secondary",
                    esc_html__("Button Secondary Outline", 'zytheme') => "btn-secondary-outline",
                    esc_html__("Button Secondary + Hover Light", 'zytheme') => "btn-secondary-hover-light",
                    esc_html__("Button Secondary + Hover Primary", 'zytheme') => "btn-secondary-hover-primary",
                    esc_html__("Button White", 'zytheme') => "btn-white",
                    esc_html__("Button White Outline", 'zytheme') => "btn-white-outline",
                    esc_html__("Button White + Hover Dark", 'zytheme') => "btn-white-hover-dark",
                    esc_html__("Button White + Hover Primary", 'zytheme') => "btn-white-hover-primary",
				),
                'group' => esc_html__("Footer", 'zytheme'),
            ),

			array(
                'type' => 'dropdown',
                "heading" => esc_html__('Select Button Shapes', 'zytheme'),
                'param_name' => 'button_shape',
                "value" => array(
					esc_html__("Button Rounded", 'zytheme') => "btn-rounded",
                    esc_html__("Button Default", 'zytheme') => "btn-default",
                    esc_html__("Button Normal", 'zytheme') => "btn-square",
                    esc_html__("Button Circle", 'zytheme') => "btn-circle",
                ),
				'std' => 'btn-rounded',
				'group'					=> esc_html__('Footer', 'zytheme'),
			),
			
			array(
                'type' => 'dropdown',
                "heading" => esc_html__('Button Shadow', 'zytheme'),
                'param_name' => 'button_shadow',
                "value" => array(
                    esc_html__("No Shadow", 'zytheme') => "btn-normal",
                    esc_html__("Shadow", 'zytheme') => "btn-shadow",
                    esc_html__("Shadow in Hover Only", 'zytheme') => "btn-hover-shadow",
				),
                'group' => esc_html__("Footer", 'zytheme'),
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
		)

	));


function zy_pricing( $atts, $content = null ) {

	$output = $modulestyle = $featured_active = $price_title = $price_subtitle = $price_percent = $button_style = $button_shadow = $button_shape = $button_link = $price_symbol = $price_period = $list_fields = $animation = $animation_classes = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_pricing_module', $atts);
	extract($atts);

	if($featured_active == 'true') :
		$featured_active = ' pricing-active';
		$btn_class = ' btn-primary';

	else:
		$featured_active = '';
		$btn_class = ' btn-primary btn-outline';
	endif;

	// Check Button Style
    switch ($button_style) {
        case 'btn-primary-outline':
            $button_style = ' btn-primary btn-outline';
            break;
        case 'btn-primary-hover-light':
            $button_style = ' btn-primary btn-hover-light';
            break;
        case 'btn-primary-hover-dark':
            $button_style = ' btn-primary btn-hover-dark';
            break;
        case 'btn-secondary':
            $button_style = ' btn-secondary';
            break;
        case 'btn-secondary-outline':
            $button_style = ' btn-secondary btn-outline';
            break;
        case 'btn-secondary-hover-light':
            $button_style = ' btn-secondary btn-hover-light';
            break;
        case 'btn-secondary-hover-primary':
            $button_style = ' btn-secondary btn-hover-primary';
            break;
        case 'btn-white':
            $button_style = ' btn-white';
            break;
        case 'btn-white-outline':
            $button_style = ' btn-white btn-outline';
            break;
        case 'btn-white-hover-dark':
            $button_style = ' btn-white btn-hover-dark';
            break;
        case 'btn-white-hover-primary':
            $button_style = ' btn-white btn-hover-primary';
            break;
        default:
            $button_style = ' btn-primary';
            break;
	}

	// Check Button shadow
    ($button_shadow !='btn-normal') ? $button_shadow = ' ' . $atts['button_shadow'] : $button_shadow ='';


	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
		$parse_args = vc_parse_multi_attribute( $button_link );
		$href       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
		$title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'Get started';
		$target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
	}

	$list_fields = (array) vc_param_group_parse_atts( $list_fields );

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	// Check Pricing Style
	if(empty($modulestyle)) $modulestyle ='pricing-1';

	// Check Pricing Style
	if(!empty($button_shape)) $button_shape =' '. $button_shape;

	// Animaton
	if ( '' !== $animation && 'none' !== $animation ):
		wp_enqueue_script( 'waypoints' );
		wp_enqueue_style( 'animate-css' );
		$animation_classes = ' wpb_animate_when_almost_visible wpb_' . $animation . ' ' . $animation;
	endif;


 // ==========================================================================================
  // Module Pricing Style
  // ==========================================================================================

	$output .= '<div '.$get_extra_id.' class="kolaso_pricing pricing '.$modulestyle.$get_extra_class.$animation_classes.'">';
		$output .= '<div class="price-table">';
			$output .= '<div class="pricing-panel'.$featured_active.'">';
				$output .= '<div class="pricing-heading">';
					$output .= '<h4>'.$price_title.'</h4>';
					if($price_subtitle):
					$output .= '<div class="pricing-desc">'.$price_subtitle.'</div>';
					endif;
					$output .= '<p>';
						$output .= '<span class="currency">'.$price_symbol.'</span>'.$price_percent;
						if($price_period):
							$output .= '<span class="time"> / '.$price_period.'</span>';
						endif;
					$output .= '</p>';
				$output .= '</div>';
				$output .= '<!--  Pricing heading  -->';
				$output .= '<div class="pricing-body">';
					$output .= '<ul class="pricing-list list-unstyled">';
						foreach($list_fields as $fields) {
							$output .= '<li>'.$fields['text_content'].'</li>';
						}
					$output .= '</ul>';
				$output .= '</div>';
				$output .= '<div class="pricing-footer">';
					$output .= '<a href="'.esc_url($href).'" title="'.esc_attr($title).'" target="'.esc_attr($target).'" class="btn '.$button_style.$button_shadow .$btn_class.$button_shape.'">'.esc_html($title).'</a>';
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div><!-- .pricing-table End -->';
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_pricing_module", "zy_pricing");
