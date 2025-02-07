<?php

/*
 * Plugin Name: Wordpress Sample Plugin
 * Plugin URI: https://github.com/kinhhodev/wordpress-sample-plugin
 * Description: Test github action with wordpress plugin
 * Author: Kinh Ho
 * Author URI: https://github.com/kinhhodev
 * Version: 1.0.0
 */

function sp_plugins_loaded() {
    echo 'Hello from Wordpress Sample Plugin';
}
add_action( 'plugins_loaded', 'sp_plugins_loaded' );