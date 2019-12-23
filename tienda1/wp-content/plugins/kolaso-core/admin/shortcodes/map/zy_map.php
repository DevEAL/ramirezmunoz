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
	// Location Map Blocks Style
	// ==========================================================================================
	vc_map( array(
		"name"            => 'Location Map',
		'base'            => 'zy_maps_module',
		  "category" 		=> esc_html__("Kolaso", 'kolaso'),
		'icon'            => 'fa fa-map',
		'description'     => 'Location Map content',
		'params'          => array(

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Map Type",'zytheme'),
				"param_name" => "map_type",
				"admin_label" => true,
				"value" => array(
					esc_html__("Google Map Embed", 'zytheme') => "map-embed",
					esc_html__("Google Map API", 'zytheme') => "map-api",
				),
			),

			array(
				"type" => "textarea",
				"class" => "",
				"heading" => __("map embed iframe", 'zytheme'),
				"param_name" => "map_embed",
				"value" => "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051\" width=\"100%\" height=\"628\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>",
				"description" => __ ( "Visit <a href=\"https://www.google.com/maps\" target=\"_blank\">Google maps</a> to create your map (Step by step: 1) Find location 2) Click the cog symbol in the lower right corner and select \"Share or embed map\" 3) On modal window select \"Embed map\" 4) Copy iframe code and paste it).", 'zytheme' ),
				'dependency'		=> array('element' => 'map_type', 'value' => array('map-embed')),
			),

			array(
					  'type' => 'textfield',
					  'heading' => __('Enter Google Map API', 'zytheme'),
					  'param_name' => 'map_api_key',
					  "description" => __ ( "Visit <a href=\"https://cloud.google.com/maps-platform/#get-started\" target=\"_blank\">Google Maps Platform</a> to enable your map APIs", 'zytheme' ),
					  'admin_label' => true,
					  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  array(
					  'type' => 'checkbox',
					  'param_name' => 'enable_custom_size',
					  'value' => array(__('Add a custom map size', 'zytheme') => 'yes'),
					  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  array(
					  'type' => 'textfield',
					  'heading' => __('Width (e.g. 300px)', 'zytheme'),
					  'param_name' => 'map_width',
					  'admin_label' => true,
					  'dependency' => array(
							  'element' => 'enable_custom_size',
							  'value' => 'yes',
					  ),
					  'edit_field_class' => 'vc_col-sm-6',
			  ),
			  array(
					  'type' => 'textfield',
					  'heading' => __('Height (e.g. 300px)', 'zytheme'),
					  'param_name' => 'map_height',
					  'admin_label' => true,
					  'dependency' => array(
							  'element' => 'enable_custom_size',
							  'value' => 'yes',
					  ),
					  'edit_field_class' => 'vc_col-sm-6',
			  ),
			  array(
				  "type" => "attach_image",
				  "class" => "",
				  "heading" => __("Upload Map Marker", 'zytheme'),
				  "param_name" => "map_marker",
				  "value" => "",
				  "description" => __("Select box icon images in this element.", 'zytheme'),
				  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  array(
					  'type' => 'textfield',
					  'heading' => __('Enter a marker title', 'zytheme'),
					  'param_name' => 'address_title',
					  'admin_label' => true,
					  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  array(
					  'type' => 'textfield',
					  'heading' => __('Address', 'zytheme'),
					  'param_name' => 'map_address',
					  'admin_label' => true,
					  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  array(
					  'type' => 'textfield',
					  'heading' => __('latitude Position', 'zytheme'),
					  'param_name' => 'map_latitude',
					  'admin_label' => true,
					  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  array(
					  'type' => 'textfield',
					  'heading' => __('longitude Position', 'zytheme'),
					  'param_name' => 'map_longitude',
					  'admin_label' => true,
					  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  array(
					  'type' => 'number',
					  'heading' => __('Map Zoom', 'zytheme'),
					  'param_name' => 'map_zoom',
					  'admin_label' => true,
					  'dependency'		=> array('element' => 'map_type', 'value' => array('map-api')),
			  ),
			  // array(
			  // 		'type' => 'textfield',
			  // 		'heading' => __('City', 'zytheme'),
			  // 		'param_name' => 'city',
			  // 		'admin_label' => true,
			  // ),
			  // array(
			  // 		'type' => 'textfield',
			  // 		'heading' => __('State', 'zytheme'),
			  // 		'param_name' => 'state',
			  // 		'admin_label' => true,
			  // ),
			  // array(
			  // 		'type' => 'textfield',
			  // 		'heading' => __('ZIP Code', 'zytheme'),
			  // 		'param_name' => 'zip',
			  // 		'admin_label' => true,
			  // ),
			  // array(
			  // 		'type' => 'textfield',
			  // 		'heading' => __('Country', 'zytheme'),
			  // 		'param_name' => 'country',
			  // 		'admin_label' => true,
			  // ),
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
	  ) );
endif;

function zy_maps( $atts, $content = null ) {
	$output = $map_type = $map_embed = $map_api_key = $map_width = $map_height = $map_zoom = $map_marker = $map_latitude = $map_longitude = $map_address = $icon_marker  = $extra_id = $extra_class = '';

	$atts = vc_map_get_attributes('zy_maps_module', $atts);
	extract($atts);

	if($map_marker):
		$map_marker = wp_get_attachment_image_src($map_markers, "full");
		$map_marker_url = ''. $map_marker[0].'';
	else:
		$map_marker_url = get_stylesheet_directory_uri().'/assets/images/gmap/maker.png';
	endif;

	if(empty($map_width)) $map_width = '100%';

	if(empty($map_height)) $map_height = '628px';

	if(empty($map_zoom)) $map_zoom = '12';

	if(empty($map_api_key)) $map_api_key = 'AIzaSyDfEfjWUEFVcQK9Uo-CsK88phDPYklqdGk';// Development Key
	//'AIzaSyDAwEWneXb76ONN48ZHCcwGew6Ai0V_9Cg'; // Development Key

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';
		
	// ==========================================================================================
  // Module Map Style
  // ==========================================================================================
	
	if($map_type == 'map-embed'):

		$output .= '<div '.$get_extra_id.' class="kolaso_maps'.$get_extra_class.'">';
		
			if($map_embed) $output .= $map_embed;

		$output .= '</div>';

	elseif($map_type == 'map-api'):

	// Enqueue Styles and Scripts
	wp_enqueue_script('zyt-gmap' );

		$output .= '<div '.$get_extra_id.' class="kolaso_maps'.$get_extra_class.'">';
			$output .= '<script src="http://maps.google.com/maps/api/js?key='.$map_api_key.'"></script>';
			$output .= '<div 
							id="googleMap"
							class="googleMap"
							data-map-address="'.$map_address.'"
							data-map-latitude="'.$map_latitude.'"
							data-map-longitude="'.$map_longitude.'"
							data-map-zoom="'.$map_zoom.'"
							data-map-maker-icon="'.$map_marker_url.'"
							data-map-type="ROADMAP"
							data-map-info="Kolaso<br>support@zytheme.com"
							style="width:'.$map_width.';height:'.$map_height.';"
						>
						</div>';
		$output .= '</div>';

	endif;
	

	return $output;

}
add_shortcode("zy_maps_module", "zy_maps");
