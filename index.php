<?php get_header(); ?>

<div id="hero">
    <header>
        <h1><?php bloginfo('name'); ?></h1>
    </header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/small-circles-solid.svg" id="hero-image" alt="">
    <p class="fade-in-element">Welcome to <?php bloginfo('name'); ?>. This is a placeholder for your site's main content.</p>
</div>

<div class="content">
    <!-- Main content area, WordPress loop will go here -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no content available.' ); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
