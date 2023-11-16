<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Seges_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Web tasarım">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <a id="skip" class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'seges-portfolio' ); ?></a>

  <header id="masthead" class="site-header flex-center row">
    <div class="site-branding flex-center row">			
      <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id );
    $custom_logo_link = home_url();
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( has_custom_logo() ) {
      echo '<a href="' . esc_url( $custom_logo_link ) . '"><img class="logo" src="'        . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
    } else {
      echo '<p>' . get_bloginfo('name') . '</p>';
    }

    if ( is_front_page() && is_home() ) :
        ?>
        <p class="flex-center row"><a href="<?php echo esc_url( home_url( '/' ) );           ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
        else :
        ?>
        <p class="flex-center row"><a href="<?php echo esc_url( home_url( '/' ) );            ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
      endif; 
    $seges_portfolio_description = get_bloginfo( 'description', 'display' );
      if ( $seges_portfolio_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $seges_portfolio_description; ?></p>
      <?php endif; ?>
    </div><!-- .site-branding -->

<!-- 	#site-navigation	 -->
    <div class="flex-center column">
            <!-- mobile menu -->
<label class="mobile-menu" for="menu-check">Menu</label>
<input type="checkbox" id="menu-check" />
    <nav id="site-navigation" class="main-navigation">
    <?php /* <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'seges-portfolio' ); ?></button> */?>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
          'container_class' => 'flex-center',
        )
      );
      ?>
    </nav>
      </div><!-- #site-navigation -->
  </header><!-- #masthead -->
