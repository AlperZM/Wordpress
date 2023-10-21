<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seges_One
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'seges-one' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'seges-one' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'seges-one' ), 'seges-one', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>

<!--  <!-- Footer 
  <footer id="footer" class="flex-center column">
    <div class="footer-content flex-center row"><p>&copy; 2023 Tüm hakları saklıdır.</p>
    <a href="#" class="footer-link">Gizlilik Politikası</a>
    <a href="#" class="footer-link">Şartlar</a>
    <a href="#" class="footer-link">Hizmet Şartları</a></div>
    <div class="footer-content flex-center row">
      <p>Copyright &copy; 2023 <a href="#">Seges</a>. All rights reserved.</p>
    </div>
  </footer>
  <!-- End Footer 
  <script src="script.js"></script>
</body>
