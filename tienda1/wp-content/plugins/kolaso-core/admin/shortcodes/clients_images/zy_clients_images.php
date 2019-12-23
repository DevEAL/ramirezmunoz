<?php
/**
 * Images Clients Elements
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/admin/shortcodes
 */

if(function_exists('vc_map')):

	$client_categories = get_terms("clients_category");
	$client_categories_array = array();
	$client_categories_array[__("All Categories", 'zytheme')] = "-";
	foreach($client_categories as $client_category) {
		$client_categories_array[$client_category->name] =  $client_category->term_id;
	}
	// ==========================================================================================
	// Clients Images Style
	// ==========================================================================================

	vc_map( array(
		"name" 			=> esc_html__("Clients", 'zytheme'),
		"base" 			=> "zy_clients_module",
		"class" 		=> "",
		"category" 		=> esc_html__("Kolaso", 'kolaso'),
		"icon"      	=> "fa fa-user",
		"description" 	=>esc_html__( 'clients images block.','zytheme'),
		"params"		=> array(
			array(
				"type"			=> "radio_image_select",
				"heading"		=> esc_html__("Select Layout Template", "zytheme"),
				"param_name"	=> "modulestyle",
				"simple_mode"	=> false,
				"options"		=> array (
					"carousel"		=> array (
						"tooltip"		=> esc_attr__("Carousel Style", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'clients_images/preview/style-1.jpg',
					),
					"grid"		=> array (
						"tooltip"		=> esc_attr__("Grid Style", "zytheme"),
						"src"				=> ZYTHEME_SHORTCODES .'clients_images/preview/style-2.jpg',
					),
				),
				// "value" => "clients-1",
				"admin_label" => true,
			),

			//By Category Select
			array(
		    "type" => "dropdown",
		    "heading" => esc_html__("Client Categories", 'zytheme'),
				"description" => esc_html__("Which categories would you like to show?", 'zytheme'),
				'group' => esc_html__("Client Query", 'zytheme'),
		    "param_name" => "cat",
		    "value" => $client_categories_array,
			),

			array(
				"type"			=>	"number",
				"class"			=>	"",
				"heading"		=>	esc_html__('Clients Count', 'zytheme'),
				"description"	=>  esc_html__('Number Of Items', 'zytheme'),
				"param_name"	=>	"postcount",
				'group' => esc_html__("Client Query", 'zytheme'),
				'min' => 1,
				"value"			=>	"",
				"admin_label" => true,
			),

			//Carousel Layout

			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (Large Device)", 'zytheme'),
				"param_name" => "carousel_lg",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items number scroll (small Device)", 'zytheme'),
				"param_name" => "carousel_sm",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel speed", 'zytheme'),
				"param_name" => "carousel_speed",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Carousel items space", 'zytheme'),
				"param_name" => "carousel_space",
				"value" => "",
				'group' => esc_html__("Carousel Settings", 'zytheme'),
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('carousel'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('grid'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('grid'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('grid'))
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
				'dependency' => Array('element' => "modulestyle", 'value' => array('grid'))
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

function zy_clients( $atts, $content = null ) {
	$output = $modulestyle	= $list_fields	= $postcount = $cat = $block_title	= $link	= $carousel_style = $carousel_sm = $carousel_lg	= $carousel_speed	= $carousel_space	= $carousel_autoplay	= $carousel_nav	= $carousel_dots	= $carousel_loop = $column_xs = $column_sm = $column_md = $column_lg = $extra_class	= $extra_id	= '';

	$atts = vc_map_get_attributes('zy_clients_module', $atts);
	extract($atts);
	
	$list_fields = (array) vc_param_group_parse_atts($list_fields);

	// Carousel Count
	( !empty( $atts['postcount'] ) ) ? $postcount = $atts['postcount'] : $postcount = "";

	// Carousel has category
	( !empty( $atts['cat'] ) ) ?  $postcat = $atts['cat'] : $postcat = "";

	// Carousel has dots
	($carousel_dots=='true') ? $dots_class = " carousel-dots" : $dots_class = "" ;


	// Carousel has nav
	($carousel_nav=='true') ?  $nav_class = " carousel-navs" : $nav_class = "";

	// Carousel items large device
	(!empty($atts['carousel_lg'])) ? $carousel_lg = $atts['carousel_lg'] : $carousel_lg = '5';

	// Carousel items smal device
	(!empty($atts['carousel_sm'])) ? $carousel_sm = $atts['carousel_sm'] : $carousel_sm = '2';

	// Carousel items space
	(!empty($atts['carousel_space'])) ? $carousel_space = $atts['carousel_space'] : $carousel_space = '0';

	// Carousel items speed
	(!empty($atts['carousel_speed'])) ? $carousel_speed = $atts['carousel_speed'] : $carousel_speed = '800';
	
	// Check Heading has ID
	(!empty($extra_id)) ? $get_extra_id= 'id="'.$extra_id.'"' : $get_extra_id=''; 
	
	// Check Heading has Class
	(!empty($extra_class)) ? $get_extra_class= ' '.$extra_class : $get_extra_class='';

	// Get Extra Small Column
	($column_xs) ? $column_xs_class = 'col-'. (12/$column_xs) : $column_xs_class = 'col-12';

	// Get Small Column
	($column_sm) ? $column_sm_class = ' col-sm-'. (12/$column_sm) : $column_sm_class = ' col-sm-6';

	// Get Medium Column
	($column_md) ? $column_md_class = ' col-md-'. (12/$column_md) : $column_md_class = ' col-md-4';

	// Get Large Column
	($column_lg) ? $column_lg_class = ' col-lg-'.(12/$column_lg) : $column_lg_class = ' col-lg-4';


	// ==========================================================================================
	// Module Images Clients Elements
	// ==========================================================================================

	if( strstr( $atts['modulestyle'], "carousel" ) ) {

		// Enqueue Styles and Scripts
		wp_enqueue_script('zyt-owl-carousel' );
		wp_enqueue_style('zyt-owl-carousel');

		//Start Query Images Clients
		$client_args = array(
			'post_status'						=> 'publish',
			'posts_per_page' 				=> $postcount,
			'ignore_sticky_posts' 	=> true,
			'post_type' 						=> 'client'
		);

		if (!empty($cat) && $cat != '-') {
			$client_args = wp_parse_args(
				array(
					'tax_query' => array(
				    array(
				    'taxonomy' => 'clients_category',
				    'field' => 'term_id',
				    'terms' => $postcat,
				     )
				  ),
				)
			, $client_args );
		}

	   $output .= '<div '.$get_extra_id.' class="kolaso_clients clients clients-'.$modulestyle.''.$get_extra_class.'">';
			$output .= '<div class="clients-wrap text-center carousel owl-carousel'.$dots_class.$nav_class.'"
			data-slide="'.$carousel_lg.'"
			data-slide-rs="'.$carousel_sm.'"
			data-autoplay="'.$carousel_autoplay.'"
			data-nav="'.$carousel_nav.'"
			data-dots="'.$carousel_dots.'"
			data-space="'.$carousel_space.'"
			data-loop="'.$carousel_loop.'"
			data-speed="'.$carousel_speed.'">';

				//Start Query
				$wp_query_args_client = new WP_Query( $client_args );
				while ( $wp_query_args_client->have_posts() ) :
				$wp_query_args_client->the_post();

				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size = 'full' );
				$image = '<img class="img-fluid" src="' . esc_url( $image_url[0] ) . '" alt="' . the_title_attribute( array( 'echo' => 0) ) . '" />';

				$output .= '<div class="client-img">'. $image . '</div>';
				endwhile;
				wp_reset_postdata();

			$output .= '</div>';

	   $output .= '</div>';

		 return $output;

	}

	// ==========================================================================================
	// Module Images Clients Elements
	// ==========================================================================================

	 elseif (strstr( $atts['modulestyle'], "grid" )) {

		//Start Query Images Clients
		$client_args = array(
			'post_status'						=> 'publish',
			'posts_per_page' 				=> $postcount,
			'ignore_sticky_posts' 	=> true,
			'post_type' 						=> 'client'
		);

		if (!empty($cat) && $cat != '-') {
			$client_args = wp_parse_args(
				array(
					'tax_query' => array(
				    array(
				    'taxonomy' => 'clients_category',
				    'field' => 'term_id',
				    'terms' => $postcat,
				     )
				  ),
				)
			, $client_args );
		}

	   $output .= '<div '.$get_extra_id.' class="kolaso_clients clients clients-'.$modulestyle.''.$get_extra_class.'">';
			$output .= '<div class="clients-wrap row">';

				//Start Query
				$wp_query_args_client = new WP_Query( $client_args );
				while ( $wp_query_args_client->have_posts() ) :
				$wp_query_args_client->the_post();

				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $size = 'full' );
				$image = '<img class="img-fluid" src="' . esc_url( $image_url[0] ) . '" alt="' . the_title_attribute( array( 'echo' => 0) ) . '" />';

				$output .= '<div class="'.$column_xs_class.$column_sm_class.$column_md_class.$column_lg_class.'">';
					$output .= '<div class="client-img">'. $image . '</div>';
				$output .= '</div>';
				endwhile;
				wp_reset_postdata();

			$output .= '</div>';

	   $output .= '</div>';

	   return $output;

	}

}
add_shortcode("zy_clients_module", "zy_clients");
