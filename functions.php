<?php

define("THEME_DIR", get_template_directory_uri());

remove_action('wp_head', 'wp_generator');
     
function enqueue_styles() {
    wp_register_style( 'style', THEME_DIR . '/style.css');
    wp_enqueue_style( 'style' ); 
    
    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Lato:400i,700i,700|Open+Sans:400,700|Caveat+Brush');
    wp_enqueue_style('fonts');
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

function wpdocs_custom_excerpt_length($length) {
    return 5;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );

?>