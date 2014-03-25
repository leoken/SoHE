<?php while (have_posts()) : the_post(); ?>
  
  <?php the_content(); ?>
  <?php get_template_part('templates/content', 'marketing'); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>