<?php

/*
Plugin Name: Mobile - Desktop String output Shortcode
Plugin URI: http://themepresse.com
Description: Provides a very basic shortcode that outputs a string with "desktop" or "mobile" depending on visitors device. Just use [tp-mobile-desktop] and have fun :)
Version: 1.0
Author: Oliver Sulzer
Author URI: http://themepresse.com
License: GPL2
*/

function tp_dm_shortcode() {

    // is wp_is_mobile is true output mobile, if not return  desktop
    if( wp_is_mobile() ) {

        // you can change the output for mobile here
        return "mobile";

    } else {

        // you can change the output for desktop here
        return "desktop";

    }

}

// add shortcode on installation function
add_shortcode( 'tp-mobile-desktop', 'tp_dm_shortcode');

?>
