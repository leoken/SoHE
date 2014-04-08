<div class="row">
  <?php get_template_part('templates/sidebar', 'left'); ?>
  <div class="col-sm-9">

  <?php while (have_posts()) : the_post(); ?>
    
<?php 
$posts = get_field('columns');
if( $posts ): ?>
<div class="row">

      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
<div class="col-sm-4">
        <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_post_thumbnail($p->ID, 'post-thumbnail', array('class' => 'img-circle img-responsive')); ?></a>
        <h3><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></h3>
        <p>
          <?php echo get_the_excerpt(); ?>
        </p>
        <a class="btn btn-primary" href="<?php echo get_permalink( $p->ID ); ?>">
          <?php if( is_singular( 'staff' )) { ?>View Profile<?php } ?>
          <?php if( is_singular( 'event' )) { ?>Event Details<?php } ?>
          <?php if( is_singular()) { ?>Read More<?php } ?>
        </a>
</div>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
</div>
<?php endif; ?>

  <?php endwhile; ?>
  </div>
</div>