<?php
/*
   Plugin Name: Special-Lite Rep Locator
   Version: 1.0.0
   Author: Andrew Paschall
   Author URI: https://andrewdoeswebdesign.com
   Description: Plugin that enables users to enter their zip code and locate the sales rep assigned to their territory
   Text Domain: sl-replocator
   License: GPLv3
*/

defined( 'ABSPATH' ) or die( 'No direct access!' );

function slreplocator_scripts() {

  // Change '/path/to/file.js' to use plugins_url
  // Use '/assets/js/main.js' as the first parameter
  // Pass __FILE__ as second parameter
 if( is_page( 'rep-locator' ) ) {
    wp_enqueue_script(
        'sl-main-js',
        plugins_url( '/assets/js/main.js', __FILE__ ),
        [
            'jquery',
        ],
        time(),
        true
      );
    
    wp_localize_script(
        'sl-main-js',
        'sl_vars',
        [
            
        ]
    );
    
    }
    add_action( 'wp_enqueue_scripts', 'slreplocator_scripts' );
    
    
    function slreplocator_styles() {
    
      // Register the CSS like this for a plugin:
      wp_enqueue_style(
        'sl-main-css',
        plugins_url( '/assets/css/main.css', __FILE__ ),
        [],
        time(),
        'all'
      );
    
    }
    add_action( 'wp_enqueue_scripts', 'slreplocator_styles' );
 }

?>
