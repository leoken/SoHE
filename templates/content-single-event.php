<div class="row">
  <div class="<?php echo roots_sidebar_class(); ?>">
    <div class="list-group">
      <?php if( get_field( 'side_menu' ) ) : ?>
          <?php the_field( 'side_menu' ); ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="col-sm-9">
<?php $args = array (
  'post_type'              => 'event',
  'posts_per_page'         => '12',
  'orderby'                => 'menu_order',
);
$query = new WP_Query( $args );
?>
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'event'); ?>

  <?php endwhile; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
      <ul class="pager">
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
      </ul>
    </nav>
  <?php endif; ?>
  </div>
</div>