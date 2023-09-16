<?php
<header class="page-header">
    <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );
    ?>
</header>

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h2>', '</h2>' );
        the_post_thumbnail();
        the_excerpt();
    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
