<div class="row">
  <?php get_template_part('templates/sidebar', 'left'); ?>
  <div class="col-sm-9">
<?php $args = array (
	'post_type'              => 'how-to',
	'perm'                   => 'edit_published_posts',
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

    <?php get_template_part('templates/content'); ?>

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