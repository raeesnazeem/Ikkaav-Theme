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


if ( ! defined( 'IKKAAV_DIR_URI' ) ) {
    define( 'IKKAAV_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}


require_once IKKAAV_DIR_PATH . '/includes/helpers/autoloader.php';


function get_ikkaav_theme_instance() {
    \IKKAAV_THEME\includes\IKKAAV_THEME::get_instance();
}

get_ikkaav_theme_instance();

function ikkaav_enqueue_scripts(){



//why is this empty









}

add_action('wp_enqueue_scripts', 'ikkaav_enqueue_scripts');
