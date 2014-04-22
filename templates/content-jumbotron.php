<div id="frontpage-jumbotron" class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c1">
      <?php $rows = get_field('row_1'); ?>
      <?php $item_row = $rows[0]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
                      <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->

    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c2">
      <?php $rows = get_field('row_1'); ?>
      <?php $item_row = $rows[1]; ?>
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
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c3">
      <?php $rows = get_field('row_1'); ?>
      <?php $item_row = $rows[2]; ?>
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
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c4">
      <?php $rows = get_field('row_1'); ?>
      <?php $item_row = $rows[3]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
                      <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c5">
      <?php $rows = get_field('row_1'); ?>
      <?php $item_row = $rows[4]; ?>
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
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r1c6">
      <?php $rows = get_field('row_1'); ?>
      <?php $item_row = $rows[5]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
                      <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->
  </div>
  <div class="row">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c1">
      <?php $rows = get_field('row_2'); ?>
      <?php $item_row = $rows[0]; ?>
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
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c2">
      <?php $rows = get_field('row_2'); ?>
      <?php $item_row = $rows[1]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
                      <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c3">
      <?php $rows = get_field('row_2'); ?>
      <?php $item_row = $rows[2]; ?>
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
    </div><!-- end square -->
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 r2c4 r2c5 call-to-action">

      <h2><?php the_field('marketing_headline_text'); ?></h2>
      <a class="btn btn-default" href="<?php the_field('marketing_button_link'); ?>"><?php the_field('marketing_button_text'); ?></a>

    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r2c6">
      <?php $rows = get_field('row_2'); ?>
      <?php $item_row = $rows[5]; ?>
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
    </div><!-- end square -->

  </div>
  <div class="row">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c1">
      <?php $rows = get_field('row_3'); ?>
      <?php $item_row = $rows[0]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
                      <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
           <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c2">
      <?php $rows = get_field('row_3'); ?>
      <?php $item_row = $rows[1]; ?>
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
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c3">
      <?php $rows = get_field('row_3'); ?>
      <?php $item_row = $rows[2]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
                      <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c4">
      <img src="/wp-content/uploads/h.png" class="img-responsive letter" alt="h" width="264" height="264" />
      <?php $rows = get_field('row_3'); ?>
      <?php $item_row = $rows[3]; ?>
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
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c5">
      <img src="/wp-content/uploads/e.png" class="img-responsive letter" alt="e" width="264" height="264" />
      <?php $rows = get_field('row_3'); ?>
      <?php $item_row = $rows[4]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
                      <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
           <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 r3c6">
      <?php $rows = get_field('row_3'); ?>
      <?php $item_row = $rows[5]; ?>
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
          <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="thumbnail-link "href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
          <div class="thumbnail-mask">
            <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <div class="hover-text">
            <h3><?php $post = $square_button_link; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_title; ?></a></h3>
            <p><?php echo $square_excerpt; ?></p>
            <?php $post = $square_button_link; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $square_button_text; ?></a>
          </div>
          </div>
          </a>
        </div>
    </div><!-- end square -->
  </div>
</div>