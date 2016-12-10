<?php

define ("THEME_URI", get_template_directory_uri());
define ("DOMIN_VERSION", "1.0.0");

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
//remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );


//initialize based scripts and style
if ( ! function_exists( 'do_enqueue_styles_and_scripts' ) ) {
    function do_enqueue_styles_and_scripts() {
    	// theme styles
		wp_enqueue_style( 'do-style', THEME_URI . '/css/site.css', '5000', DOMIN_VERSION );
			
		// add fitvid
		wp_enqueue_script( 'do-script', THEME_URI . '/js/site.js', '' , DOMIN_VERSION, true );
	
    }
}

add_action('wp_enqueue_scripts', 'do_enqueue_styles_and_scripts');



?>