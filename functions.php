<?php

/* Register styles */

add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style( 'reset', trailingslashit( get_template_directory_uri() ) . 'assets/css/reset.css', [], filemtime( trailingslashit( get_template_directory() ) . 'assets/css/reset.css' ) );
    wp_enqueue_style( 'main', trailingslashit( get_template_directory_uri() ) . 'assets/css/main.css', [ 'reset' ], filemtime( trailingslashit( get_template_directory() ) . 'assets/css/main.css' ) );

} );