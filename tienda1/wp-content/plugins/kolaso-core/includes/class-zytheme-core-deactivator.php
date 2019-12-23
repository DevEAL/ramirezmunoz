<?php

/**
 * Fired during plugin deactivation
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/includes
 * @author     Ayman Fikry <ayman@zytheme.com>
 */
class Zytheme_Core_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		/**
         * This only required if custom post type has rewrite!
         */
        flush_rewrite_rules();

	}

}
