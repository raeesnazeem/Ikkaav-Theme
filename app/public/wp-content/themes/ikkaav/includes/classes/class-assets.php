<?php

/*
 *
 * Enqueue theme assets
 *
 * @package Ikkaav
 *
 * */

namespace IKKAAV_THEME\includes;

use IKKAAV_THEME\includes\traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // load classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions and filters

        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //Register Styles to enqueue it
        wp_register_style('styles-css', IKKAAV_DIR_URI . '/style.css', [], filemtime(IKKAAV_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', IKKAAV_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        //Enqueue Styles
        wp_enqueue_style('styles-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts()
    {
        //Register Scripts
        wp_register_script('main-js', IKKAAV_DIR_URI . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
        wp_register_script('bootstrap-js', IKKAAV_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

        //Enqueue Scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}