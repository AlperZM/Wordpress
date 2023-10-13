<?php
/* The template for displaying 404 pages (not found) */
get_header();
?>

<main id="404-main">
	<section class="error-404">
		<header class="page-header alignwide">
		<h1 class="page-title"><?php esc_html_e( 'Sorry about nothing here', 'segesone' ); ?></h1>
	</header>
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'segesone' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
</main>
	
<?php get_sidebar(); ?>

<?php
get_footer();
