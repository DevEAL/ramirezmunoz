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
		"name" 			=> esc_html__("Testimonial Slider", 'zytheme'),
		"base" 			=> "zy_testimonial_slider_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-users",
		"description" 	=>esc_html__( 'Testimonial last 3 items.','zytheme'),
		"params"		=> array(


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

function zy_testimonial_slider( $atts, $content = null ) {
	$output = $postcount = $postid = $cat = $carousel_style = $carousel_sm = $carousel_lg = $carousel_speed = $carousel_space = $carousel_autoplay = $carousel_nav = $carousel_dots = $carousel_loop = $carousel_centered = $hidden_decoration = $hidden_position = $hidden_img = $hidden_name = $extra_class = $extra_id= '';

	$modulestyle = 'testimonial-3';
	$atts = vc_map_get_attributes('zy_testimonial_slider_module', $atts);
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
		'posts_per_page' 				=> 3,
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
	wp_enqueue_script('zyt-swiper' );
	wp_enqueue_style('zyt-swiper');

	$output .= '<div '.$get_extra_id.' class="kolaso_testimonial testimonial '.$modulestyle.''.$get_extra_class.'">';

		$output .= '<div class="swiper-container testimonial-top">';
			$output .= '<div class="swiper-wrapper">';

			//Start Query
			global $post;
			$wp_query_args_testimonial = new WP_Query( $testimonial_args );
			while ( $wp_query_args_testimonial->have_posts() ) :
			$wp_query_args_testimonial->the_post();

			$meta_data = get_post_meta( $post->ID, '_meta_testimonial_options', true );

					$output .= '<div class="swiper-slide testimonial-panel">';
						$output .= '<div class="testimonial-body">';
							if($hidden_decoration != true):
							$output .= '<div class="testimonial-icon"></div>';
							$output .= '<div class="testimonial-icon2"></div>';
							endif;
							$output .= '<p>';
								if(isset($meta_data['testimonial-desc'])) $output .= $meta_data['testimonial-desc'];
							$output .= '</p>';
						$output .= ' </div><!-- .testimonial-body end -->';
					$output .= ' </div><!-- .testimonial-panel end -->';
		
			endwhile;
			wp_reset_postdata();

			$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="swiper-pagination"></div>';
		$output .= '<div class="swiper-container testimonial-thumbs">';
			$output .= '<div class="swiper-wrapper">';

				//Start Query
				while ( $wp_query_args_testimonial->have_posts() ) :
				$wp_query_args_testimonial->the_post();
					$meta_data = get_post_meta( $post->ID, '_meta_testimonial_options', true );
					$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size = 'thumbnail' );
					$image = '<img src="' . esc_url( $image_url[0] ) . '" alt="' . the_title_attribute( array( 'echo' => 0) ) . '" />';
						$output .= '<div class="swiper-slide testimonial-meta">';
							$output .= ' <div class="testimonial-img">';
								$output .= ''. $image . '';
							$output .= ' </div>';
							$output .= ' <h4>'.get_the_title().'</h4>';
							$output .= '<p>';
								if(isset($meta_data['testimonial-job'])) $output .= $meta_data['testimonial-job'];
							$output .= '</p>';
						$output .= ' </div><!-- .testimonial-meta end -->';
				endwhile;

				wp_reset_postdata();
			$output .= '</div>';
		$output .= '</div>';
		
	$output .= '</div>';

	return $output;

}
add_shortcode("zy_testimonial_slider_module", "zy_testimonial_slider");
