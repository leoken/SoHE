<div class="row">
  <?php get_template_part('templates/sidebar', 'left'); ?>
  <div class="col-sm-9">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php endwhile; ?>
  </div>
</div>
<?php get_template_part('templates/content', 'subsection'); ?>