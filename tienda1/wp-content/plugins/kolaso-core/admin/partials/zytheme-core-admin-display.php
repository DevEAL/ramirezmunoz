<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme_Core
 * @subpackage Zytheme_Core/admin/partials
 */

 function Zytheme_admin_menus(){

    $current_theme = wp_get_theme();
    $theme_name = $current_theme->get('Name');
    /**
     * Main Menu
     */

    $menu_prefix = 'zy_';

    $top_menu_item = $menu_prefix . 'dashboard';
    add_menu_page( '', $theme_name .' Theme', 'manage_options', $top_menu_item, $top_menu_item, 'dashicons-smiley',59);

    //add_menu_page($menu_title, $capability, $menu_slug, $function, $icon_url, $position);

    /**
     * Submenu Items
     */
    add_submenu_page($top_menu_item , 'About', 'About', 'manage_options', $top_menu_item , $top_menu_item);
    add_submenu_page($top_menu_item , 'Install Plugins', 'Install Plugins', 'manage_options', 'themes.php?page=tgmpa-install-plugins');

    //add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);

}


