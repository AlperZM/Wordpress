<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seges_One
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
<?php //wp_body_open(); ?>
	
	<header id="main-header" class="flex-center row">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'seges-one' ); ?></a>
		<div class="site-branding">
			
			<?php the_custom_logo(); ?>
			<?php if ( is_front_page() && is_home() ) :?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				
			<?php endif;
			$seges_one_description = get_bloginfo( 'description', 'display' );
			if ( $seges_one_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $seges_one_description;  ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		


	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'seges-one' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					    'theme_location' => 'primary',
    					'menu_class' => 'main-navigation flex-center',
						'menu_id'=> 'main-nav',
    					'container' => 'nav',
    					'container_class' => 'flex-center',
 //    					'walker' => new SegesOne_Menu_Walker(),
				)
			);
			?>

	
	</header><!-- #masthead -->
	
