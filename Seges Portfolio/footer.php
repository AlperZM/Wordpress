<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Seges_Portfolio
 */

?>

  <footer id="footer" class="column">
    <div class="footer-widgets row">
    <div class="footer-box">
      
  <?php
/* Displays the footer widget area. */
    if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>

  <aside class="widget-area flex-center column">
    <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
  </aside><!-- .widget-area -->

  <?php
  endif;
  ?>
    </div>
    <div class="footer-box">
<?php
/* Displays the footer widget area. */

  if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>

  <aside class="widget-area flex-center column">
    <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
  </aside><!-- .widget-area -->

  <?php
  endif;
  ?>
    </div>
    <div class="footer-box">
<?php
/* Displays the footer widget area. */

  if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>

  <aside class="widget-area flex-center column">
    <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
  </aside><!-- .widget-area -->

  <?php
  endif;
?>
    </div>
          </div>
    <div class="footer-content flex-center row">
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( ' &copy; 2023 | &nbsp;', 'seges-portfolio' ), 'seges-portfolio', '<a href="http://seges.web.tr/">seges.web.tr</a>' );
        ?>
            <a href="<?php echo esc_url( __( 'https://seges.web.tr', 'seges-portfolio' ) ); ?>">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( '%s &nbsp;', 'seges-portfolio' ), ' SEGES &nbsp;' );
        ?>
      </a><span>| &nbsp; info@seges.web.tr</span>
    </div>
  </footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
