<?php
/**
 * Main page template for Social Web Foundation theme.
 *
 * @package social-web-foundation
 */

get_header(); ?>

		<main id="primary" class="internal-content">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'templates/content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title p-entry-title"><?php _e( 'Nothing Found', 'social-web-foundation' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content e-entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'social-web-foundation' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</main><!-- #content -->

<?php get_footer(); ?>
