<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/admin
 * @author     Ayman Fikry <ayman@zytheme.com>
 */
class Zytheme_Core_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Zytheme_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Zytheme_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/zytheme-core-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name .'-vcstyle', plugin_dir_url( __FILE__ ) . 'css/vc-style.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name .'-select2', plugin_dir_url( __FILE__ ) . 'css/select2.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name .'-selectize', plugin_dir_url( __FILE__ ) . 'css/selectize.default.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Zytheme_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Zytheme_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/zytheme-core-admin.js', array( 'jquery' ), $this->version, true );
	}

	/**
	 * Register the JavaScript for VC Composer.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_vc_scripts() {

		wp_enqueue_script( $this->plugin_name .'-select2', plugin_dir_url( __FILE__ ) . 'js/zytheme_vc_select2.min.js', array( 'jquery' ), $this->version, true);
		wp_enqueue_script( $this->plugin_name .'-selectize', plugin_dir_url( __FILE__ ) . 'js/zytheme_vc_selectize.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name .'-custom', plugin_dir_url( __FILE__ ) . 'js/zytheme_vc_image-picker.js', array( 'jquery' ), $this->version, true );
	}


	/**
	 * Add social network accounts to user profile
	 *
	 * @since    1.0.0
	 */
	public function Zytheme_modify_contact_methods( $profile_fields ) {
		/**
		 * Add new fields
		 */
		$profile_fields[ 'twitter' ] = 'Twitter URL';
		$profile_fields[ 'facebook' ] = 'Facebook URL';
		$profile_fields[ 'linkedin' ] = 'Linkedin URL';
		$profile_fields[ 'instagram' ] = 'Instagram URL';
		$profile_fields[ 'behance' ] = 'Behance URL';
		$profile_fields[ 'dribbble' ] = 'Dribbble URL';
		$profile_fields[ 'google' ] = 'Google Plus URL';
	
		return $profile_fields;
	}

	/**
	 * Check if interact theme is actived
	 *
	 * @since    1.0.0
	 */
	public function Zytheme_check_theme_Active(){
		$screen = get_current_screen();// get current screen
		if ( !defined('ZYT_THEME_ACTIVATED') || ZYT_THEME_ACTIVATED !== true ) :
			echo'<div class="updated">';
				echo '<p><strong>';
				_e('Please activate the Kolaso theme to use kolaso core plugin.', 'zytheme');
				echo '</strong>';
				if ($screen -> base != 'themes'): 
					echo ' <a href="'.esc_url(admin_url('themes.php')).'">'.esc_html('Activate theme', 'zytheme').'</a>';
				endif;
				echo '</p>';			
			echo '</div>';
      	endif;
	}

	public function Zytheme_vc_integration() {
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/vc_composer/vc_helper.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/vc_composer/vc_params.php';

	  }

	  public function Zytheme_init_vc() {
		global $vc_manager;
		$vc_manager->setIsAsTheme();
		$vc_manager->disableUpdater();
		$list = array( 'page', 'post');
		$vc_manager->setEditorDefaultPostTypes( $list );
		$vc_manager->setEditorPostTypes( $list ); //this is required after VC update (probably from vc 4.5 version)
		$vc_manager->automapper()->setDisabled();
	  }

	  public function Zytheme_extra_vc_init() {
		$shortcodes_path = plugin_dir_path( __FILE__ ) . 'shortcodes/';
	
		// VC shortcodes
		$dh = opendir( $shortcodes_path );
		while ( false !== ( $filename = readdir( $dh ) ) ) {
		  if ( substr( $filename, 0, 1) != '_' && strrpos( $filename, '.' ) === false ) {
			include_once $shortcodes_path . $filename . '/zy_' . $filename . '.php';
		  }
		}
		// Custom setting for default row
		$EnableOverlay = array(
				'type'          => 'checkbox',
				'heading'       => esc_html__('Row Overlay', 'kolaso-core'),
				'param_name'    => 'enable_overlay',
				'group'         => esc_html__('Additional', 'kolaso-core'),
				'description'   => esc_html__('Enable overlay on your row. You can implement this option if you use video background or Image background to clarify your content.', 'kolaso-core'),
				'value'         => array( esc_html__('Enable Overlay', 'kolaso-core') => 'yes' )
			);
		vc_update_shortcode_param( 'vc_row', $EnableOverlay );
	
		$OverlayColor = array(
		  'type'          => 'colorpicker',
		  'heading'       => esc_html__('Overlay Color', 'kolaso-core'),
		  'param_name'    => 'overlay_color',
		  'group'         => esc_html__('Additional', 'kolaso-core'),
		  'dependency'    => Array('element' => "enable_overlay", 'value' => array('yes'))
		);
		vc_update_shortcode_param( 'vc_row', $OverlayColor );
	
	  }
}
