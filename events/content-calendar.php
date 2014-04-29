<div id="events-tabs" class="row">
  <?php if(!is_singular('event')) { get_template_part('templates/sidebar', 'left'); } ?>
  <div class="<?php if(!is_singular('event')) { ?>col-sm-9<?php } ?><?php if(is_singular('event')) { ?>col-sm-12<?php } ?>">
<?php

$eventdate        = get_field('date');
$current_year     = date('Y');
$current_month    = date('m');
$today            = date('Ymd');
$thismonth        = date('m');
$nextmonth        = date('m')+1;
$twomonthsahead   = date('m')+2;
$threemonthsahead = date('m')+3;
 
$args_thismonth = array (
    'post_type' => 'event',
    'posts_per_page' => '-1',
    'meta_key'       => 'date',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'meta_query' => array(
    array(
          'key'   => $thismonth,
          'compare' => '<=',
          'value'   => $today,
      ),
    array(
          'key'   => $nextmonth,
          'compare' => '>=',
          'value'   => $today,
      )
    ),
);

$args_nextmonth = array (
    'post_type' => 'event',
    'posts_per_page' => '-1',
    'meta_key'       => 'date',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'meta_query' => array(
    array(
          'key'   => $nextmonth,
          'compare' => '<=',
          'value'   => $today,
      ),
    array(
          'key'   => $twomonthsahead,
          'compare' => '>=',
          'value'   => $today,
      )
    ),
);

$args_twomonthsahead = array (
    'post_type' => 'event',
    'posts_per_page' => '-1',
    'meta_key'       => 'date',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'meta_query' => array(
    array(
          'key'   => $twomonthsahead,
          'compare' => '<=',
          'value'   => $today,
      ),
    array(
          'key'   => $threemonthsahead,
          'compare' => '>=',
          'value'   => $today,
      )
    ),
);


?>

    <ul class="nav nav-pills">
      <li class="all active"><a href="#all">All</a></li>
      <li class="thismonth"><a href="#thismonth"><?php echo $thismonth; ?></a></li>
      <li class="nextmonth"><a href="#nextmonth"><?php echo $nextmonth; ?></a></li>
      <li class="twomonthsahead"><a href="#twomonthsahead"><?php echo $twomonthsahead; ?></a></li>
      <li class="threemonthsahead"><a href="#threemonthsahead"><?php echo $threemonthsahead; ?></a></li>
      <li class="lookingahead"><a href="#lookingahead">Looking Ahead</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="all">
          <?php $args = array (
              'post_type'      => 'event',
              'posts_per_page' => '-1',
              'meta_key'       => 'date', // name of custom field to sort by
              'orderby'        => 'meta_value_num',
              'order'          => 'ASC'
            );
            $query = new WP_Query( $args ); ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php get_template_part('templates/content', 'event'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="tab-pane" id="thismonth">
        <?php $query = new WP_Query( $args_thismonth ); ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php get_template_part('templates/content', 'event'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="tab-pane" id="nextmonth">
        <?php $query = new WP_Query( $args_nextmonth ); ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php get_template_part('templates/content', 'event'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="tab-pane" id="twomonthsahead">
        <?php $query = new WP_Query( $args_twomonthsahead ); ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php get_template_part('templates/content', 'event'); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="tab-pane" id="threemonthsahead">
        <?php $query = new WP_Query( $args_threemonthsahead ); ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php get_template_part('templates/content', 'event'); ?>
        <?php endwhile; ?>
      </div>
    </div><!-- END of tab content -->
  </div>
</div>