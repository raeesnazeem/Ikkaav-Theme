<?php
/*
 * Bootstraps the theme - adds all basic functionalities for the theme
 *
 * @package Ikkaav
 *
 * */

namespace IKKAAV_THEME\includes;

use IKKAAV_THEME\includes\traits\Singleton;

class IKKAAV_THEME {
    use Singleton;

    protected function __construct() {
        // load classes
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters

        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles(){
        //Register Styles to enqueue it
        wp_register_style('styles-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
        wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        //Enqueue Styles
        wp_enqueue_style('styles-css');
        wp_enqueue_style('bootstrap-css');
    }


    public function register_scripts(){
        //Register Scripts
        wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true );
        wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true );

        //Enqueue Scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}
