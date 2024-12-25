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

        //class for styles and scripts registered
        Assets::get_instance();

        // calling the setup_hooks method below
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions

        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

        public function setup_theme(){

            add_theme_support('title-tag');

            add_theme_support('custom-logo', [
                'header-text' => ['site-title', 'site-description'],
                'height' => 100,
                'width' => 400,
                'flex-height' => true,
                'flex-width' => true,
            ]);

            add_theme_support('custom-background', [
                'default-color' => '#fff',
                'default-image' => '',
                'default-repeat' => 'no-repeat',
            ]);

            add_theme_support('post-thumbnails');

            add_theme_support('customize-selective-refresh-widgets');

            add_theme_support('automatic-feed-links');

            add_theme_support('html5', [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            ]);

            add_editor_style();

            add_theme_support('wp-block-styles');

            add_theme_support('align-wide');

            global $content_width;
            if(isset($content_width)){
                $content_width = 1240;
            }


        }

}
