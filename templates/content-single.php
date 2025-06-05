<?php
/**
 * The template for displaying posts in the Standard Post Format on index and archive pages
 */
?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title p-entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
	</header>
	<div class="entry-content e-content" itemprop="description articleBody">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'social-web-foundation' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

</article>
