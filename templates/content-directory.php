<div id="directory-tabs" class="row">
  <h2 id="directory-tabs-title">Meet more of the SoHE Team</h2>
  <?php if(!is_singular('staff')) { get_template_part('templates/sidebar', 'left'); } ?>
  <div class="<?php if(!is_singular('staff')) { ?>col-sm-9<?php } ?><?php if(is_page('staff-faculty')) { ?>col-sm-12<?php } ?>">
    <?php wp_nav_menu(array('menu' => 'Directory Filter', 'menu_class' => 'nav nav-pills',)); ?>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="all">
          <?php $args = array (
              'post_type'              => 'staff',
              'posts_per_page'         => '12',
              'orderby'                => 'menu_order',
            );
            $query = new WP_Query( $args ); ?>
          <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
              <?php _e('Sorry, no results were found.', 'roots'); ?>
            </div>
          <?php endif; ?>

        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

          <?php get_template_part('templates/content', 'staff'); ?>

        <?php endwhile; ?>
      </div>
      <div class="tab-pane" id="staff">
    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'staff'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

  <?php endwhile; ?>
      </div>

      <div class="tab-pane" id="faculty">
    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'faculty'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

  <?php endwhile; ?>
      </div>

      <div class="tab-pane" id="consumer-science">
    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'consumer-science'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

  <?php endwhile; ?>
      </div>

      <div class="tab-pane" id="consumer-science">
    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'consumer-science'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

  <?php endwhile; ?>
      </div>

      <div class="tab-pane" id="design-studies">
    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'design-studies'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

  <?php endwhile; ?>
      </div>

      <div class="tab-pane" id="human-development-family-studies">
    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'human-development-family-studies'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

  <?php endwhile; ?>
      </div>

      <div class="tab-pane" id="interdisciplinary-studies">
    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'interdisciplinary-studies'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

  <?php endwhile; ?>
      </div>

    </div>

    <?php $args = array (
        'post_type'              => 'staff',
        'posts_per_page'         => '12',
        'orderby'                => 'menu_order',
        'tax_query' => array(
              array(
                'taxonomy' => 'department',
                'field' => 'slug',
                'terms' => 'staff'
              )
            )
      );
      $query = new WP_Query( $args ); ?>
    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
    <?php endif; ?>

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php get_template_part('templates/content', 'staff'); ?>

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