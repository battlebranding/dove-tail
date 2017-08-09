<?php

/**
 * Include the style.css stylesheet
 */
function dt_include_styles() {
	wp_register_style( 'doevetail', get_stylesheet_uri() );
	wp_enqueue_style( 'doevetail' );
}

add_action( 'wp_enqueue_scripts', 'dt_include_styles' );
