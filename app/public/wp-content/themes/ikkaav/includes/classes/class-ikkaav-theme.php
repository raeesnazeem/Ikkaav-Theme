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
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters
    }
}
