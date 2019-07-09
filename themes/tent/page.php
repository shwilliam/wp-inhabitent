<?php
/**
 * Template for all pages
 *
 * @package tent
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<main id="main" class="site-content__main" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
