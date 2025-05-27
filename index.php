<?php
/**
 * Main page template for Social Web Foundation theme.
 *
 * @package social-web-foundation
 */

get_header();
?>

<div class="internal-content">

	<h1><?php wp_title( '' ); ?></h1>

	<?php
	wp_reset_postdata();
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	?>

</div>

<?php get_footer(); ?>
