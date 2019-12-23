<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Kolaso functions and definitions
 *
 * @link       zytheme.com
 * @since      1.0.0
 *
 * @package    Kolaso
 * @subpackage kolaso/framework
 * @author     Ayman Fikry <ayman@zytheme.com>
 */

// [year] shortcode => 2018
function kolaso_year_shortcode()
{
    return date('Y');
}
add_shortcode('year', 'kolaso_year_shortcode');

// [copy] shortcode => ©
function kolaso_copyright_shortcode()
{return '&copy;';}
add_shortcode('copy', 'kolaso_copyright_shortcode');

// [year-to] shortcode => 2009 - 2018

function kolaso_year_from_to_shortcode(){
    global $wpdb;
    $copyright_dates = $wpdb->get_results(" SELECT YEAR(min(post_date_gmt)) AS firstdate, YEAR(max(post_date_gmt)) AS lastdate FROM $wpdb->posts WHERE post_status = 'publish' ");
    $output = '';
    if ($copyright_dates) {
        $copyright = $copyright_dates[0]->firstdate;
        if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}

add_shortcode('year-from-to', 'kolaso_year_from_to_shortcode');

// [site] shortcode => site url and name
function kolaso_site_shortcode()
{
    $site = '<a href="'.home_url().'" title="'.get_bloginfo('name').'">'.get_bloginfo('name').'</a>';
    return $site;

}
add_shortcode('site', 'kolaso_site_shortcode');
// [name] shortcode => site name

function kolaso_name_shortcode()
{return get_bloginfo('name');}
add_shortcode('name', 'kolaso_name_shortcode');

// [developer] shortcode => Developing Company


function kolaso_developer_shortcode()
{
    return __('<a href="http://www.zytheme.com">Zytheme</a>','kolaso');
}
add_shortcode('developer', 'kolaso_developer_shortcode');


//Iframe Facebook

function add_iframe_facebook($atts) {
    extract(shortcode_atts(array(
    'src' => '/'
    ), $atts));
   $iframe=  '<iframe src="https://www.facebook.com/plugins/page.php?href='.$src.'&tabs&width=270&height=181&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="100%" height="181" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>';
  return $iframe;
}
add_shortcode('iframe_facebok', 'add_iframe_facebook');
