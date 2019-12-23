<?php
/**
* Hooks
*/

add_action ('admin_menu','Zytheme_admin_menus');
add_action('admin_bar_menu', 'Zytheme_admin_menus_bar', 2000);

/**
* Create Menu
*/


function Zytheme_admin_menus(){
    $current_theme = wp_get_theme();
    $theme_name = $current_theme->get('Name');
 
     $menu_prefix = 'zytheme';
 
     $top_menu_item = $menu_prefix . '_dashboard';
 
     $parent_slug = $menu_prefix . '-dashboard';
    /**
    * Main Menu
    */

    add_menu_page( '', $theme_name .' Theme', 'manage_options',$parent_slug, $top_menu_item, 'dashicons-smiley',59);

    /**
    * Submenu Items
    */
    add_submenu_page($parent_slug , 'Dashbaord', 'Dashboard', 'manage_options', $parent_slug ,$top_menu_item);
    add_submenu_page($parent_slug , 'Install Plugins', 'Install Plugins', 'manage_options', 'themes.php?page=tgmpa-install-plugins');

}

function Zytheme_admin_menus_bar(){

    global $wp_admin_bar;

    $current_theme = wp_get_theme();
    $theme_name = $current_theme->get('Name');
    $menu_title= '<span class="ab-icon dashicons dashicons-smiley"></span> ' .$theme_name;


	$menu_id = 'zytheme-dashbaord';
	$wp_admin_bar->add_menu(array('id' => $menu_id, 'title' => $menu_title , 'href' => admin_url( 'admin.php?page=zytheme-dashboard' )));
    $wp_admin_bar->add_menu(array('parent' => $menu_id, 'title' => __('Theme Options'), 'id' => 'zytheme-options', 'href' => admin_url( 'admin.php?page=zytheme-options' ), 'meta' => ''));
    $wp_admin_bar->add_menu(array('parent' => $menu_id, 'title' => __('Documentation'), 'id' => 'zytheme-documentation', 'href' => admin_url( 'admin.php?page=zytheme-dashboard&section=documentation' ), 'meta' => ''));
    $wp_admin_bar->add_menu(array('parent' => $menu_id, 'title' => __('Support'), 'id' => 'zytheme-support', 'href' => admin_url( 'admin.php?page=zytheme-dashboard&section=support' ), 'meta' => ''));
    $wp_admin_bar->add_menu(array('parent' => $menu_id, 'title' => __('Hire Us'), 'id' => 'zytheme-hireus', 'href' => admin_url( 'admin.php?page=zytheme-dashboard&section=hireus' ), 'meta' => ''));


}

 function zytheme_dashboard(){

    $section = ( ! empty( $_GET['section'] ) ) ? $_GET['section'] : '';

    include_once plugin_dir_path( __FILE__  ). '/views/header.php';

      // safely include pages
      switch ( $section ) {

        case 'documentation':
        include_once plugin_dir_path( __FILE__  ). '/views/documentation.php';
        break;

        case 'relnotes':
        include_once plugin_dir_path( __FILE__  ). '/views/relnotes.php';
        break;

        case 'support':
        include_once plugin_dir_path( __FILE__  ). '/views/support.php';
        break;

        case 'hireus':
        include_once plugin_dir_path( __FILE__  ). '/views/hireus.php';
        break;

        default:
        include_once plugin_dir_path( __FILE__  ). '/views/quickstart.php';
        break;

      }

      include_once plugin_dir_path( __FILE__  ). '/views/footer.php';

}