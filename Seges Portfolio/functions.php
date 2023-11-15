<?php
/* Seges Portfolio functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Seges_Portfolio */

if ( ! defined( '_S_VERSION' ) ) {
  // Replace the version number of the theme on each release.
  define( '_S_VERSION', '1.0.0' );
}

/*Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails. */
function seges_portfolio_setup() {
  /* Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on Seges Portfolio, use a find and replace
    * to change 'seges-portfolio' to the name of your theme in all the template files.    */
  load_theme_textdomain( 'seges-portfolio', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /* Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.    */
  add_theme_support( 'title-tag' );

  /* Enable support for Post Thumbnails on posts and pages.
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/    */
  add_theme_support( 'post-thumbnails' );
  the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
  the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
  the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
  the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
  the_post_thumbnail('full');            // Original image resolution (unmodified)
  set_post_thumbnail_size( 500, 400, array( 'center', 'center'));
  add_image_size( 'category-thumb', 300, 300 );
  add_image_size( 'segesportfolio-featured-image', 2000, 1200, true );
  add_image_size( 'segesportfolio-thumbnail-avatar', 100, 100, true );
// Image size for search posts
  add_image_size( 'search-post-thumbnail', 180, 180 );

  add_theme_support( 'custom-line-height' );

// 	Adds custom header
  add_theme_support( 'custom-header' );
  
function segesportfolio_custom_header_setup() {
  $defaults = array(
    'default-image'          => get_template_directory_uri() . '/images/headers/default.jpg',
    'header-text'            => false,
    'default-text-color'     => '000',
    'width'                  => 1000,
    'height'                 => 198,
    'random-default'         => false,
    'uploads'                => false,
    'wp-head-callback'       => 'wphead_cb',
    'admin-head-callback'    => 'adminhead_cb',
    'admin-preview-callback' => 'adminpreview_cb',
  );
}
add_action( 'after_setup_theme', 'segesportfolio_custom_header_setup' );

    // Load regular editor styles into the new block-based editor.
  add_theme_support( 'editor-styles' );

 	// Load default block styles.
  add_theme_support( 'wp-block-styles' );

  // Add support for responsive embeds.
  add_theme_support( 'responsive-embeds' );

  //remove default classes from nav <li>
  function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}
  add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
  
  function clear_nav_menu_item_class($classes, $item, $args) {
    return array("nav-link");
}
  add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
  
  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    array(
      'menu-1' => esc_html__( 'Primary', 'seges-portfolio' ),
      'menu-2' => esc_html__( 'Secondary', 'seges-one' ),
      'menu-3' => esc_html__( 'Social', 'seges-one' ),
    )
  );

  /* Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.    */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
      'navigation-widgets',
    )
  );

  // Set up the WordPress core custom background feature.
  add_theme_support(
    'custom-background',
    apply_filters(
      'seges_portfolio_custom_background_args',
      array(
        'default-color' => 'ffffff',
        'default-image' => '',
      )
    )
  );

  // Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'seges_portfolio_setup' );

  /*Add support for core custom logo.
   * @link https://codex.wordpress.org/Theme_Logo  */
  // custom logo
function segesportfolio_custom_logo_setup() {
  $defaults = array(
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
     'unlink-homepage-logo' => false,
    'header-text'          => array('site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'segesportfolio_custom_logo_setup' );

/* Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width */
function seges_portfolio_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'seges_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'seges_portfolio_content_width', 0 );

/**Register widget area.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar */
function seges_portfolio_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar-1', 'seges-portfolio' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'seges-portfolio' ),
      'before_widget' => '<section id="%1$s" class="sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="sidebar-title">',
      'after_title'   => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar-2', 'seges-portfolio' ),
      'id'            => 'sidebar-2',
      'description'   => esc_html__( 'Add widgets here.', 'seges-portfolio' ),
      'before_widget' => '<section id="%1$s" class="sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="sidebar-title">',
      'after_title'   => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name'          => esc_html__( 'Footer-sidebar-1', 'seges-portfolio' ),
      'id'            => 'footer-sidebar-1',
      'description'   => esc_html__( 'Add footer widgets here.', 'seges-portfolio' ),
      'before_widget' => '<section id="%1$s" class="sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="sidebar-title">',
      'after_title'   => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name'          => esc_html__( 'Footer-sidebar-2', 'seges-portfolio' ),
      'id'            => 'footer-sidebar-2',
      'description'   => esc_html__( 'Add footer widgets here.', 'seges-portfolio' ),
      'before_widget' => '<section id="%1$s" class="sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="sidebar-title">',
      'after_title'   => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name'          => esc_html__( 'Footer-sidebar-3', 'seges-portfolio' ),
      'id'            => 'footer-sidebar-3',
      'description'   => esc_html__( 'Add footer widgets here.', 'seges-portfolio' ),
      'before_widget' => '<section id="%1$s" class="sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="sidebar-title">',
      'after_title'   => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name'          => esc_html__( 'News', 'seges-portfolio' ),
      'id'            => 'news',
      'description'   => esc_html__( 'Add widgets here.', 'seges-portfolio' ),
      'before_widget' => '<section id="%1$s" class="sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="sidebar-title">',
      'after_title'   => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name'          => esc_html__( 'posts', 'seges-portfolio' ),
      'id'            => 'posts',
      'description'   => esc_html__( 'Add widgets here.', 'seges-portfolio' ),
      'before_widget' => '<section id="%1$s" class="sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="sidebar-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'seges_portfolio_widgets_init' );


/* Enqueue scripts and styles. */
function seges_portfolio_scripts() {
  wp_enqueue_style( 'seges-portfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_style_add_data( 'seges-portfolio-style', 'rtl', 'replace' );

// 	wp_enqueue_script( 'seges-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'seges_portfolio_scripts' );

/**Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/** Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/** Functions which enhance the theme by hooking into WordPress. */
require get_template_directory() . '/inc/template-functions.php';

/**Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/** Load Jetpack compatibility file. */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}

/** Disable the emoji's */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );
/**Filter function used to remove the tinymce emoji plugin. 
 * @param array $plugins 
 * @return array Difference betwen the two arrays */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/* Remove emoji CDN hostname from DNS prefetching hints.
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.*/

function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
  $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
  $urls = array_diff( $urls, array( $emoji_svg_url ) );
 }
  return $urls;
}
// remove inline styles and other unnecessary codes
add_action( 'init',function(){
    remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
    remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
  } );
add_filter( 'styles_inline_size_limit', '__return_zero' );
function remove_wp_block_library_css() {
  wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );
function remove_classic_theme_styles_css() {
  wp_dequeue_style( 'classic-theme-styles' );
}

add_action( 'wp_enqueue_scripts', 'remove_classic_theme_styles_css', 100 );
function remove_version_info() {
  return '';
}

add_filter('the_generator', 'remove_version_info');

// Customize the Excerpt
function segesportfolio_excerpt( $more ) {
  if ( is_admin() ) {
    return $more;
  }
  // Change text, make it link, and return change
  return '&hellip; <a href="' . get_the_permalink() . '"> &nbsp;&nbsp;&nbsp;&nbsp;Daha Fazla »</a>';
 }
 add_filter( 'excerpt_more', 'segesportfolio_excerpt', 999 );
// remove custom wordpress-css
add_action( 'customize_register', 'seges_customize_register' );
function seges_customize_register( $wp_customize ) {
    $wp_customize->remove_control( 'custom_css' );
}
