<?php

/**
 * Fired during plugin activation
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/includes
 * @author     Ayman Fikry <ayman@zytheme.com>
 */
class Zytheme_Core_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {


		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-zytheme-core-post_types.php';
		//$plugin_post_types = new Zytheme_Core_Post_Types();

		//$plugin_post_types->create_custom_post_type();
	
		/**
         * This only required if custom post type has rewrite!
		 */
		
        flush_rewrite_rules();
	}

}
