<?php
 /**
 * Custom Admin Login Page Background
 *
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme
 * @subpackage Kolaso
 */

function kolaso_admin_custom_login() {
	
	if( kolaso_get_option( 'login_background' )  ){
		$login_background = kolaso_get_option( 'login_background' );
		//Check Color
		!empty($login_background['background-color']) ? $login_background_color = 'background-color:'.$login_background['background-color'].';': $login_background_color = '';
		//Check Image
		!empty($login_background['background-image']['url'])? $login_background_image = 'background-image:url('.$login_background['background-image']['url'].');': $login_background_image = '';
		//Check Repeat
		!empty($login_background['background-repeat'])? $login_background_repeat = 'background-repeat:'.$login_background['background-repeat'].';': $login_background_repeat = '';
		//Check Position
		!empty($login_background['background-position'])? $login_background_position = 'background-position:'.$login_background['background-position'].';': $login_background_position = '';
		//Check Attachment
		!empty($login_background['background-attachment'])? $login_background_attachment = 'background-attachment:'.$login_background['background-attachment'].';': $login_background_attachment = '';
		//Check Size
		!empty($login_background['background-size'])? $login_background_size = 'background-size:'.$login_background['background-size'].';': $login_background_size = '';
		
		$admin_login_style="<style type='text/css'>.login{".$login_background_color.$login_background_image.$login_background_repeat.$login_background_position.$login_background_attachment.$login_background_size."}</style>";
	}else{
		$admin_login_style = '';
	}
	
echo do_shortcode( $admin_login_style);
}

add_action('login_head', 'kolaso_admin_custom_login');

 /**
 * Custom Admin Login Page URL
 *
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme
 * @subpackage Kolaso
 */

function kolaso_admin_login_url() {
	if( kolaso_get_option( 'login_url' )  ){
		$login_url = kolaso_get_option( 'login_url' );
	}else{
		$login_url = esc_url( home_url() ) ;
	}
return $login_url;
}

add_filter( 'login_headerurl', 'kolaso_admin_login_url' );

 /**
 * Custom Admin Login Page Title
 *
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme
 * @subpackage Kolaso
 */

function kolaso_admin_login_logo_url_title() {
return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'kolaso_admin_login_logo_url_title' );

 /**
 * Custom Admin Login Page Logo
 *
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Zytheme
 * @subpackage Kolaso
 */
 
function kolaso_admin_login_logo() {
	
	if ( !empty( kolaso_get_option( 'login_logo' ) ) ) {
			$login_logo = '<style type="text/css">h1 a {background-image: url('.kolaso_get_option( 'login_logo' ).') !important;height: auto!important; }</style>' ;
		} else {
			$login_logo = '';
		}
	
echo do_shortcode($login_logo);
}

add_action('login_head', 'kolaso_admin_login_logo');