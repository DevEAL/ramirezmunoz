<?php

require_once( 'plugin/one-click-demo-import.php' ); 

// Disable generation of smaller images (thumbnails) during the content import
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

// Disable the branding notice
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/* Change Default settings*/
function zy_plugin_page_setup( $default_settings ) {
	$current_theme = wp_get_theme();
	$default_settings['page_title']  =  	$current_theme->get( 'Name' ) . esc_html__( ' Demo Import' , 'kolaso' );
	$default_settings['menu_title']  = esc_html__( 'Import Demo Data' , 'kolaso' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'zytheme-demo-import';
	$default_settings['parent_slug'] = 'zytheme-dashboard';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'zy_plugin_page_setup' );


function zy_plugin_page_title($plugin_title) {
	$plugin_title = '<h1 class="ocdi__title  dashicons-before  dashicons-upload">Kolaso Demo Importer</h1>';
	return $plugin_title;
}
add_filter( 'pt-ocdi/plugin_page_title', 'zy_plugin_page_title' );

function ocdi_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text">This is a custom text added to this plugin intro text.</div>';

	return $default_text;
}
//add_filter( 'pt-ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );

/**
 * Adding local_import_json and import_json param supports.
 */


function ocdi_change_time_of_single_ajax_call() {
	return 10;
}
//add_action( 'pt-ocdi/time_for_one_ajax_call', 'ocdi_change_time_of_single_ajax_call' );

/**
 * Adding local_import_json and import_json param supports.
 */

if ( ! function_exists( 'zy_after_content_import_execution' ) ) {
	function zy_after_content_import_execution( $selected_import_files, $import_files, $selected_index ) {
  
	  $downloader = new OCDI\Downloader();
  
	  if( ! empty( $import_files[$selected_index]['import_json'] ) ) {
  
		foreach( $import_files[$selected_index]['import_json'] as $index => $import ) {
		  $file_path = $downloader->download_file( $import['file_url'], 'demo-import-file-'. $index .'-'. date( 'Y-m-d__H-i-s' ) .'.json' );
		  $file_raw  = OCDI\Helpers::data_from_file( $file_path );
		  update_option( $import['option_name'], json_decode( $file_raw, true ) );
		}
  
	  } else if( ! empty( $import_files[$selected_index]['local_import_json'] ) ) {
  
		foreach( $import_files[$selected_index]['local_import_json'] as $index => $import ) {
		  $file_path = $import['file_path'];
		  $file_raw  = OCDI\Helpers::data_from_file( $file_path );
		  update_option( $import['option_name'], json_decode( $file_raw, true ) );
		}
  
	  }
  
	}
	add_action('pt-ocdi/after_content_import_execution', 'zy_after_content_import_execution', 3, 99 );
  }