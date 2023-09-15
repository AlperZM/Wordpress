<?php
if ( ! function_exists( 'SegesOnesetup' ) ) :
function SegesOnesetup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'editor-style.css' );
}
endif; 
add_action( 'after_setup_theme', 'SegesOnesetup' );
