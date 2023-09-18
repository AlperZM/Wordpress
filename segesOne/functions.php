<?php
// setup the theme
if ( ! function_exists( 'segesOnesetup' ) ) :
function segesOnesetup() {
  // adds theme support
  add_theme_support( 'automatic-feed-links' );
// set menü 
  register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'segesOne' ),
    'secondary' => __( 'Secondary Menu', 'segesOne' )
) );
function segesOne_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'segesOne' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'segesOne' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
	
// languages
  load_theme_textdomain( 'segesOne', get_template_directory() . '/languages' );

  // theme title
   add_theme_support( 'title-tag' );

  // post thumbnails
  add_theme_support( 'post-thumbnails' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
  /**Add post-formats support.*/
	                add_theme_support(
	                        'post-formats',
	                        array('link','aside','gallery','image','quote','status','video','audio',
	                                'chat',)
	                );

   $logo_width  = 300;
	 $logo_height = 100;
	                add_theme_support(
	                        'custom-logo',
	                        array(  'height'               => $logo_height,
	                                'width'                => $logo_width,
	                                'flex-width'           => true,
	                                'flex-height'          => true,
	                                'unlink-homepage-logo' => true,
	                        ));
 // Add theme support for selective refresh for widgets.
	                add_theme_support( 'customize-selective-refresh-widgets' );
	
	                // Add support for Block Styles.
	                add_theme_support( 'wp-block-styles' );
	
	                // Add support for full and wide align images.
	                add_theme_support( 'align-wide' );

function segesOne_custom_header_setup() {
	$args = array(
		'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'segesOne_custom_header_setup' );

  /**
	 * Registers widget area. @since Twenty Twenty-One 1.0
 @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 @return void
	 */
	function segesOnewidgets_init() {
	        register_sidebar(
	                array(  'name'          => esc_html__( 'Footer', 'segesOne' ),
	                        'id'            => 'sidebar-1',
	                        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'segesOne' ),
	                        'before_widget' => '<section id="%1$s" class="widget %2$s">',
	                        'after_widget'  => '</section>',
	                        'before_title'  => '<h2 class="widget-title">',
	                        'after_title'   => '</h2>',
	                ));
	}
	add_action( 'widgets_init', 'segesOnewidgets_init' );
	
}
  endif;
add_action( 'after_setup_theme', 'segesOnesetup' );


function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js',  1.1, true,  'strategy'  => 'defer', );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
