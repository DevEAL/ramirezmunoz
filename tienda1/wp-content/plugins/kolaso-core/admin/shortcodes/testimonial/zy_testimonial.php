<?php
/**
 *
 * Testimonial Elements
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):

	$testimonial_categories = get_terms("testimonial_categories");
	$testimonial_categories_array = array();
	$testimonial_categories_array[__("All Categories", 'zytheme')] = "";
	foreach($testimonial_categories as $testimonial_category) {
		$testimonial_categories_array[$testimonial_category->name] =  $testimonial_category->term_id;
	}
	// ==========================================================================================
	// Testimonial Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Testimonial", 'zytheme'),
		"base" 			=> "zy_testimonial_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-users",
		"description" 	=>esc_html__( 'Testimonial block.','zytheme'),
		"params"		=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Select Layout Template", "zytheme"),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"testimonial-1"		=> array (
						"tooltip"		=> esc_attr__("Style 1", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'testimonial/preview/style-1.jpg',
					),
					"testimonial-2"		=> array (
						"tooltip"		=> esc_attr__("Style 2", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'testimonial/preview/style-2.jpg',
					),
					"testimonial-4"		=> array (
						"tooltip"		=> esc_attr__("Style 3", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'testimonial/preview/style-3.jpg',
					),
				),
				"admin_label" => true,
			),

			//Post Count
			array(
				"type"			=>	"textfield",
				"class"			=>	"",
				"heading"		=>	esc_html__('Testimonial Block Count', 'zytheme'),
				"description"	=>  esc_html__('Enter Post Count', 'zytheme'),
				"param_name"	=>	"postcount",
				'group' => esc_html__("Query", 'zytheme'),
				"value"			=>	"",
			),

			//By Category Select
			array(
				"type" => "dropdown",
				"heading" => esc_html__("By testimonial Category", 'zytheme'),
				"description" => esc_html__("Which categories would you like to show?", 'zytheme'),
				'group' => esc_html__("Query", 'zytheme'),
				"param_name" => "cat",
				"value" => $testimonial_categories_array,
			),

			//Post ID
			array(
				"type"			=>	"textfield",
				"class"			=>	"",
				"heading"		=>	esc_html__('Testimonial ID', 'zytheme'),
				"Description"	=>	esc_html__('Enter Testimonial ID', 'zytheme'),
				'group' => esc_html__("Query", 'zytheme'),
				"param_name"	=>	"postid",
				"value"			=>	"",
			),

			//Carousel Layout

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (Large Device)", 'zytheme'),
				"param_name" => "carousel_lg",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (small Device)", 'zytheme'),
				"param_name" => "carousel_sm",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel speed", 'zytheme'),
				"param_name" => "carousel_speed",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items space", 'zytheme'),
				"param_name" => "carousel_space",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('carousel Autoplay Active', 'zytheme'),
				'param_name' => 'carousel_autoplay',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Carousel Settings', 'zytheme' ),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),
			array(
				'type' => 'toggle_checkbox',
				'heading' => __('carousel nav Active', 'zytheme'),
				'param_name' => 'carousel_nav',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Carousel Settings', 'zytheme' ),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),
			array(
				'type' => 'toggle_checkbox',
				'heading' => __('carousel dots Active', 'zytheme'),
				'param_name' => 'carousel_dots',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Carousel Settings', 'zytheme' ),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),
			array(
				'type' => 'toggle_checkbox',
				'heading' => __('carousel loop Active', 'zytheme'),
				'param_name' => 'carousel_loop',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Carousel Settings', 'zytheme' ),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('carousel Active Centered', 'zytheme'),
				'param_name' => 'carousel_centered',
				'value' => 'false',
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Carousel Settings', 'zytheme' ),
				'dependency'		=> array('element' => 'moduletype', 'value' => array('carousel')),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('Hidden Decoration', 'zytheme'),
				'param_name' => 'hidden_decoration',
				'value' =>false,
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Content Settings', 'zytheme' ),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('Hidden Author Name', 'zytheme'),
				'param_name' => 'hidden_name',
				'value' =>false,
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Content Settings', 'zytheme' ),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('Hidden Author Image', 'zytheme'),
				'param_name' => 'hidden_img',
				'value' =>false,
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Content Settings', 'zytheme' ),
			),

			array(
				'type' => 'toggle_checkbox',
				'heading' => __('Hidden Position', 'zytheme'),
				'param_name' => 'hidden_position',
				'value' =>false,
				'options' => array(
					'true' => array(
							'label' => '',
							'true' => 'Yes',
							'false' => 'No',
						),
					),
				'group'      => esc_attr__( 'Content Settings', 'zytheme' ),
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

function zy_testimonial( $atts, $content = null ) {
	$output = $modulestyle = $postcount = $postid = $cat = $carousel_style = $carousel_sm = $carousel_lg = $carousel_speed = $carousel_space = $carousel_autoplay = $carousel_nav = $carousel_dots = $carousel_loop = $carousel_centered = $hidden_decoration = $hidden_position = $hidden_img = $hidden_name = $extra_class = $extra_id= '';

	$atts = vc_map_get_attributes('zy_testimonial_module', $atts);
	extract($atts);
	
	//Start Count Posts
	( !empty( $atts['postcount'] ) ) ? $postcount = $atts['postcount'] : $postcount = '4' ;

	//Start ID Posts
	if( !empty( $atts['postid'] ) ) :
		$bypostid = $atts['postid'];
		$bypostid = explode( ',', $bypostid );
	else:
		$bypostid = "";
	endif;

	// Carousel has dots
	($carousel_dots=='true') ? $dots_class = " carousel-dots" : $dots_class = "" ;

	// Carousel has nav
	($carousel_nav=='true') ?  $nav_class = " carousel-navs" : $nav_class = "";

	// Carousel items large device
	(!empty($atts['carousel_lg'])) ? $carousel_lg = $atts['carousel_lg'] : $carousel_lg = '1';

	// Carousel items smal device
	(!empty($atts['carousel_sm'])) ? $carousel_sm = $atts['carousel_sm'] : $carousel_sm = '1';

	// Carousel items space
	(!empty($atts['carousel_space'])) ? $carousel_space = $atts['carousel_space'] : $carousel_space = '0';

	// Carousel items centered
	(!empty($atts['carousel_centered'])) ? $carousel_centered = $atts['carousel_centered'] : $carousel_centered = 'false';
	(!empty($atts['carousel_centered']) && $atts['carousel_centered'] == 'true') ? $class_centered = 'testimonial-centered ' : $class_centered = '';

	// Carousel items speed
	(!empty($atts['carousel_speed'])) ? $carousel_speed = $atts['carousel_speed'] : $carousel_speed = '5000';
	
	// Check Block has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Block has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	
	//Start Query Images Clients
	$testimonial_args = array(
		'post__in'							=> $bypostid,
		'post_status'						=> 'publish',
		'posts_per_page' 				=> $postcount,
		'ignore_sticky_posts' 	=> true,
		'post_type' 						=> 'testimonial'
	);

	if (! empty($atts['cat'])) {
		$testimonial_args = wp_parse_args(
			array(
				'tax_query' => array(
				array(
				'taxonomy' => 'testimonial_categories',
				'field' => 'term_id',
				'terms' => $postcat,
				 )
			  ),
			)
		, $testimonial_args );
	}

	// Enqueue Styles and Scripts
	wp_enqueue_script('zyt-owl-carousel' );
	wp_enqueue_style('zyt-owl-carousel');

	$output .= '<div '.$get_extra_id.' class="kolaso_testimonial testimonial '.$class_centered.$modulestyle.''.$get_extra_class.'">';

		$output .= '<div class="carousel owl-carousel '.$dots_class.$nav_class.'"
			data-slide="'.$carousel_lg.'"
			data-slide-rs="'.$carousel_sm.'"
			data-autoplay="'.$carousel_autoplay.'"
			data-nav="'.$carousel_nav.'"
			data-dots="'.$carousel_dots.'"
			data-space="'.$carousel_space.'"
			data-loop="'.$carousel_loop.'"
			data-center="'.$carousel_centered.'"
			data-speed="'.$carousel_speed.'">';

		//Start Query
		$wp_query_args_testimonial = new WP_Query( $testimonial_args );
		while ( $wp_query_args_testimonial->have_posts() ) :
		$wp_query_args_testimonial->the_post();

		global $post;

		$meta_data = get_post_meta( $post->ID, '_meta_testimonial_options', true );

		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size = 'thumbnail' );
		$image = '<img src="' . esc_url( $image_url[0] ) . '" alt="' . the_title_attribute( array( 'echo' => 0) ) . '" />';

			if( strstr( $atts['modulestyle'], "testimonial-1" ) ) :

				// ==========================================================================================
				// Module Testimonial Elements Style1
				// ==========================================================================================

				$output .= '<div class="testimonial-panel">';
					$output .= '<div class="testimonial-body">';
						if($hidden_decoration != true):
						$output .= '<div class="testimonial-icon"></div>';
						$output .= '<div class="testimonial-icon2"></div>';
						endif;
						$output .= '<p>';
							if(isset($meta_data['testimonial-desc'])) $output .= $meta_data['testimonial-desc'];
						$output .= '</p>';
					$output .= ' </div><!-- .testimonial-body end -->';
					$output .= '<div class="testimonial-meta">';
						if($hidden_img != true):
						$output .= ' <div class="testimonial-img">';
							$output .= ''. $image . '';
						$output .= ' </div>';
						endif;
						if($hidden_name != true):
						$output .= ' <h4>'.get_the_title().'</h4>';
						endif;
						if($hidden_position != true):
						$output .= '<p>';
							if(isset($meta_data['testimonial-job'])) $output .= $meta_data['testimonial-job'];
						$output .= '</p>';
						endif;
					$output .= ' </div><!-- .testimonial-meta end -->';
				$output .= ' </div><!-- .testimonial-panel end -->';

				
			elseif( strstr( $atts['modulestyle'], "testimonial-2" ) ) :

				// ==========================================================================================
				// Module Testimonial Elements Style2
				// ==========================================================================================

				$output .= '<div class="testimonial-panel">';
					$output .= '<div class="testimonial-body">';
						if($hidden_decoration != true):
						$output .= '<div class="testimonial-icon"></div>';
						endif;
						$output .= '<p>';
							if(isset($meta_data['testimonial-desc'])) $output .= $meta_data['testimonial-desc'];
						$output .= '</p>';
					$output .= '</div><!-- .testimonial-body end -->';
					$output .= '<div class="testimonial-meta">';
						if($hidden_img != true):
						$output .= '<div class="testimonial-img">';
							$output .= ''. $image . '';
						$output .= '</div>';
						endif;
						if($hidden_name != true):
						$output .= '<h4>'.get_the_title().'</h4>';
						endif;
						if($hidden_position != true):
						$output .= '<p>';
							if(isset($meta_data['testimonial-job'])) $output .= $meta_data['testimonial-job'];
						$output .= '</p>';
						endif;
					$output .= '</div><!-- .testimonial-meta end -->';
				$output .= '</div><!-- .testimonial-panel end -->';

				else:

				// ==========================================================================================
				// Module Testimonial Elements Style3
				// ==========================================================================================

				$output .= '<div class="testimonial-panel">';
					
					if($hidden_decoration != true):
						$output .= '<div class="testimonial-icon"></div>';
					endif;
					$output .= '<div class="testimonial-body">';
						$output .= '<p>';
							if(isset($meta_data['testimonial-desc'])) $output .= $meta_data['testimonial-desc'];
						$output .= '</p>';
						$output .= '<div class="testimonial-meta">';
							if($hidden_img != true):
							$output .= '<div class="testimonial-img">';
								$output .= ''. $image . '';
							$output .= '</div>';
							endif;
							if($hidden_name != true):
							$output .= '<h4>'.get_the_title().'</h4>';
							endif;
							if($hidden_position != true):
							$output .= '<p>';
								if(isset($meta_data['testimonial-job'])) $output .= $meta_data['testimonial-job'];
							$output .= '</p>';
							endif;
						$output .= '</div><!-- .testimonial-meta end -->';
					$output .= '</div><!-- .testimonial-body end -->';
				$output .= '</div><!-- .testimonial-panel end -->';

			endif;

		endwhile;

		wp_reset_postdata();

		$output .= '</div>';
		
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_testimonial_module", "zy_testimonial");
