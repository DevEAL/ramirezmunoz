<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/includes
 * @author     Ayman Fikry <ayman@zytheme.com>
 */
class Zytheme_Core {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Zytheme_Core_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'PLUGIN_NAME_VERSION' ) ) {
			$this->version = PLUGIN_NAME_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'zytheme-core';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Zytheme_Core_Loader. Orchestrates the hooks of the plugin.
	 * - Zytheme_Core_i18n. Defines internationalization functionality.
	 * - Zytheme_Core_Admin. Defines all hooks for the admin area.
	 * - Zytheme_Core_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-zytheme-core-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-zytheme-core-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-zytheme-core-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-zytheme-core-public.php';

		/**
		 * The class responsible for register Custom Post Types
		 * core plugin.
		 */
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-zytheme-core-post_types.php';

		/**
		 * The class responsible for register Custom Post Types
		 * core plugin.
		 */
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-zytheme-core-vc_template_editor.php';

		/**
		 * The class responsible for theme options
		 * side of the admin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/panel/framework.php';

		/**
		 * The class responsible for widgets
		 * side of the admin.
		 */
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/widgets/widgets.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/post_types.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/widgets_custom.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/dashboard/dashboard.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/demo-import/import.php';

		$this->loader = new Zytheme_Core_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Zytheme_Core_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Zytheme_Core_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Zytheme_Core_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_action( 'admin_print_scripts-post.php', $plugin_admin, 'enqueue_vc_scripts', 9999  );
		$this->loader->add_action( 'admin_print_scripts-post-new.php', $plugin_admin, 'enqueue_vc_scripts' , 9999 );
		

		//$plugin_post_types = new Zytheme_Core_Post_Types();

		

		//$this->loader->add_action( 'init', $plugin_post_types, 'create_custom_post_type', 999 );

		$this->loader->add_filter( 'user_contactmethods', $plugin_admin, 'Zytheme_modify_contact_methods' );

		//$this->loader->add_action( 'admin_bar_menu', $plugin_admin, 'Zytheme_create_adminbar_menu', 2000 );

		//$this->loader->add_action( 'admin_menu', $plugin_admin, 'Zytheme_admin_menus', '','' );

		$this->loader->add_action( 'admin_notices', $plugin_admin, 'Zytheme_check_theme_Active' );

		//$this->loader->add_action( 'init', $plugin_admin, 'zy_about_page' );


		if (class_exists('Vc_Manager')) {

			$this->loader->add_action( 'init', $plugin_admin, 'Zytheme_extra_vc_init', 999 );

			//$this->loader->add_action( 'init', $plugin_admin, 'Zytheme_init_vc' , 999);

			$this->loader->add_action( 'init', $plugin_admin, 'Zytheme_vc_integration' , 999);

			//$this->loader->add_action( 'init', $plugin_admin, 'Zytheme_include_vc_templates' , 999);

		}
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Zytheme_Core_Public( $this->get_plugin_name(), $this->get_version() );

		// $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		// $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Zytheme_Core_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
