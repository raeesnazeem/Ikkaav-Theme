<?php

/*
 *
 * Register Menus
 *
 * @package Ikkaav
 *
 * */

namespace IKKAAV_THEME\includes;

use IKKAAV_THEME\includes\traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        // load classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions
        add_action('init', [$this, 'register_menus']);

    }

    public function register_menus()
    {
        register_nav_menus([
            'ikkaav-primary-menu' => esc_html__('Primary Menu', 'ikkaav'),
            'ikkaav-footer-menu' => esc_html__('Footer Menu', 'ikkaav'),
        ]);
    }

    public function get_menu_id($location)
    {
        // Get all the locations
        $locations = get_nav_menu_locations();

        // Get object id by location
        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
    }


} // end of class