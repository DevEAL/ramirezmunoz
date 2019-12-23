<?php
function ztyheme_register_portfolio() {

	/**
	 * Post Type: Portfolio.
	 */

	$labels = array(
		"name" => __( "Portfolio", 'zytheme' ),
		"singular_name" => __( "Portfolio", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Portfolio", 'zytheme' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-building",
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "portfolio_category" ),
	);

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'ztyheme_register_portfolio' );

function ztyheme_register_taxonomy_portfolio_categories() {

	/**
	 * Taxonomy: Portfolio Categories.
	 */

	$labels = array(
		"name" => __( "Portfolio Categories", 'zytheme' ),
		"singular_name" => __( "Portfolio Categories", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Portfolio Categories", 'zytheme' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Portfolio Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'portfolio_category', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "portfolio_category", array( "portfolio" ), $args );
}

add_action( 'init', 'ztyheme_register_taxonomy_portfolio_categories' );


function zytheme_register_client() {

	/**
	 * Post Type: Client.
	 */

	$labels = array(
		"name" => __( "Client", 'zytheme' ),
		"singular_name" => __( "Client", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Client", 'zytheme' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "client", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => array( "title", "thumbnail","editor" ),
		"taxonomies" => array( "clients_category" ),
	);

	register_post_type( "client", $args );
}

add_action( 'init', 'zytheme_register_client' );

function zytheme_register_taxonomy_clients_category() {

	/**
	 * Taxonomy: Client Categories.
	 */

	$labels = array(
		"name" => __( "Client Categories", 'zytheme' ),
		"singular_name" => __( "Client Categories", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Client Categories", 'zytheme' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Client Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'clients_category', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "clients_category", array( "client" ), $args );
}

add_action( 'init', 'zytheme_register_taxonomy_clients_category' );

function ztyheme_register_team() {

	/**
	 * Post Type: Team.
	 */

	$labels = array(
		"name" => __( "Team", 'zytheme' ),
		"singular_name" => __( "Team", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Team", 'zytheme' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "team", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-businessman",
		"supports" => array( "title", "thumbnail" ),
		"taxonomies" => array( "team_categories" ),
	);

	register_post_type( "team", $args );
}

add_action( 'init', 'ztyheme_register_team' );


function ztyheme_register_taxonomy_team_categories() {

	/**
	 * Taxonomy: Team Categories.
	 */

	$labels = array(
		"name" => __( "Team Categories", 'zytheme' ),
		"singular_name" => __( "Team Categories", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Team Categories", 'zytheme' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Team Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'team_categories', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "team_categories", array( "team" ), $args );
}

add_action( 'init', 'ztyheme_register_taxonomy_team_categories' );


function zytheme_register_testimonial() {

	/**
	 * Post Type: Testimonial.
	 */

	$labels = array(
		"name" => __( "Testimonial", 'zytheme' ),
		"singular_name" => __( "Testimonial", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Testimonial", 'zytheme' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonial", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-chat",
		"supports" => array( "title","thumbnail"),
		"taxonomies" => array( "testimonial_categories" ),
	);

	register_post_type( "testimonial", $args );
}

add_action( 'init', 'zytheme_register_testimonial' );


function zytheme_register_taxonomy_testimonial_categories() {

	/**
	 * Taxonomy: Testimonial Categories.
	 */

	$labels = array(
		"name" => __( "Testimonial Categories", 'zytheme' ),
		"singular_name" => __( "Testimonial Categories", 'zytheme' ),
	);

	$args = array(
		"label" => __( "Testimonial Categories", 'zytheme' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Testimonial Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'testimonial_categories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
		'show_admin_column'=> true,
	);
	register_taxonomy( "testimonial_categories", array( "testimonial" ), $args );
}

add_action( 'init', 'zytheme_register_taxonomy_testimonial_categories' );
?>