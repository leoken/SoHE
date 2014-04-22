<?php
/*
$first_square = $rows[0];
$first_square_image = $first_square['featured_image'];
$first_square_title = $first_square['title'];
$first_square_excerpt = $first_square['excerpt'];
$first_square_button_text = $first_square['button_text'];
$first_square_button_link = $first_square['button_link'];

$second_square = $rows[1];
$second_square_image = $second_square['featured_image'];
$second_square_title = $second_square['title'];
$second_square_excerpt = $second_square['excerpt'];
$second_square_button_text = $second_square['button_text'];
$second_square_button_link = $second_square['button_link'];

$third_square = $rows[2];
$third_square_image = $third_square['featured_image'];
$third_square_title = $third_square['title'];
$third_square_excerpt = $third_square['excerpt'];
$third_square_button_text = $third_square['button_text'];
$third_square_button_link = $third_square['button_link'];

$forth_square = $rows[3];
$forth_square_image = $forth_square['featured_image'];
$forth_square_title = $forth_square['title'];
$forth_square_excerpt = $forth_square['excerpt'];
$forth_square_button_text = $forth_square['button_text'];
$forth_square_button_link = $forth_square['button_link'];

$fifth_square = $rows[4];
$fifth_square_image = $fifth_square['featured_image'];
$fifth_square_title = $fifth_square['title'];
$fifth_square_excerpt = $fifth_square['excerpt'];
$fifth_square_button_text = $fifth_square['button_text'];
$fifth_square_button_link = $fifth_square['button_link'];

$sixth_square = $rows[5];
$sixth_square_image = $sixth_square['featured_image'];
$sixth_square_title = $sixth_square['title'];
$sixth_square_excerpt = $sixth_square['excerpt'];
$sixth_square_button_text = $sixth_square['button_text'];
$sixth_square_button_link = $sixth_square['button_link'];

 
$image1 = wp_get_attachment_image_src( $first_square_image, 'medium' );
$image2 = wp_get_attachment_image_src( $second_square_image, 'medium' );
$image3 = wp_get_attachment_image_src( $third_square_image, 'medium' );
$image4 = wp_get_attachment_image_src( $forth_square_image, 'medium' );
$image5 = wp_get_attachment_image_src( $fifth_square_image, 'medium' );
$image6 = wp_get_attachment_image_src( $sixth_square_image, 'medium' );
*/

$rows = get_field('row_1');
$item_row = $rows[0];
$square_image = $item_row['featured_image'];
$square_title = $item_row['title'];
$square_excerpt = $item_row['excerpt'];
$square_button_text = $item_row['button_label'];
$square_button_link = $item_row['button_link'];

$image = wp_get_attachment_image_src( $square_image, 'medium' );
$url = $image[0];
$width = $image[1];
$height = $image[2];

?>
  <?php if( get_row_layout() == 'internal_link' ): ?>
        <div class="col-internal-link">
        	<?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
            <img class="img-circle img-responsive" src="<?php echo $url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          </a>
          <div class="inner-square">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
        </div>
    <?php elseif( get_row_layout() == 'external_link' ): ?>
        <div class="col-external-link">
        	<a href="<?php echo $square_button_link; ?>">
            <img class="img-circle img-responsive" src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
          </a>
          <div class="inner-square">
            <h3><a href="<?php echo $square_button_link; ?>"><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <a class="btn btn-primary" href="<?php echo $square_button_link; ?>"><?php echo $square_button_text; ?></a>
          </div>
        </div>
    <?php elseif( get_row_layout() == 'no_link' ): ?>
        <div class="col-no-link">
          <img class="img-circle img-responsive" src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
          <div class="inner-square">
            <h3><?php echo $square_title; ?></h3>
            <p><?php echo $square_excerpt; ?></p>
          </div>
        </div>
  <?php endif; ?>