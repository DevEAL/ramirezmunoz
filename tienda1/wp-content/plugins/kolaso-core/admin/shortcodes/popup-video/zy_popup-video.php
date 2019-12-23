<?php
/**
 *
 * Video Popup Module
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):
	// ==========================================================================================
	// Popup Video Icon Moduel Element
	// ==========================================================================================

	vc_map( array(
		"name" 					=> esc_html__("Popup Video", 'zytheme'),
		"base" 					=> "zy_video_module",
		"class" 				=> "",
		"category" 			=> esc_html__("Kolaso", 'kolaso'),
		"icon"      		=> "fa fa-youtube-play",
		"description" 	=>esc_html__( 'Add Your Popup Video Link.','zytheme'),
		"params"				=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Select Layout Template", 'zytheme'),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"video-1"		=> array (
						"tooltip"		=> esc_attr__("Single Button", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'popup-video/preview/style-1.jpg',
					),
					"video-2"		=> array (
						"tooltip"		=> esc_attr__("Overlay Images Button", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'popup-video/preview/style-2.jpg',
					),
				),
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Player Style",'zytheme'),
				"param_name" => "player_style",
				"admin_label" => true,
				"value" => array(
					esc_html__("Light", 'zytheme') => "player-light",
					esc_html__("Dark", 'zytheme') => "player-dark",
					esc_html__("color", 'zytheme') => "player-theme",
				),
				"group"				=> esc_html__('Player Style', 'zytheme'),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("player Text", 'zytheme'),
				"param_name" => "player_text",
				"value" => "",
				"description" => esc_html__( "Add your player Text.", 'zytheme' ),
				"group"				=> esc_html__('Content', 'zytheme'),
			),
			array(
				'type'        => 'vc_link',
				'class' 			=> "",
				'heading'     =>__("Add Video Link", 'zytheme'),
				'param_name'  => 'video_link',
				"value" 			=> "",
				"description" => __("Please, enter content in this element.", 'zytheme'),
				"group"				=> esc_html__('Content', 'zytheme'),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Extra Class", 'zytheme'),
				"param_name" => "extra_class",
				"value" => "",
				"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Extra Settings", 'zytheme'),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__("Extra ID", 'zytheme'),
				"param_name" => "extra_id",
				"value" => "",
				"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a id name and then refer to it in your css file.", 'zytheme' ),
				'group' => esc_html__("Extra Settings", 'zytheme'),
			),
		),
	));

endif;

function zy_video_popup( $atts, $content = null ) {
	$output = $modulestyle = $player_style  = $video_link = $player_text = $extra_class = $extra_id= '';

	$atts = vc_map_get_attributes('zy_video_module', $atts);
	extract($atts);

	if ( function_exists( 'vc_parse_multi_attribute' ) ) {
    $parse_args = vc_parse_multi_attribute( $video_link );
    $href       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
    $title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'View Demo Video';
    $target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
  }


  // Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';


	// Enqueue Styles and Scripts
	wp_enqueue_script('zyt-magnific' );
	wp_enqueue_style('zyt-magnific');

	// ==========================================================================================
  // Player Style
  // ==========================================================================================
	
	$output .= '<div '.$get_extra_id.' class="kolaso_video'.$get_extra_class.'">';
		$output .= '<div id="video-player" class="video-button '.$modulestyle.' '.$player_style.'">';
			$output .= '<a class="popup-video" href="'.$href.'">';
				$output .= '<span class="btn--animation"></span>';
				$output .= '<i class="kolaso-Play-Icon"></i>';
				if($player_text && $modulestyle != 'video-2'):
				$output .= '<h6>'.$player_text.'</h6>';
				endif;
			$output .= '</a>';
		$output .= '</div>';
	$output .= '</div>';
	
	
	
	
	// 	if ($atts['modulestyle']=='single-button') {

	// 	$output .= '<div id="video-player" class="video-player player-bg '.$content_alignment .' '.$player_background_class . $player_position_class .'">';
	// 		if ($player_position == 'player_above' ):
	// 			$output .= $player_content;
	// 			$output .= '<div class="video-content">';
	// 				if(!empty ($heading_txt)) $output .= '<h3>'.$heading_txt.'</h3>';
	// 				if(!empty ($heading_desc)) $output .= '<p>'.$heading_desc.'</p>';
	// 			$output .= '</div>';
	// 		elseif($player_position == 'player_bellow'):
	// 			$output .= '<div class="video-content">';
	// 				if(!empty ($heading_txt)) $output .= '<h3>'.$heading_txt.'</h3>';
	// 				if(!empty ($heading_desc)) $output .= '<p>'.$heading_desc.'</p>';
	// 			$output .= '</div>';
	// 			$output .= $player_content;
	// 		elseif($player_position == 'player_inline'):
	// 			$output .= '<div class="video-content">';
	// 				if(!empty ($heading_txt)) $output .= '<h3>'.$heading_txt.'</h3>';
	// 				if(!empty ($heading_desc)) $output .= '<p>'.$heading_desc.'</p>';
	// 			$output .= '</div>';
	// 			$output .= $player_content;
	// 		else:
	// 			$output .= $player_content;
	// 			$output .= '<div class="video-content">';
	// 				if(!empty ($heading_txt)) $output .= '<h3>'.$heading_txt.'</h3>';
	// 				if(!empty ($heading_desc)) $output .= '<p>'.$heading_desc.'</p>';
	// 			$output .= '</div>';				
	// 		endif;
		
	// 	$output .= '</div>';
	// } else {
	// 	$output .= '<div id="video-player" class="video-player video-player-overlay">';
	// 		$output .= '<img class="img-fluid" src="'.esc_url($attachment_image[0]).'" alt=""/>';
	// 		$output .= $player_content;
	// 	$output .= '</div>';
	// }
	return $output;

}
add_shortcode("zy_video_module", "zy_video_popup");
