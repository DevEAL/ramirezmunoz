<?php
/**
 *
 * Team Elements
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):

	$team_categories = get_terms("team_categories");
	$team_categories_array = array();
	$team_categories_array[__("All Categories", 'zytheme')] = "";
	foreach($team_categories as $team_category) {
		$team_categories_array[$team_category->name] =  $team_category->term_id;
	}
	// ==========================================================================================
	// Team Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Team", 'zytheme'),
		"base" 			=> "zy_team_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-users",
		"description" 	=>esc_html__( 'Team block.','zytheme'),
		"params"		=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Layout Template", 'zytheme'),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"team-1"		=> array (
						"tooltip"		=> esc_attr__("Style 1", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'team/preview/style-1.jpg',
					),
					"team-2"		=> array (
						"tooltip"		=> esc_attr__("Style 2", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'team/preview/style-2.jpg',
					),
					"team-3"		=> array (
						"tooltip"		=> esc_attr__("Style 2", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'team/preview/style-3.jpg',
					),
				),
				"admin_label" => true,
			),

			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__("Style Type",'zytheme'),
				"param_name" => "moduletype",
				"value" => array(
					esc_html__("Grid style", 'zytheme') => "grid",
					esc_html__("Carousel Style", 'zytheme') => 'carousel',
					)
			),

			//Post Count
			array(
				"type"			=>	"textfield",
				"class"			=>	"",
				"heading"		=>	esc_html__('Number of Member To Show', 'zytheme'),
				"description"	=>  esc_html__('Enter Member Count', 'zytheme'),
				'group' => esc_html__("Team Query", 'zytheme'),
				"param_name"	=>	"postcount",
				"value"			=>	"",
			),

			//By Category Select
			array(
				"type" => "dropdown",
				"heading" => esc_html__("By Team Category", 'zytheme'),
				"description" => esc_html__("Which categories would you like to show?", 'zytheme'),
				'group' => esc_html__("Team Query", 'zytheme'),
				"param_name" => "cat",
				"value" => $team_categories_array,
			),

			//Post ID
			array(
				"type"			=>	"textfield",
				"class"			=>	"",
				"heading"		=>	esc_html__('By Memeber ID', 'zytheme'),
				"description"	=>	esc_html__('get member id form edit team post.php?post=ID, Ex:443,555', 'zytheme'),
				'group' => esc_html__("Team Query", 'zytheme'),
				"param_name"	=>	"postid",
				"value"			=>	"",
			),

			//Post Order By
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__("Order By",'zytheme'),
				'group' => esc_html__("Team Query", 'zytheme'),
				"param_name" => "postorderby",
				"value" => array(
					esc_html__("Oldest Members", 'zytheme') => "ASC",
					esc_html__("Newest Memebers", 'zytheme') => 'DESC',
					)
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Extra Small Devices', 'zytheme' ),
				'group' => esc_html__("Grid Columns", 'zytheme'),
				'param_name' => 'column_xs',
				'value' => array(
					__( '1', 'zytheme' ) => '1',
					__( '2', 'zytheme' ) => '2',
					__( '3', 'zytheme' ) => '3',
					__( '4', 'zytheme' ) => '4',
					__( '6', 'zytheme' ) => '6',
					__( '12', 'zytheme' ) => '12',
				),
				'std'         => '1',
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'		=> array('element' => 'moduletype', 'value' => array('grid')),
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Small Devices', 'zytheme' ),
				'group' => esc_html__("Grid Columns", 'zytheme'),
				'param_name' => 'column_sm',
				'value' => array(
					__( '1', 'zytheme' ) => '1',
					__( '2', 'zytheme' ) => '2',
					__( '3', 'zytheme' ) => '3',
					__( '4', 'zytheme' ) => '4',
					__( '6', 'zytheme' ) => '6',
					__( '12', 'zytheme' ) => '12',
				),
				'std'         => '1',
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'		=> array('element' => 'moduletype', 'value' => array('grid')),
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Medium Devices', 'zytheme' ),
				'group' => esc_html__("Grid Columns", 'zytheme'),
				'param_name' => 'column_md',
				'value' => array(
					__( '1', 'zytheme' ) => '1',
					__( '2', 'zytheme' ) => '2',
					__( '3', 'zytheme' ) => '3',
					__( '4', 'zytheme' ) => '4',
					__( '6', 'zytheme' ) => '6',
					__( '12', 'zytheme' ) => '12',
				),
				'std'         => '3',
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'		=> array('element' => 'moduletype', 'value' => array('grid')),
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Large Devices', 'zytheme' ),
				'group' => esc_html__("Grid Columns", 'zytheme'),
				'param_name' => 'column_lg',
				'value' => array(
					__( '1', 'zytheme' ) => '1',
					__( '2', 'zytheme' ) => '2',
					__( '3', 'zytheme' ) => '3',
					__( '4', 'zytheme' ) => '4',
					__( '6', 'zytheme' ) => '6',
					__( '12', 'zytheme' ) => '12',
				),
				'std'         => '3',
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'		=> array('element' => 'moduletype', 'value' => array('grid')),
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

		)

	));
endif;

function zy_team( $atts, $content = null ) {
	$output = $modulestyle = $moduletype = $postcount = $postid = $cat = $postorderby = $column_xs = $column_sm = $column_md = $column_lg =  $carousel_style = $carousel_sm = $carousel_lg	= $carousel_speed = $carousel_space = $carousel_autoplay = $carousel_nav	= $carousel_dots = $carousel_loop =  $extra_class = $extra_id= '';

	$atts = vc_map_get_attributes('zy_team_module', $atts);
	extract($atts);

	//Start Count Posts
	if( !empty( $atts['postcount'] ) ) :
		$postcount = $atts['postcount'];
	else:
		$postcount = 3;
	endif;

	//Start ID Posts
	if( !empty( $atts['postid'] ) ) :
		$bypostid = $atts['postid'];
		$bypostid = explode( ',', $bypostid );
	else:
		$bypostid = "";
	endif;

	if( !empty( $atts['cat'] ) ) :
		$postcat = $atts['cat'];
	else:
		$postcat = "";
	endif;

	// Get Extra Small Column
	($column_xs) ? $column_xs_class = 'col-'. (12/$column_xs) : $column_xs_class = 'col-12';

	// Get Small Column
	($column_sm) ? $column_sm_class = ' col-sm-'. (12/$column_sm) : $column_sm_class = ' col-sm-6';

	// Get Medium Column
	($column_md) ? $column_md_class = ' col-md-'. (12/$column_md) : $column_md_class = ' col-md-4';

	// Get Large Column
	($column_lg) ? $column_lg_class = ' col-lg-'.(12/$column_lg) : $column_lg_class = ' col-lg-4';

	// Carousel has dots
	($carousel_dots=='true') ? $dots_class = " carousel-dots" : $dots_class = "" ;

	// Carousel has nav
	($carousel_nav=='true') ?  $nav_class = " carousel-navs" : $nav_class = "";

	// Carousel items large device
	(!empty($atts['carousel_lg'])) ? $carousel_lg = $atts['carousel_lg'] : $carousel_lg = '3';

	// Carousel items smal device
	(!empty($atts['carousel_sm'])) ? $carousel_sm = $atts['carousel_sm'] : $carousel_sm = '1';

	// Carousel items space
	(!empty($atts['carousel_space'])) ? $carousel_space = $atts['carousel_space'] : $carousel_space = '0';
	
	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	//Start Query Team 
	$team_args = array(
		'post__in'							=> $bypostid,
		'post_status'						=> 'publish',
		'posts_per_page' 				=> $postcount,
		'ignore_sticky_posts' 	=> true,
		'post_type' 						=> 'team',
		'order' 						=> $postorderby,
	);

	if (! empty($atts['cat'])) {
		$team_args = wp_parse_args(
			array(
				'tax_query' => array(
				array(
				'taxonomy' => 'team_categories',
				'field' => 'term_id',
				'terms' => $postcat,
				 )
			  ),
			)
		, $team_args );
	}

	$output .= '<div '.$get_extra_id.' class="kolaso_team team '.$modulestyle.''.$get_extra_class.'">';
		$output .= '<div class="row">';

		if($moduletype == 'carousel'):

			// Enqueue Styles and Scripts
			wp_enqueue_script('zyt-owl-carousel' );
			wp_enqueue_style('zyt-owl-carousel');

			
			$output .= '<div class="carousel owl-carousel '.$dots_class.$nav_class.'"
			data-slide="'.$carousel_lg.'"
			data-slide-rs="'.$carousel_sm.'"
			data-autoplay="'.$carousel_autoplay.'"
			data-nav="'.$carousel_nav.'"
			data-dots="'.$carousel_dots.'"
			data-space="'.$carousel_space.'"
			data-loop="'.$carousel_loop.'"
			data-speed="'.$carousel_speed.'">';
		endif;

		//Start Query
		$wp_query_args_team = new WP_Query( $team_args );
		while ( $wp_query_args_team->have_posts() ) : $wp_query_args_team->the_post();

			global $post;
			$meta_data = get_post_meta( $post->ID, '_meta_team_options', true );

			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size = 'kolaso_team_400x400' );
			$image = '<img src="' . esc_url( $image_url[0] ) . '" alt="' . the_title_attribute( array( 'echo' => 0) ) . '" />';

			if($moduletype == 'grid'):
				$output .= '<div class="'.$column_xs_class.$column_sm_class.$column_md_class.$column_lg_class.'">';
			endif;

				if( strstr( $atts['modulestyle'], "team-1" ) ) :
					
					// ==========================================================================================
					// Module Team Elements Style1
					// ==========================================================================================

					$output .= '<div class="member">';
						$output .= '<div class="member-img">';
							$output .= ''. $image . '';
							$output .= '<div class="member-overlay">';
								$output .= '<div class="member-social">';
									if(isset($meta_data['member-facebook']) && $meta_data['member-facebook'] !== '') $output .= '<a href="'. $meta_data['member-facebook'] . '" class="facebook"><i class="fa fa-facebook"></i></a>';
									if(isset($meta_data['member-twitter']) && $meta_data['member-twitter'] !== '') $output .= '<a href="'. $meta_data['member-twitter'] . '"  class="twitter"><i class="fa fa-twitter"></i></a>';
									if(isset($meta_data['member-gplus']) && $meta_data['member-gplus'] !== '') $output .= '<a href="'. $meta_data['member-gplus'] . '"  class="google"><i class="fa fa-google"></i></a>';
									if(isset($meta_data['member-linkedin']) && $meta_data['member-linkedin'] !=='') $output .= '<a href="'. $meta_data['member-linkedin'] . '"  class="linkedin"><i class="fa fa-linkedin"></i></a>';
								$output .= '</div>';
							$output .= '</div><!-- .memebr-ovelay end -->';
						$output .= '</div><!-- .member-img end -->';
						$output .= '<div class="member-info">';
							$output .= '<h5>'. get_the_title() . '</h5>';
							$output .= '<h6>';
								if(isset($meta_data['member-job'])) $output .= $meta_data['member-job'];
							$output .= '</h6>';
						$output .= '</div><!-- .member-info end -->';
					$output .= '</div><!-- .member end -->';

				elseif ( strstr( $atts['modulestyle'], "team-2" ) ) :

					// ==========================================================================================
					// Module Team Elements Style2
					// ==========================================================================================
			
					$output .= '<div class="member">';
						$output .= '<div class="member-img">';
							$output .= ''. $image . '';
							$output .= '<div class="member-overlay">';
								$output .= '<div class="member-social">';
									if(isset($meta_data['member-facebook']) && $meta_data['member-facebook'] !== '') $output .= '<a href="'. $meta_data['member-facebook'] . '" class="facebook"><i class="fa fa-facebook"></i></a>';
									if(isset($meta_data['member-twitter']) && $meta_data['member-twitter'] !== '') $output .= '<a href="'. $meta_data['member-twitter'] . '"  class="twitter"><i class="fa fa-twitter"></i></a>';
									if(isset($meta_data['member-gplus']) && $meta_data['member-gplus'] !== '') $output .= '<a href="'. $meta_data['member-gplus'] . '"  class="google"><i class="fa fa-google"></i></a>';
									if(isset($meta_data['member-linkedin']) && $meta_data['member-linkedin'] !=='') $output .= '<a href="'. $meta_data['member-linkedin'] . '"  class="linkedin"><i class="fa fa-linkedin"></i></a>';
								$output .= '</div>';
								$output .= '<div class="member-info">';
									$output .= '<h5>'. get_the_title() . '</h5>';
									$output .= '<h6>';
										if(isset($meta_data['member-job'])) $output .= $meta_data['member-job'];
									$output .= '</h6>';
								$output .= '</div><!-- .member-info end -->';
							$output .= '</div><!-- .memebr-ovelay end -->';
						$output .= '</div><!-- .member-img end -->';
					$output .= '</div><!-- .member end -->';
				
				elseif ( strstr( $atts['modulestyle'], "team-3" ) ) :

					// ==========================================================================================
					// Module Team Elements Style3
					// ==========================================================================================
			
					$output .= '<div class="member">';
						$output .= '<div class="member-img">';
							$output .= ''. $image . '';
							$output .= '<div class="member-overlay">';
								$output .= '<div class="member-social">';
									if(isset($meta_data['member-facebook']) && $meta_data['member-facebook'] !== '') $output .= '<a href="'. $meta_data['member-facebook'] . '" class="facebook"><i class="fa fa-facebook"></i></a>';
									if(isset($meta_data['member-twitter']) && $meta_data['member-twitter'] !== '') $output .= '<a href="'. $meta_data['member-twitter'] . '"  class="twitter"><i class="fa fa-twitter"></i></a>';
									if(isset($meta_data['member-gplus']) && $meta_data['member-gplus'] !== '') $output .= '<a href="'. $meta_data['member-gplus'] . '"  class="google"><i class="fa fa-google"></i></a>';
									if(isset($meta_data['member-linkedin']) && $meta_data['member-linkedin'] !=='') $output .= '<a href="'. $meta_data['member-linkedin'] . '"  class="linkedin"><i class="fa fa-linkedin"></i></a>';
								$output .= '</div>';
								$output .= '<div class="member-info">';
									$output .= '<h5>'. get_the_title() . '</h5>';
									$output .= '<h6>';
										if(isset($meta_data['member-job'])) $output .= $meta_data['member-job'];
									$output .= '</h6>';
								$output .= '</div><!-- .member-info end -->';
							$output .= '</div><!-- .memebr-ovelay end -->';
						$output .= '</div><!-- .member-img end -->';
					$output .= '</div><!-- .member end -->';

				endif; //module style condtion

			if($moduletype == 'grid'):
				$output .= '</div>'; // End .col
			endif;

		endwhile;
		wp_reset_postdata();

		if($moduletype == 'carousel'):
			$output .= '</div>'; // End .carousel
		endif;

		$output .= '</div>';//row

	$output .= '</div>';//kolaso_team
	return $output;

}
add_shortcode("zy_team_module", "zy_team");
