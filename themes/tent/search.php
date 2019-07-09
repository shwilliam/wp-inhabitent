<?php
/**
 * Search results page template
 *
 * @package tent
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<main id="main" class="site-content__main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="site-content__header">
					<h2 class="site-content__title">
						<?php
							printf(
							esc_html(
								'Search Results for: %s'
							),
							'<span>'.get_search_query().'</span>'
							);
						?>
					</h2>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('template-parts/content', 'search'); ?>

				<?php endwhile; ?>

				<?php tent_numbered_pagination(); ?>

			<?php else : ?>

				<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
