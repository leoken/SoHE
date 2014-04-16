<div id="events-tabs" class="row">
  <?php if(!is_singular('event')) { get_template_part('templates/sidebar', 'left'); } ?>
  <div class="<?php if(!is_singular('event')) { ?>col-sm-9<?php } ?><?php if(is_singular('event')) { ?>col-sm-12<?php } ?>">
<?php

$eventdate = get_field('date');
$today = date('Ymd');

$nextmonth = date('F')+1;
$twomonthsahead = date('F')+2;
$threemonthsahead = date('F')+3;

date("l", mktime(0, 0, 0, 7, 1, 2000))

?>

    <ul class="nav nav-pills">
      <li class="active"><a href="#">All</a></li>
      <li><a href="#"><?php echo $nextmonth; ?></a></li>
      <li><a href="#"><?php echo $twomonthsahead; ?></a></li>
      <li><a href="#"><?php echo $threemonthsahead; ?></a></li>
      <li><a href="#">Looking Ahead</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="all">
          <?php $args = array (
              'post_type'              => 'event',
              'posts_per_page'         => '-1',
              'meta_key' => 'date', // name of custom field
              'orderby' => 'meta_value_num',
              'order' => 'ASC'
            );
            $query = new WP_Query( $args ); ?>
          <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
              <?php _e('Sorry, no results were found.', 'roots'); ?>
            </div>
          <?php endif; ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php get_template_part('templates/content', 'event'); ?>
        <?php endwhile; ?>
      </div>
    </div>

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