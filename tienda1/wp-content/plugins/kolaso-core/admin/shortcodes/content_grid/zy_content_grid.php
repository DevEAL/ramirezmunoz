<?php
/**
 * Content Grid Element
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/admin/shortcodes
 */

if(function_exists('vc_map')):

	$postTypes = get_post_types( array() );
	$postTypesList = array();
	$excludedPostTypes = array(
		'revision',
		'nav_menu_item',
		'vc_grid_item',
	);
	if ( is_array( $postTypes ) && ! empty( $postTypes ) ) {
		foreach ( $postTypes as $postType ) {
			if ( ! in_array( $postType, $excludedPostTypes ) ) {
				$label = ucfirst( $postType );
				$postTypesList[] = array(
					$postType,
					$label,
				);
			}
		}
	}
	$postTypesList[] = array(
		'custom',
		__( 'Custom query', 'zytheme' ),
	);
	$postTypesList[] = array(
		'ids',
		__( 'List of IDs', 'zytheme' ),
	);

	// ==========================================================================================
	// List Blocks Style
	// ==========================================================================================
	vc_map( array(
		"name" 			=> esc_html__("Content Grid", 'zytheme'),
		"base" 			=> "zy_content_grid_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-newspaper-o",
		"description" 	=>esc_html__( 'Bulid Your Layout For Content.','zytheme'),
		"params"		=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Layout Template", 'zytheme'),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"blog-grid"		=> array (
						"tooltip"		=> esc_attr__("Grid Layout", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'content_grid/preview/style-1.jpg',
					),
					"blog-standard"		=> array (
						"tooltip"		=> esc_attr__("Standard Layout", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'content_grid/preview/style-2.jpg',
					),

					"blog-textual"		=> array (
						"tooltip"		=> esc_attr__("Textual Layout", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'content_grid/preview/style-3.jpg',
					),

					"blog-carousel"		=> array (
						"tooltip"		=> esc_attr__("Carousel Layout", 'zytheme'),
						"src"				=> ZYTHEME_SHORTCODES .'content_grid/preview/style-4.jpg',
					),
				),
				"admin_label" => true,
			),


			array(
				'type' => 'dropdown',
				'heading' => __( 'Data source', 'zytheme' ),
				'param_name' => 'post_type',
				'value' => $postTypesList,
				'group' => esc_html__("Query Source", 'zytheme'),
				'description' => __( 'Select post type for your layout.', 'zytheme' ),
				'admin_label' => true,
			),

			//Post Count
			array(
				"type"			=>	"textfield",
				"class"			=>	"",
				"heading"		=>	esc_html__('Post Count', 'zytheme'),
				"description"	=>  esc_html__('Enter Post Count', 'zytheme'),
				'group' => esc_html__("Query Source", 'zytheme'),
				"param_name"	=>	"postcount",
				"value"			=>	"",
				"admin_label" => true,
			),

			//Post Order By
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__("Post Order By",'zytheme'),
				'group' => esc_html__("Query Source", 'zytheme'),
				"description" => esc_html__("Post Order By",'zytheme'),
				"param_name" => "postorderby",
				"value" => array(
					esc_html__("None Select", 'zytheme') => "none",
					esc_html__("Date", 'zytheme') => 'date',
					esc_html__("Random", 'zytheme') => 'rand',
					esc_html__("Comment Count", 'zytheme') => 'comment_count',
					)
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Display Pagination', 'zytheme' ),
				'group' => esc_html__("Query Source", 'zytheme'),
				'param_name' => 'pagination_post',
				'value' => array(
					__( 'Pagination OFF', 'zytheme' ) => 'pagination-off',
					__( 'Number of Pages', 'zytheme' ) => 'pagination-nav',
					__( 'Buttons', 'zytheme' ) => 'pagination-buttons',

				),
				'description' => __( 'Select display style for pagination.', 'zytheme' ),
				'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard','blog-grid','blog-textual')),
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
				'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard','blog-grid','blog-textual')),
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
				'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard','blog-grid','blog-textual')),
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
				'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard','blog-grid','blog-textual')),
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
				'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard','blog-grid','blog-textual')),
			),

			//Carousel Layout

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (Large Device)", 'zytheme'),
				"param_name" => "carousel_lg",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (small Device)", 'zytheme'),
				"param_name" => "carousel_sm",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel speed", 'zytheme'),
				"param_name" => "carousel_speed",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items space", 'zytheme'),
				"param_name" => "carousel_space",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('blog-carousel'))
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
				'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard','blog-grid','blog-carousel')),
			),

			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__("Show Category",'zytheme'),
				'group' => esc_html__("Content Settings", 'zytheme'),
				"param_name" => "showcat",
				'value' => array( __( 'Yes', 'zytheme' ) => 'yes' ),
				'std' => 'yes',
			  ),

			array(
			  "type" => "checkbox",
			  "class" => "",
			  "heading" => esc_html__("Show Date",'zytheme'),
			  'group' => esc_html__("Content Settings", 'zytheme'),
			  "param_name" => "showdate",
			  'value' => array( __( 'Yes', 'zytheme' ) => 'yes' ),
			'std' => 'yes',
			),

			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__("Show Content",'zytheme'),
				'group' => esc_html__("Content Settings", 'zytheme'),
				"param_name" => "showcontent",
				'value' => array( __( 'Yes', 'zytheme' ) => 'yes' ),
				'std' => 'yes',
			  ),

			array(
			  "type" => "checkbox",
			  "class" => "",
			  "heading" => esc_html__("Show Read More",'zytheme'),
			  'group' => esc_html__("Content Settings", 'zytheme'),
			  "param_name" => "showread",
			  'value' => array( __( 'Yes', 'zytheme' ) => 'yes' ),
			'std' => 'yes',
			),

			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__("Show Author",'zytheme'),
				'group' => esc_html__("Content Settings", 'zytheme'),
				"param_name" => "showauthor",
				'value' => array( __( 'Yes', 'zytheme' ) => 'yes' ),
			  'std' => 'yes',
			  'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard')),
			  ),

			  array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__("Show Comments",'zytheme'),
				'group' => esc_html__("Content Settings", 'zytheme'),
				"param_name" => "showcomments",
				'value' => array( __( 'Yes', 'zytheme' ) => 'yes' ),
			  	'std' => 'yes',
			  	'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard')),
			  ),

			  array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__("Show Read Mintues",'zytheme'),
				'group' => esc_html__("Content Settings", 'zytheme'),
				"param_name" => "showmin",
				'value' => array( __( 'Yes', 'zytheme' ) => 'yes' ),
			  	'std' => 'yes',
			  	'dependency'		=> array('element' => 'modulestyle', 'value' => array('blog-standard')),
			  ),

			array(
				"type"			=>	"textfield",
				"class"			=>	"",
				"heading"		=>	esc_html__('Title Words', 'zytheme'),
				"description"	=>  esc_html__('Enter  Words Count', 'zytheme'),
				'group' => esc_html__("Content Settings", 'zytheme'),
				"param_name"	=>	"title_words",
				"value"			=>	"20",
				"admin_label" => true,
			),

			array(
				"type"			=>	"textfield",
				"class"			=>	"",
				"heading"		=>	esc_html__('Content Words', 'zytheme'),
				"description"	=>  esc_html__('Enter  Words Count', 'zytheme'),
				'group' => esc_html__("Content Settings", 'zytheme'),
				"param_name"	=>	"content_words",
				"value"			=>	"20",
				"admin_label" => true,
				'dependency' => array(
					'element' => 'showcontent',
					'value' => 'yes',
				),
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

function zy_content_grid( $atts, $content = null ) {

	$output = $modulestyle	= $post_type = $postcount = $pagination_post = $column_xs = $column_sm = $column_md = $column_lg =  $carousel_style = $carousel_sm = $carousel_lg	= $carousel_speed = $carousel_space = $carousel_autoplay = $carousel_nav	= $carousel_dots = $carousel_loop = $image_size = $showcat	= $showdate	= $showcontent = $showread =   $showauthor =  $showcomments =  $showmin = $title_words = $content_words = $extra_class = $extra_id	= '';

	$atts = vc_map_get_attributes('zy_content_grid_module', $atts);
	extract($atts);

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
	(!empty($atts['carousel_space'])) ? $carousel_space = $atts['carousel_space'] : $carousel_space = '30';

	// Carousel items speed
	(!empty($atts['carousel_speed'])) ? $carousel_speed = $atts['carousel_speed'] : $carousel_speed = '800';

	global $post;
	$paged = is_front_page() ? get_query_var( 'page', 1 ) : get_query_var( 'paged', 1 );

	// Count Posts Type
	( !empty( $atts['post_type'] ) ) ? $post_type = $atts['post_type'] : $post_type = '';

	// Count Posts Number
	if ( empty( $postcount ) ) $postcount = '3';

	// Get Order By
	( !empty( $atts['postorderby'] ) || $atts['postorderby'] == 'none' ) ? $postorderby = $atts['postorderby'] : $postorderby = 'date';

	// Get Image Size
	(!empty($image_size)) ? $size = $image_size : $size= 'full';

	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';


	//Start Query Breaking Posts
	$args = array(
		'post_type' 						=> $post_type,
		'posts_per_page' 				=> $postcount,
		'post_status'						=> 'publish',
		'orderby'  				    	=> $postorderby,
		'cat' 									=> '',
		'ignore_sticky_posts' 	=> true,
		'paged' 					     => $paged,
		//'nopaging'=> 'true',
		'posts_per_archive_page'=>$postcount,
	);

	$posts = query_posts( $args );

	if ( have_posts() ) :

		// Enqueue Styles and Scripts
		wp_enqueue_script('zyt-owl-carousel' );
		wp_enqueue_style('zyt-owl-carousel');

		$output .= '<div '.$get_extra_id.' class="kolaso_grid blog '.$modulestyle.' '.$pagination_post.''.$get_extra_class.'">';

		if($modulestyle !== 'blog-carousel'):
			$output .= ' <div class="row">';
		endif;


			if($modulestyle == 'blog-carousel'):
				$output .= '<div class="carousel owl-carousel blog-grid'.$dots_class.$nav_class.'"
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

				// Get Thumbnial Path
				if ( get_post_thumbnail_id( get_the_ID()) ) :
					$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size );
					$thumb = '<img src="' . esc_url( $image_url[0] ) . '" class="img-fluid" alt="' . the_title_attribute( array( 'echo' => 0) ) . '">';
				elseif(kolaso_get_option( 'placeholder_img' )):
					$image_url = wp_get_attachment_image_src( kolaso_get_option( 'placeholder_img' ) , $size );
					$thumb = '<img src="' . esc_url( $image_url[0] ) . '" class="img-fluid" alt="'.esc_attr(get_the_title()).'">';
				else :
					$thumb = '<img src="'.get_stylesheet_directory_uri().'/assets/images/thumbnail.jpg" class="img-fluid" alt="'.esc_attr(get_the_title()).'">';
				endif;

				// Query Output

				if($modulestyle != 'blog-carousel'):
				$output .= '<div class="'.$column_xs_class.$column_sm_class.$column_md_class.$column_lg_class.'">';
				endif;

				if($modulestyle == 'blog-grid'):// Blog Grid Layout

					$output .= '<div id="entry-'.get_the_ID().'" class="blog-entry '. join( ' ', get_post_class() ) .'">';
						$output .= ' <div class="entry-img">';
							$output .= '<a href ="'.esc_url(get_permalink()).'" title ="'.esc_attr(the_title_attribute('echo=0')).'">'.$thumb.'</a>';
							if($showcat == 'yes'):
							$output .= '<div class="entry-cat">';
								if ( $atts['post_type'] == 'post' ) :
									$categories = get_the_category( get_the_ID() );//Get Category Posts
									$output .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
								elseif($atts['post_type'] == 'portfolio'):
									$output .= get_the_term_list( $post->ID, 'portfolio_category', ' ', ',', ' ' );
								else:
									$output .= '<a href="' . esc_url( get_term_link( $terms[0]->term_id ) ) . '">' . esc_html( $terms[0]->name ) . '</a>';
								endif;
							$output .= '</div>';
							endif; // Show Category
						$output .= '</div><!-- .entry-img end -->';
						$output .= '<div class="entry-content">';
							if($showdate == 'yes'):
							$output .= '<div class="entry-date">'.get_the_date().'</div>';
							endif; // Show Date
							$output .= '<div class="entry-title">';
								$output .= ' <h4>';
								$output .= (is_sticky()) ? '<i class="fa fa-thumb-tack is-sticky"></i>' : '';
								$output .= '<a href="'.esc_url( get_permalink()).'">'.wp_trim_words( get_the_title(), $title_words, '' ).'</a>';
								$output .= '</h4>';
							$output .= '</div>';
							if($showcontent == 'yes'):
							$output .= '<div class="entry-bio">';
							$output .= '<p>'.wp_trim_words( get_the_content(), $content_words, '' ).'</p>';
							$output .= '</div>';
							endif; // Show Content
							if($showread == 'yes'):
							$output .= '<div class="entry-more">';
								$output .= '<a href="'.esc_url( get_permalink()).'"><i class="fa fa-long-arrow-right"></i><span>'.__('Read More', 'zytheme').'</span></a>';
							$output .= '</div>';
							endif; // Show Read More
						$output .= ' </div><!-- .entry-content end -->';
					$output .= '</div>';

				elseif($modulestyle == 'blog-standard'):// Blog Standard Layout

					$output .= '<div id="entry-'.get_the_ID().'" class="blog-entry '. join( ' ', get_post_class() ) .'">';
						$output .= ' <div class="entry-meta">';
							if($showauthor == 'yes'):

								$output .= '<span class="entry-author">';
								$output .= get_avatar( get_the_author_meta( 'ID' ), 30 );
								$post_author ='<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>';

								$output .='<span> '. __('By: ', 'kolaso') . $post_author . '</span>';
								$output .= '</span>';

							endif;// Show Author
							if($showcat == 'yes'):
							$output .= '<span class="entry-cat">';
								if ( $atts['post_type'] == 'post' ) :
									$categories = get_the_category( get_the_ID() );//Get Category Posts
									$output .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
								elseif($atts['post_type'] == 'portfolio'):
									$output .= get_the_term_list( $post->ID, 'portfolio_category', ' ', ',', ' ' );
								else:
									$output .= '<a href="' . esc_url( get_term_link( $terms[0]->term_id ) ) . '">' . esc_html( $terms[0]->name ) . '</a>';
								endif;
							$output .= '</span>';
							endif; // Show Category
							if($showdate == 'yes'):
								$output .= '<span class="entry-date">'.get_the_date().'</span>';
							endif; // Show Date
							if($showcomments == 'yes'):
								$output .= '<span class="entry-comments">';
									(get_comments_number() > 0) ? $comments = get_comments_number() . __('Comments','zytheme'): $comments = '<a href="'.esc_url( get_permalink()).'#respond">'.__('Leave a comment','zytheme').'</a>';
									$output .= $comments;
								$output .= '</span>';
							endif;// show Comments
							if($showcomments == 'yes'):
								$post = get_post();
								$post_content = $post->post_content;
								$content_count = str_word_count( strip_tags( $post_content ) );
								$reading_minutes = ceil( $content_count / 200 );
								$reading_seconds = ceil( $content_count % 200 / ( 120 / 60 ) );
								( $reading_minutes >= 1 ) ? $reading_estimated_time = $reading_minutes . ' min read' : $reading_estimated_time = $reading_seconds . ' sec read';
								$output .= '<span class="entry-read">' . $reading_estimated_time . '</span>';
							endif;// Show Read Min
						$output .= '</div><!-- .entry-meta end -->';
						$output .= '<div class="entry-title">';
							$output .= ' <h4>';
							$output .= (is_sticky()) ? '<i class="fa fa-thumb-tack is-sticky"></i>' : '';
							$output .= '<a href="'.esc_url( get_permalink()).'">'.wp_trim_words( get_the_title(), $title_words, '' ).'</a>';
							$output .= '</h4>';
						$output .= '</div>';
						$output .= ' <div class="entry-img">';
							$output .= '<a href ="'.esc_url(get_permalink()).'" title ="'.esc_attr(the_title_attribute('echo=0')).'">'.$thumb.'</a>';
						$output .= '</div><!-- .entry-img end -->';
						$output .= '<div class="entry-content">';
							if($showcontent == 'yes'):
							$output .= '<div class="entry-bio">';
							$output .= '<p>'.wp_trim_words( get_the_content(), $content_words, '' ).'</p>';
							$output .= '</div>';
							endif; // Show Content
							if($showread == 'yes'):
							$output .= '<div class="entry-more">';
								$output .= '<a href="'.esc_url( get_permalink()).'"><i class="fa fa-long-arrow-right"></i><span>'.__('Read More', 'zytheme').'</span></a>';
							$output .= '</div>';
							endif; // Show Read More
						$output .= ' </div><!-- .entry-content end -->';
					$output .= '</div>';

				elseif($modulestyle == 'blog-textual'):// Blog Textual Layout

					$output .= '<div id="entry-'.get_the_ID().'" class="blog-entry '. join( ' ', get_post_class() ) .'">';
						if($showcat == 'yes'):
						$output .= '<div class="entry-cat">';
							if ( $atts['post_type'] == 'post' ) :
								$categories = get_the_category( get_the_ID() );//Get Category Posts
								$output .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
							elseif($atts['post_type'] == 'portfolio'):
								$output .= get_the_term_list( $post->ID, 'portfolio_category', ' ', ',', ' ' );
							else:
								$output .= '<a href="' . esc_url( get_term_link( $terms[0]->term_id ) ) . '">' . esc_html( $terms[0]->name ) . '</a>';
							endif;
						$output .= '</div>';
						endif; // Show Category
						$output .= '<div class="entry-content">';
							if($showdate == 'yes'):
							$output .= '<div class="entry-date">'.get_the_date().'</div>';
							endif; // Show Date
							$output .= '<div class="entry-title">';
								$output .= ' <h4>';
								$output .= (is_sticky()) ? '<i class="fa fa-thumb-tack is-sticky"></i>' : '';
								$output .= '<a href="'.esc_url( get_permalink()).'">'.wp_trim_words( get_the_title(), $title_words, '' ).'</a>';
								$output .= '</h4>';
							$output .= '</div>';
							if($showcontent == 'yes'):
							$output .= '<div class="entry-bio">';
							$output .= '<p>'.wp_trim_words( get_the_content(), $content_words, '' ).'</p>';
							$output .= '</div>';
							endif; // Show Content
							if($showread == 'yes'):
							$output .= '<div class="entry-more">';
								$output .= '<a href="'.esc_url( get_permalink()).'"><i class="fa fa-long-arrow-right"></i><span>'.__('Read More', 'zytheme').'</span></a>';
							$output .= '</div>';
							endif; // Show Read More
						$output .= ' </div><!-- .entry-content end -->';
					$output .= '</div>';

				elseif($modulestyle == 'blog-carousel'):// Blog Carousel Layout

					$output .= '<div id="entry-'.get_the_ID().'" class="blog-entry '. join( ' ', get_post_class() ) .'">';
						$output .= ' <div class="entry-img">';
							$output .= '<a href ="'.esc_url(get_permalink()).'" title ="'.esc_attr(the_title_attribute('echo=0')).'">'.$thumb.'</a>';
							if($showcat == 'yes'):
							$output .= '<div class="entry-cat">';
								if ( $atts['post_type'] == 'post' ) :
									$categories = get_the_category( get_the_ID() );//Get Category Posts
									$output .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
								elseif($atts['post_type'] == 'portfolio'):
									$output .= get_the_term_list( $post->ID, 'portfolio_category', ' ', ',', ' ' );
								else:
									$output .= '<a href="' . esc_url( get_term_link( $terms[0]->term_id ) ) . '">' . esc_html( $terms[0]->name ) . '</a>';
								endif;
							$output .= '</div>';
							endif; // Show Category
						$output .= '</div><!-- .entry-img end -->';
						$output .= '<div class="entry-content">';
							if($showdate == 'yes'):
							$output .= '<div class="entry-date">'.get_the_date().'</div>';
							endif; // Show Date
							$output .= '<div class="entry-title">';
								$output .= ' <h4>';
								$output .= (is_sticky()) ? '<i class="fa fa-thumb-tack is-sticky"></i>' : '';
								$output .= '<a href="'.esc_url( get_permalink()).'">'.wp_trim_words( get_the_title(), $title_words, '' ).'</a>';
								$output .= '</h4>';
							$output .= '</div>';
							if($showcontent == 'yes'):
							$output .= '<div class="entry-bio">';
							$output .= '<p>'.wp_trim_words( get_the_content(), $content_words, '' ).'</p>';
							$output .= '</div>';
							endif; // Show Content
							if($showread == 'yes'):
							$output .= '<div class="entry-more">';
								$output .= '<a href="'.esc_url( get_permalink()).'"><i class="fa fa-long-arrow-right"></i><span>'.__('Read More', 'zytheme').'</span></a>';
							$output .= '</div>';
							endif; // Show Read More
						$output .= ' </div><!-- .entry-content end -->';
					$output .= '</div>';

				endif;

				if($modulestyle != 'blog-carousel'):
					$output .= '</div>'; // End .col
				endif;

			endwhile; // While have Posts

			if($modulestyle == 'blog-carousel'):
				$output .= '</div>'; // End .carousel
			endif;

			wp_reset_postdata();

			if($modulestyle !== 'blog-carousel'):

			$output .= '</div>'; // .row content
			endif;

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
							'mid_size' => 1,
								'screen_reader_text' => esc_html__('', 'zytheme'),
						'prev_text' => '<i class="fa fa-angle-left"></i>',
						'next_text' => '<i class="fa fa-angle-right"></i>',
							)
						);
					$output .= '</div>';
				$output .= '</div>';
			endif;

		$output .= '</div>'; // #content-block
	endif; // have Posts

	wp_reset_query();

	return $output;

}
add_shortcode("zy_content_grid_module", "zy_content_grid");