      <?php
        $square_image = $item_row['featured_image'];
        $square_title = $item_row['title'];
        $square_excerpt = $item_row['excerpt'];
        $square_button_text = $item_row['button_label'];
        $square_button_link = $item_row['button_link'];

        $itemimage = $item_row['featured_image'];

        if( !empty($itemimage) ): 
         
          // vars
          $url = $itemimage['url'];
          $title = $itemimage['title'];
          $alt = $itemimage['alt'];
          $caption = $itemimage['caption'];
         
          // thumbnail
          $size = 'medium';
          $thumb = $itemimage['sizes'][ $size ];
          $width = $itemimage['sizes'][ $size . '-width' ];
          $height = $itemimage['sizes'][ $size . '-height' ];
         
        endif;

        ?>
        <div class="col-internal-link">
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
            <div class="thumbnail-mask">
            <img class="img-circle img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>