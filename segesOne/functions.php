<?php
/* Functions and definitions */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
//------> !!!	// require get_template_directory() . '/inc/back-compat.php'; <-------//
}

if ( ! function_exists( 'seges_one_setup' ) ) {
	/* Sets up theme defaults and registers support for various WordPress features. */
	function seges_one_setup() {
		load_theme_textdomain( 'segesone' );
		add_theme_support( 'automatic-feed-links' );

		/* Let WordPress manage the document title. */
		add_theme_support( 'title-tag' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for link color control.
		add_theme_support( 'link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_empty_string' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		/* Add post-formats support. */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*Enable support for Post Thumbnails on posts and pages. */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
	add_image_size( 'segesone-featured-image', 2000, 1200, true );
	add_image_size( 'segesone-thumbnail-avatar', 100, 100, true );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'segesone' ),
				'footer'  => esc_html__( 'Footer menu', 'segesone' ),
				'secondary' => esc_html__( 'Secondary menu', 'segesone' ),
				'social'  => esc_html__( 'Social menu', 'segesone' ),
			)
		);

		/* Switch default core markup for search form, comment form, and comments */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/* Add support for core custom logo. */
		$logo_width  = 250;
		$logo_height = 250;
		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				// 'unlink-homepage-logo' => true,
			)
		);

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > seges_One_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';		

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'segesone' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'segesone' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'segesone' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'segesone' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'segesone' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'segesone' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'segesone' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'segesone' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'segesone' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'segesone' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'segesone' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'segesone' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'segesone' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'segesone' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);
		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'twentytwentyone' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'twentytwentyone' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'twentytwentyone' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'twentytwentyone' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'twentytwentyone' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'twentytwentyone' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'twentytwentyone' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'twentytwentyone' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'twentytwentyone' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'twentytwentyone' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'segesone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/* Adds starter content to highlight the theme on fresh sites.*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', seges_one_get_starter_content() );
		}
	}
}
add_action( 'after_setup_theme', 'seges_one_setup' );

/*Registers widget area. */
function seges_one_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'segesone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'segesone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar 2', 'segesone' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'segesone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'segesone' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'segesone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'segesone' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'segesone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Brand', 'segesone' ),
			'id'            => 'sidebar-5',
			'description'   => __( 'Add brand here to appear in your footer.', 'segesone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
}
add_action( 'widgets_init', 'seges_one_widgets_init' );

/* Sets the content width in pixels, based on the theme's design and stylesheet. */
function seges_one_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'seges_one_content_width', 750 );
}
add_action( 'after_setup_theme', 'seges_one_content_width', 0 );

/* * Enqueues scripts and styles. */
function seges_one_scripts() {
	wp_enqueue_style( 'seges-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// RTL styles.
	wp_style_add_data( 'seges-one-style', 'rtl', 'replace' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'seges_one_scripts' );

/* Enqueues block editor script. */
function segesone_block_editor_script() {
wp_enqueue_script( 'segesone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'segesone_block_editor_script' );

/* Enqueues non-latin language styles */
function seges_one_non_latin_languages() {
	$custom_css = seges_one_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'seges-one-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'seges_one_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-seges-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-seges-one-custom-colors.php';
new seges_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-seges-one-customize.php';
new seges_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-seges-one-dark-mode.php';
new seges_One_Dark_Mode();

/* Enqueues scripts for the customizer preview. */
function segesone_customize_preview_init() {
	wp_enqueue_script(
		'segesone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'segesone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'segesone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'segesone_customize_preview_init' );

/*Enqueues scripts for the customizer */
function segesone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'segesone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'segesone_customize_controls_enqueue_scripts' );

/* Calculates classes for the main <html> element. */
function segesone_the_html_classes() {
	/* Filters the classes for the main <html> element. */
	$classes = apply_filters( 'segesone_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/* Adds "is-IE" class to body if the user is on Internet Explorer. */
function segesone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'segesone_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/* Retrieves the list item separator based on the locale.*/
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'segesone' );
	}
endif;
