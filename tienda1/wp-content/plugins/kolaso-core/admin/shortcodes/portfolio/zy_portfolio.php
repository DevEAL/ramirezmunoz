<?php
/**
 *
 * Portfolio Elements
 * @since 1.0.0
 * @version 1.0.0
 *
 */

if(function_exists('vc_map')):
// ==========================================================================================
	// Portfolio Blocks Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Portfolio Grid", 'zytheme'),
		"base" 			=> "zy_portfolio_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-eye",
		"description" 	=>esc_html__( 'Portfolio block.','zytheme'),
		"params"		=> array(

			array (
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Layout Template", "zytheme"),
				"param_name"	=> "portfolio_style",
				"simple_mode"	=> false,
				"options"		=> array (
					"portfolio-grid"		=> array (
						"tooltip"		=> esc_attr__("Portfolio Grid", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'portfolio/preview/style-1.jpg',
					),
					"portfolio-standard"		=> array (
						"tooltip"		=> esc_attr__("Portfolio Standard", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'portfolio/preview/style-2.jpg',
					),
					"portfolio-gallery"		=> array (
						"tooltip"		=> esc_attr__("Portfolio Gallery", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'portfolio/preview/style-3.jpg',
					),
					"portfolio-carousel"		=> array (
						"tooltip"		=> esc_attr__("Portfolio Carousel", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'portfolio/preview/style-4.jpg',
					),
					"portfolio-parallax"		=> array (
						"tooltip"		=> esc_attr__("Portfolio Parallax", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'portfolio/preview/style-5.jpg',
					),
				),
				"admin_label" => true,
			),

				//By Category Select
				array(
					"type" => "mulitselect_portfolio",
					"heading" => esc_html__("Portfolio Categories", 'zytheme'),
						"description" => esc_html__("Which categories would you like to show?", 'zytheme'),
						'group' => esc_html__("Query Source", 'zytheme'),
					"param_name" => "cat",
						'admin_label' => true,
					),

			//Post Count
			array(
				"type"			=>	"number",
				"class"			=>	"",
				"heading"		=>	esc_html__('Portfolio Block Count', 'zytheme'),
				"description"	=>  esc_html__('Number Of Items', 'zytheme'),
				"param_name"	=>	"postcount",
				'min' => 1,
				'max' => 9,
				"value"			=>	"",
				"admin_label" => true,
				'group' => esc_html__("Query Source", 'zytheme'),
			),


			array(
				'type' => 'heading',
				'heading' => esc_html__( 'Archive Pagination', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'param_name' => 'pagination_grid',
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Display Pagination', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'param_name' => 'pagination_post',
				'value' => array(
					__( 'Pagination OFF', 'zytheme' ) => 'pagination-off',
					__( 'Number of Pages', 'zytheme' ) => 'pagination-nav',
					__( 'Buttons', 'zytheme' ) => 'pagination-buttons',

				),
				'description' => __( 'Select display style for pagination.', 'zytheme' ),
			),

			array(
				'type' => 'heading',
				'heading' => esc_html__( 'Grid Settings', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'param_name' => 'heading_grid',
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery'))
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Extra Small Devices', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
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
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery'))
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Small Devices', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
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
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery'))
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Medium Devices', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
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
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery'))
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Large Devices', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
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
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery')),
			),

			//Carousel Layout

			array(
				'type' => 'heading',
				'heading' => esc_html__( 'Carousel Settings', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'param_name' => 'heading_grid',
			),

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (Large Device)", 'zytheme'),
				"param_name" => "carousel_lg",
				"value" => "",
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (small Device)", 'zytheme'),
				"param_name" => "carousel_sm",
				"value" => "",
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel speed", 'zytheme'),
				"param_name" => "carousel_speed",
				"value" => "",
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items space", 'zytheme'),
				"param_name" => "carousel_space",
				"value" => "",
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
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
					'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
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
					'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
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
					'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
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
					'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-carousel'))
			),


			array(
				'type' => 'heading',
				'heading' => esc_html__( 'Portfolio Fillter', 'zytheme' ),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
				'param_name' => 'heading_grid',
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery')),
			),

			array(
				'type'          => 'checkbox',
				'heading'       => esc_html__('Enable Fillter Portfolio', 'zytheme'),
				'param_name'    => 'enable_fillter',
				'group'         => esc_html__('Portfolio Settings', 'zytheme'),
				'description'   => esc_html__('Enable Fillter Portfolio.', 'zytheme'),
				'value'         => array( esc_html__('Enable Fillter Portfolio', 'zytheme') => 'yes' ),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery')),
			),

			//Header Title Default Text
			array(
				"type" 					=> "textfield",
				"param_name" 	  => "portfolio_filter_text",
				"heading" 			=> esc_html__("Default Text","zytheme"),
				"description" 	=> esc_html__("Add tag filter for heading module.","zytheme"),
				"group" 				=> esc_html__("Portfolio Settings", "zytheme"),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery')),
			),

			//By Category Select
			array(
		    "type" => "mulitselect_portfolio",
		    "heading" => esc_html__("Portfolio Categories", 'zytheme'),
				"description" => esc_html__("Which categories would you like to show?", 'zytheme'),
				'group' => esc_html__("Portfolio Settings", 'zytheme'),
		    "param_name" => "cat_fillter",
				'admin_label' => true,
				'dependency'		=> array('element' => 'enable_fillter', 'value' => array('yes')),
				'dependency' => Array('element' => "portfolio_style", 'value' => array('portfolio-parallax','portfolio-grid','portfolio-standard','portfolio-gallery')),
			),		

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Image Size', 'zytheme' ),
				'group' => esc_html__("Content Settings", 'zytheme'),
				'param_name' => 'image_size',
				'value' => array(
					__( 'Full', 'zytheme' ) => 'full',
					__( 'Large', 'zytheme' ) => 'large',
					__( '850x400', 'zytheme' ) => 'kolaso_blog_850x400',
					__( '555x370', 'zytheme' ) => 'kolaso_blog_555x370',
					__( '800x800', 'zytheme' ) => 'kolaso_portfolio_800x800',
				),
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Hover Effect', 'zytheme' ),
				'group' => esc_html__("Content Settings", 'zytheme'),
				'param_name' => 'hover_effect',
				'value' => array(
					__( 'Hover Fade In', 'zytheme' ) => 'portfolio-hover-fade',
					__( 'Hover Centered', 'zytheme' ) => 'portfolio-hover-centered',
					__( 'Hover Slide Down', 'zytheme' ) => 'portfolio-hover-slidedown',
					__( 'Hover Slide Left', 'zytheme' ) => 'portfolio-hover-slideleft',
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

		)

	));
endif;

function zy_portfolio( $atts, $content = null ) {
	$output = $portfolio_style = $postcount = $postid = $pagination_post = $column_xs = $column_sm = $column_md = $column_lg = $enable_fillter = $cat_fillter = $portfolio_filter_text = $cat = $image_size = $carousel_speed = $carousel_space = $carousel_autoplay = $carousel_nav	= $carousel_dots = $carousel_loop = $hover_effect = $extra_class = $extra_id = '';

	$atts = vc_map_get_attributes('zy_portfolio_module', $atts);
	extract($atts);

	$current_taxnomy_slug = 'portfolio_category';

	// Get Image Size
	(!empty($image_size)) ? $size = $image_size : $size= 'kolaso_portfolio_800x800';

	// Get Extra Small Column
	($column_xs) ? $column_xs_class = 'col-'. (12/$column_xs) : $column_xs_class = 'col-12';

	// Get Small Column
	($column_sm) ? $column_sm_class = ' col-sm-'. (12/$column_sm) : $column_sm_class = ' col-sm-6';

	// Get Medium Column
	($column_md) ? $column_md_class = ' col-md-'. (12/$column_md) : $column_md_class = ' col-md-4';

	// Get Large Column
	($column_lg) ? $column_lg_class = ' col-lg-'.(12/$column_lg) : $column_lg_class = ' col-lg-4';

	$columns_class = $column_xs_class.$column_sm_class.$column_md_class.$column_lg_class ;

	// Carousel has dots
	($carousel_dots=='true') ? $dots_class = " carousel-dots" : $dots_class = "" ;

	// Carousel has nav
	($carousel_nav=='true') ?  $nav_class = " carousel-navs" : $nav_class = "";

	// Carousel items large device
	(!empty($atts['carousel_lg'])) ? $carousel_lg = $atts['carousel_lg'] : $carousel_lg = '3';

	// Carousel items smal device
	(!empty($atts['carousel_sm'])) ? $carousel_sm = $atts['carousel_sm'] : $carousel_sm = '1';

	// Carousel items space
	(!empty($atts['carousel_space'])) ? $carousel_space = $atts['carousel_space'] : $carousel_space = '30';

	// Carousel items speed
	(!empty($atts['carousel_speed'])) ? $carousel_speed = $atts['carousel_speed'] : $carousel_speed = '800';

	// Carousel items speed
	(!empty($atts['carousel_speed'])) ? $carousel_speed = $atts['carousel_speed'] : $carousel_speed = '800';

	
	// Check if portfolio filter is active
	($enable_fillter == 'yes') ? $fillter  =  'display-filter' : $fillter  =  'hidden-fillter';

	// Check number if portfolio item to display
	( !empty( $atts['hover_effect'] ) ) ? $hover_effect = $atts['hover_effect'] : $hover_effect = 'portfolio-hover-fade';


	//Start ID Posts
	if( !empty( $atts['postid'] ) ) :
		$bypostid = $atts['postid'];
		$bypostid = explode( ',', $bypostid );
	else:
		$bypostid = "";
	endif;

	$paged = is_front_page() ? get_query_var( 'page', 1 ) : get_query_var( 'paged', 1 );

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id='';

	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	
	// ==========================================================================================
	// Module Portfolio Grid
	// ==========================================================================================

	//Start Query portfolio
	$portfolio_args = array(
		'post_status'						=> 'publish',
		'posts_per_page' 				=> $postcount,
		'ignore_sticky_posts' 	=> true,
		'post_type' 						=> 'portfolio',
		'paged' 					     => $paged,
		'posts_per_archive_page'=>$postcount,
	);

	if( $cat ):
		$portfolio_args['tax_query'] = array(
			array(
				'taxonomy'  => 'portfolio_category',
				'field'    => 'id',
				'terms'    => explode( ',', $cat )
			)
		);
	endif;

	if($portfolio_style !== 'portfolio-carousel' ):
			// Enqueue Styles and Scripts
			wp_enqueue_script('zyt-isotope' );
			wp_enqueue_script('zyt-imagesloaded' );

	endif;

	//Start Query
	$posts = query_posts( $portfolio_args );

	if ( have_posts() ) :

		$output .= '<div '.$get_extra_id.' class="kolaso_portfolio portfolio '.$portfolio_style.' '.$pagination_post.' '.$get_extra_class.'">';

			// Chech If have Filter
			if($enable_fillter == 'yes'):

			$output .= '<div class="row">';

				//Portfolio Filter
				$output .= '<div class="portfolio-filter mr-auto ml-auto '.$fillter.'">';
					$output .= '<ul class="list-inline mb-0">';
						$output .= '<li class="list-inline-item"><a href="javascript:void(0)" onclick="" class="active-filter">'.esc_html__(''.$portfolio_filter_text.'','zytheme').'</a></li>';
						$categories = trim($cat_fillter);
						if(!empty($categories)) {
							$categories = explode(',', $categories);
							$categories = is_array($categories) ? $categories : array($categories);
							// Need to cache category first
							$taxonomy = $current_taxnomy_slug;
							$terms = get_terms($taxonomy); // Get all terms of a taxonomy

							foreach($categories as $category) {
								$cat = get_term(trim($category));
								$output .= '<li class="list-inline-item cat-item cat-item-'.$cat->term_id.'">';
									$output .= '<a class="'.$cat->slug.'" data-filter=".'.$cat->slug.'" onclick="" href="javascript:void(0)">'.$cat->name.'</a>';
								$output .= '</li>';
							}
						}
					$output .= '</ul>';
				$output .= '</div><!-- .portfolio-filter -->';
			$output .= '</div><!-- .row -->';
			endif;

			if($enable_fillter == 'yes'):
				$output .= '<div id="portfolio-all" class="row">';
			else:
				$output .= '<div class="row">';
			endif;

			if($portfolio_style == 'portfolio-carousel'):
				
				// Enqueue Styles and Scripts
				wp_enqueue_script('zyt-owl-carousel' );
				wp_enqueue_style('zyt-owl-carousel');

				$output .= '<div class="carousel owl-carousel portfolio-standard'.$dots_class.$nav_class.'"
				data-slide="'.$carousel_lg.'"
				data-slide-rs="'.$carousel_sm.'"
				data-autoplay="'.$carousel_autoplay.'"
				data-nav="'.$carousel_nav.'"
				data-dots="'.$carousel_dots.'"
				data-space="'.$carousel_space.'"
				data-loop="'.$carousel_loop.'"
				data-speed="'.$carousel_speed.'">';
			endif;

			while ( have_posts() ) : the_post();

			$term_list = wp_get_post_terms(get_the_ID(), $current_taxnomy_slug, array("fields" => "all"));

			// Get Thumbnial Path
			if ( get_post_thumbnail_id( get_the_ID()) ) :
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size );
				$thumb = '<img src="' . esc_url( $image_url[0] ) . '" class="img-fluid" alt="' . the_title_attribute( array( 'echo' => 0) ) . '">';
			elseif(kolaso_get_option( 'placeholder_img' )):
				$image_url = wp_get_attachment_image_src( kolaso_get_option( 'placeholder_img' ) , $size);
				$thumb = '<img src="' . esc_url( $image_url[0] ) . '" class="img-fluid" alt="'.esc_attr(get_the_title()).'">';
			else :
				$thumb = '<img src="'.get_stylesheet_directory_uri().'/assets/images/thumbnail.jpg" class="img-fluid" alt="'.esc_attr(get_the_title()).'">';
			endif;

			if ( $portfolio_style == "portfolio-grid" || $portfolio_style == "portfolio-gallery") :

				$output .= '<div id="portfolio-'.get_the_ID().'" class="portfolio-item '.$columns_class.' '. join( ' ', get_post_class() ) .' '.$term_list[0]->slug.'">';
					$output .= '<div class="portfolio-item-container">';
					$output .= '<div class="portfolio-img">';
						$output .= ''.$thumb.'';
						$output .= '<div class="portfolio-hover '. $hover_effect .'">';
							$output .= '<div class="portfolio-action">';
								$output .= '<div class="portfolio-zoom">';
									$output .= '<a href="'.esc_url( get_permalink()).'" title="'.get_the_title().'"></a>';
								$output .= '</div>';
								$output .= '<div class="portfolio-content">';
									$output .= '<div class="portfolio-title">';
										$output .= '<h4><a href="'.esc_url( get_permalink()).'">'.get_the_title().'</a></h4>';
									$output .= '</div>';
									$output .= '<div class="portfolio-cat">';
									$output .= ''.get_the_term_list( get_the_ID(), 'portfolio_category', ' ', ',', ' ' ).'';
									$output .= '</div>';
								$output .= '</div>';
							$output .= '</div><!-- .portfolio-action end -->';
						$output .= '</div><!-- .portfolio-hover end -->';
						$output .= '</div><!-- .portfolio-img end -->';
					$output .= '</div>';
				$output .= '</div><!-- . portfolio-item end -->';

			elseif ( $portfolio_style == "portfolio-standard") :

				$output .= '<div id="portfolio-'.get_the_ID().'" class="portfolio-item '.$columns_class.' '. join( ' ', get_post_class() ) .' '.$term_list[0]->slug.'">';
					$output .= '<div class="portfolio-item-container">';
					$output .= '<div class="portfolio-img">';
						$output .= ''.$thumb.'';
						$output .= '<div class="portfolio-hover '. $hover_effect .'">';
							$output .= '<div class="portfolio-action">';
								$output .= '<div class="portfolio-zoom">';
									$output .= '<a href="'.esc_url( get_permalink()).'" title="'.get_the_title().'"></a>';
								$output .= '</div>';
							$output .= '</div><!-- .portfolio-action end -->';
						$output .= '</div><!-- .portfolio-hover end -->';
					$output .= '</div><!-- .portfolio-img end -->';
					$output .= '<div class="portfolio-content">';
						$output .= '<div class="portfolio-title">';
							$output .= '<h4><a href="'.esc_url( get_permalink()).'">'.get_the_title().'</a></h4>';
						$output .= '</div>';
						$output .= '<div class="portfolio-cat">';
							$output .= ''.get_the_term_list( get_the_ID(), 'portfolio_category', ' ', ',', ' ' ).'';
						$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>';
				$output .= '</div><!-- . portfolio-item end -->';

			elseif ($portfolio_style == "portfolio-carousel" ) :

				$output .= '<div id="portfolio-'.get_the_ID().'" class="portfolio-item '. join( ' ', get_post_class() ) .'">';
					$output .= '<div class="portfolio-item-container">';
					$output .= '<div class="portfolio-img">';
						$output .= ''.$thumb.'';
						$output .= '<div class="portfolio-hover '. $hover_effect .'">';
							$output .= '<div class="portfolio-action">';
								$output .= '<div class="portfolio-zoom">';
									$output .= '<a href="'.esc_url( get_permalink()).'" title="'.get_the_title().'"></a>';
								$output .= '</div>';
							$output .= '</div><!-- .portfolio-action end -->';
						$output .= '</div><!-- .portfolio-hover end -->';
					$output .= '</div><!-- .portfolio-img end -->';
					$output .= '<div class="portfolio-content">';
						$output .= '<div class="portfolio-title">';
							$output .= '<h4><a href="'.esc_url( get_permalink()).'">'.get_the_title().'</a></h4>';
						$output .= '</div>';
						$output .= '<div class="portfolio-cat">';
							$output .= ''.get_the_term_list( get_the_ID(), 'portfolio_category', ' ', ',', ' ' ).'';
						$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>';
				$output .= '</div><!-- . portfolio-item end -->';

			elseif ( $portfolio_style == "portfolio-parallax" ) :

				$output .= '<div id="portfolio-'.get_the_ID().'" class="portfolio-item '.$columns_class.' '. join( ' ', get_post_class() ) .' '.$term_list[0]->slug.'">';
					$output .= '<div class="portfolio-item-container">';
					$output .= '<a href="'.esc_url( get_permalink()).'" title="'.get_the_title().'">';
							$output .= '<div class="portfolio-img">';
								$output .= '<div class="bg-section">';
									$output .= ''.$thumb.'';
								$output .= '</div>';						
							$output .= '</div><!-- .portfolio-img end -->';
						$output .= '</a>';
						$output .= '<div class="portfolio-content">';
							$output .= '<div class="portfolio-cat">';
								$output .= ''.get_the_term_list( get_the_ID(), 'portfolio_category', ' ', ',', ' ' ).'';
							$output .= '</div>';
							$output .= '<div class="portfolio-title">';
								$output .= '<h4><a href="'.esc_url( get_permalink()).'">'.get_the_title().'</a></h4>';
							$output .= '</div>';
						$output .= '</div>';
					$output .= '</div>';
				$output .= '</div><!-- . portfolio-item end -->';
			endif;


			endwhile;

			wp_reset_postdata();

			if($portfolio_style == 'portfolio-carousel'):
				$output .= '</div>'; // End .carousel
			endif;

			$output .= '</div><!-- .row end -->';
			
			if($pagination_post == 'pagination-buttons'):

				$output .= '<div class="row mt-30">';
					$output .= '<div class="col-12 col-xs-12 col-md-6 col-lg-6 prev-page">'.get_previous_posts_link('Previous Page').'</div>';
					$output .= '<div class="col-12 col-xs-12 col-md-6 col-lg-6 next-page">'.get_next_posts_link('Next Page').'</div>';
				$output .= '</div>';
			elseif($pagination_post == 'pagination-nav'):
				$output .= '<div class="row text-center mt-30">';
					$output .= '<div class="col-12 col-xs-12 col-md-12 col-lg-12">';
						$output .= get_the_posts_pagination(
							array(
							'mid_size' => 2,
								'screen_reader_text' => esc_html__('', 'zytheme'),
								'prev_text' => '<i class="fa fa-angle-left"></i>',
								'next_text' => '<i class="fa fa-angle-right"></i>',
							)
						);
					$output .= '</div>';
				$output .= '</div>';
			endif;

		$output .= '</div><!-- .portfolio end -->';
	
	endif; // have Posts

	wp_reset_query();

	return $output;

}
add_shortcode("zy_portfolio_module", "zy_portfolio");
