<?php

function kolaso_child_enqueue_styles()
{
    $parent_style = 'kolaso-main';
    
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('kolaso-child', get_stylesheet_directory_uri() . '/style.css', array(
        $parent_style
    ));
}

add_action('wp_enqueue_scripts', 'kolaso_child_enqueue_styles');