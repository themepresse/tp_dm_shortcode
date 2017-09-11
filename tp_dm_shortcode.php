<?php

/*
Plugin Name: Mobile - Desktop String output Shortcode
Plugin URI: http://themepresse.com
Description: Provides a very basic shortcode that outputs a string with "desktop" or "mobile" depending on visitors device. Just use [tp_mobile-desktop] and have fun :)
Version: 1.0
Author: Oliver Sulzer
Author URI: http://themepresse.com
License: GPL2
*/

function tp_dm_shortcode() {

    // is wp_is_mobile is true output mobile, if not return  desktop
    if( wp_is_mobile() ) {

        return "mobile";

    } else {

        return "desktop";

    }

}

// add shortcode on installation function
function tp_db_shortcode_install() {

    add_shortcode( 'tp_mobile-desktop', 'tp_dm_shortcode');

}

// remove shortcode on uninstall / deactivation
function tp_db_shortcode_uninstall() {

    remove_shortcode( 'tp_mobile-desktop' );

}

// hook into activation method
register_activation_hook( __FILE__, 'tp_db_shortcode_install');

// hook into deactivation method
register_deactivation_hook( __FILE__, 'tp_db_shortcode_uninstall');

// also hook into uninstall hook, we do the same as in deactivation
register_uninstall_hook( __FILE__, 'tp_db_shortcode_uninstall');
