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

    <div id="header-image" class="" data-stellar-background-ratio="0.5" data-stellar-horizontal-offset="0">
      <div class="header-inner">
          <style>
           #header-image {
            background-image: url(<?php echo $url; ?>);
          }
          </style>
          <div class="container">
            <h1><?php echo $top_tagline; ?></h1>
          </div>
      </div>
    </div>
<?php endif; ?>