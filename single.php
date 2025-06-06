<?php
/**
 * The Template for displaying all single posts.
 *
 * @package social-web-foundation
 */

get_header(); ?>

		<main id="primary" class="internal-content">

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<?php get_template_part( 'templates/content', get_post_format() ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || '0' !== get_comments_number() ) {
					comments_template( '', true );
				}
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #content -->

<?php get_footer(); ?>
