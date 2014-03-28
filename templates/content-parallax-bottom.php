<?php 
        $image = get_field('background_image');
        $top_tagline = get_field('top_tagline');
        $bottom_tagline = get_field('bottom_tagline');

        if( !empty($image) ): 
         
          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];
         
          // thumbnail
          $size = 'full';
          $thumb = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ]; ?>

    <div id="footer-image" class="" data-stellar-background-ratio="0.5">
      <div class="footer-inner">
          <style>
           #footer-image {
            background-image: url(<?php echo $url; ?>);
          }
          </style>
          <div class="container">
            <h2><?php echo $bottom_tagline; ?></h2>
          </div>
      </div>
    </div>
<?php endif; ?>