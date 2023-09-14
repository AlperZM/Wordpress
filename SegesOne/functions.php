<?php
if ( ! function_exists( 'SegesOnesetup' ) ) :

function myfirsttheme_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'SegesOnesetup' );
