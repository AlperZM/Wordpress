<?php
/** The template for displaying archive pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Seges_Portfolio
 * category */

get_header();
?>

  <main id="main" class="site-main flex-center row">
    <section class="default-posts">
    <?php if ( have_posts() ) : ?>

    <header class="page-header flex-center row">
      <?php 
        the_archive_title( '<h1 class="page-title">', '</h1>' ); 
        the_archive_description( '<div class="archive-description flex-center">', '</div>' );
      ?>
    </header><!-- .page-header -->
    <?php
      /* Start the Loop */
      while ( have_posts() ) :
        the_post();

        /* Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.         */
        get_template_part( 'template-parts/content', 'excerpt' );

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>
    </section>
<?php get_sidebar(); ?>
</main><!-- #main -->

<?php
get_footer();
