<div class="container-fluid">
  <div class="row">


    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c1">
      <?php
$rows = get_field('row_1');
$item_row = $rows[0];
$square_image = $item_row['featured_image'];
$square_title = $item_row['title'];
$square_excerpt = $item_row['excerpt'];
$square_button_text = $item_row['button_label'];
$square_button_link = $item_row['button_link'];

$image = wp_get_attachment_image_src( $square_image, 'full' );
?>
        <div class="col-internal-link">
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
            <img class="img-circle img-responsive" src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
          </a>
          <div class="inner-square">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
        </div>


    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c2">
      <?php $square = $rows[1]; ?>
      <?php get_template_part('templates/content', 'square'); ?>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c3">
      <?php $square = $rows[2]; ?>
      <?php get_template_part('templates/content', 'square'); ?>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c4">
      <?php $square = $rows[3]; ?>
      <img src="/wp-content/uploads/s.png" class="img-responsive letter" alt="s" width="264" height="264" />
      <?php get_template_part('templates/content', 'square'); ?>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c5">
      <?php $square = $rows[4]; ?>
      <img src="/wp-content/uploads/o.png" class="img-responsive letter" alt="o" width="264" height="264" />
      <?php get_template_part('templates/content', 'square'); ?>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c6">
      <?php $square = $rows[5]; ?>
      <?php get_template_part('templates/content', 'square'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c1">
      <?php //$rows = get_field('row_2'); ?>
      <?php //$square = $rows[0]; ?>
      <img src="/wp-content/uploads/r2s1.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c2">
      <img src="/wp-content/uploads/r2s2.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c3">
      <img src="/wp-content/uploads/r2s3.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 r2c4 r2c5 call-to-action">

      <h2><?php the_field('marketing_headline_text'); ?></h2>
      <a class="btn btn-default" href="<?php the_field('marketing_button_link'); ?>"><?php the_field('marketing_button_text'); ?></a>

    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c6">
      <img src="/wp-content/uploads/r2s6.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c1">
      <img src="/wp-content/uploads/r3s1.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c2">
      <img src="/wp-content/uploads/r3s2.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c3">
      <img src="/wp-content/uploads/r3s3.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c4">
      <img src="/wp-content/uploads/h.png" class="img-responsive letter" alt="h" width="264" height="264" />
      <img src="/wp-content/uploads/r3s4.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c5">
      <img src="/wp-content/uploads/e.png" class="img-responsive letter" alt="e" width="264" height="264" />
      <img src="/wp-content/uploads/r3s5.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c6">
      <img src="/wp-content/uploads/r3s6.png" class="img-responsive" alt="r1s1" width="264" height="264" />
    </div>
  </div>
</div>