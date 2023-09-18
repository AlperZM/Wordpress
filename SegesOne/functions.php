<?php
if ( ! function_exists( 'Seges_One_setup' ) ) :
function Seges_One_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'editor-style.css' );
}
endif; 
add_action( 'after_setup_theme', 'Seges_One_setup' );


/**
 * Enqueue the style.css file.
 */
function Seges_One_styles() {
	wp_enqueue_style(
		'Seges-One-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'Seges_One_styles' );
