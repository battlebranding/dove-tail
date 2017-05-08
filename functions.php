<?php

/**
 * Include the style.css stylesheet
 */
function dt_include_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'dt_include_styles' );
