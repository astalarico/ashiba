<?php
namespace MID\Functions\Shortcodes;
use MID\Functions\Utility as U;

class Shortcode {

    public function setup_shortcode( $handle,  $snaked_handle, $atts, $defaults )
    { 

        // Data and Setup 
        // $atts = array_key_exists('attributes', $config) ?? array();
        $shortcode_atts = shortcode_atts(
            array(),
            $atts
        );

        // custom shortcode data array
        $shortcode_data = array();

        //merged data containting custom shortcode data and passed in attributes + defaults
        $merged_data = array_merge( $shortcode_atts, $shortcode_data, $defaults);

        /**
         *  Custom Shortcode Logic Here
         */


        // Enqueue and Localize
        U::add_js_resource( $handle, 'client');
        U::add_css_resource( $handle, 'client');

        self::localize( $snaked_handle, $merged_data );

        echo self::create_output_root( $handle );
    }
}