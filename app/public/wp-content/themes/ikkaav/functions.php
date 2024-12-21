<?php

/**
 * Theme functions
 *
 * @package Ikkaav
 *
 */

if ( ! defined( 'IKKAAV_DIR_PATH' ) ) {
    define( 'IKKAAV_DIR_PATH', untrailingslashit( get_template_directory() ) );
}


require_once IKKAAV_DIR_PATH . '/includes/helpers/autoloader.php';

function ikkaav_enqueue_scripts(){

    //Register Styles
    wp_register_style('styles-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');



    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true );
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true );



    //Enqueue Styles
    wp_enqueue_style('styles-css');
    wp_enqueue_style('bootstrap-css');



    //Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'ikkaav_enqueue_scripts');
