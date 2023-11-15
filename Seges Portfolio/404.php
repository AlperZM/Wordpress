<?php
/** The template for displaying 404 pages (not found)
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package Seges_Portfolio */

get_header();
?>

  <main id="main" class="site-main flex-center row">

    <section class="error-404 flex-center column">
      <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Sayfa Bulunamadı', 'seges-portfolio' ); ?></h1>
      </header><!-- .page-header -->

    <div class="page-content">
      <p><?php esc_html_e( 'Aradığınız sayfa bir nedenden dolayı bulunamadı. Ana sayfaya gidebilir ya da arama butonunu kullanabilirsiniz.', 'seges-portfolio' ); ?></p>

    <?php
        get_search_form();
          the_widget( 'WP_Widget_Recent_Posts' );
    ?>

    <div class="widget widget_categories">
      <h2 class="widget-title"><?php esc_html_e( 'Çokça Kullanılan Kategoriler', 'seges-portfolio' ); ?></h2>
        <ul>
          <?php
            wp_list_categories(
                array(
                  'orderby'    => 'count',
                  'order'      => 'DESC',
                  'show_count' => 1,
                  'title_li'   => '',
                  'number'     => 10,
                )
            );
          ?>
        </ul>
    </div><!-- .widget -->

    <?php
          /* translators: %1$s: smiley */
      $seges_portfolio_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'seges-portfolio' ), convert_smilies( ':)' ) ) . '</p>';
      the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$seges_portfolio_archive_content" );
      the_widget( 'WP_Widget_Tag_Cloud' );
    ?>

    </div><!-- .page-content -->
  </section><!-- .error-404 -->

  <?php get_sidebar(); ?>
  
  </main><!-- #main -->

<?php

get_footer();
