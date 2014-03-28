<div class="row">
  <div class="<?php echo roots_sidebar_class(); ?>">
    <div class="list-group">
      <?php if( get_field( 'side_menu' ) ) : ?>
          <?php the_field( 'side_menu' ); ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="col-sm-9">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php endwhile; ?>
  </div>
</div>
<?php get_template_part('templates/content', 'subsection'); ?>