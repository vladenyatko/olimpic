<?php
/**
 * The template for displaying 404 pages (not found)
 */
?>
<?php get_header(); ?>

	<main id="main">

		<section>

			<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1 id="post-title"><?php _e('404 - Page not found', 'seosbusiness'); ?></h1>
			
				<p><?php _e('It seems we cannot find what you are looking for? Perhaps try searching.', 'seosbusiness'); ?></p>

				<?php get_search_form(); ?>

			</article><!-- .page-content -->

		</section><!-- .error-404 -->

		<?php get_sidebar(); ?>

	</main><!-- .site-main -->

<?php get_footer(); ?>