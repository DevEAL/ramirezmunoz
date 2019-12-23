<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              zytheme.com
 * @since             1.0.0
 * @package           kolaso_Core
 *
 * @wordpress-plugin
 * Plugin Name:       kolaso core
 * Plugin URI:        zytheme.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ayman Fikry
 * Author URI:        zytheme.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kolaso-core
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_VERSION', '1.0.0' );
define( 'PLUGIN_NAME', 'kolaso core' );

$current_theme = wp_get_theme();
$theme_name = $current_theme->get('Name');
/**
 * Define Contstants.
 */
define('ZYTHEME_ROOT', plugin_dir_path( __FILE__ ));
define('ZYTHEME_URL', plugin_dir_url( __FILE__ ));
define('ZYTHEME_SHORTCODES', ZYTHEME_URL . 'admin/shortcodes/');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-zytheme-core-activator.php
 */
function activate_zytheme_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zytheme-core-activator.php';
	Zytheme_Core_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-zytheme-core-deactivator.php
 */
function deactivate_zytheme_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zytheme-core-deactivator.php';
	Zytheme_Core_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_zytheme_core' );
register_deactivation_hook( __FILE__, 'deactivate_zytheme_core' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__  ). 'includes/class-zytheme-core.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_zytheme_core() {

	$plugin = new Zytheme_Core();
	$plugin->run();

}
run_zytheme_core();



