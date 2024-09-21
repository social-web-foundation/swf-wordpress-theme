<?php get_header(); ?>

<div class="internal-content">

<h1><?php wp_title(''); ?></h1>

<div class="article-copy">
  <?php
      wp_reset_query(); // necessary to reset query
      while ( have_posts() ) : the_post();
          the_content();
      endwhile; // End of the loop.
  ?>
</div>

</div>

<?php get_footer(); ?>
