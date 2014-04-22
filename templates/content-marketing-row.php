<?php
if(get_field('column_count') == "6")
{
$columnclasses = "col-xs-12 col-sm-2 col-lg-2";
}
if(get_field('column_count') == "4")
{
$columnclasses = "col-xs-12 col-sm-3 col-lg-3";
}
if(get_field('column_count') == "3")
{
$columnclasses = "col-xs-12 col-sm-4 col-lg-4";
}
if(get_field('column_count') == "2")
{
$columnclasses = "col-xs-12 col-sm-6 col-lg-6";
} ?>
<div class="container marketing">
  <div class="row">
  <?php if( have_rows('column_layout') ): ?>
    <?php while( have_rows('column_layout') ): the_row(); ?>
    <?php if( get_row_layout() == 'internal_link' ):
        $itemimage = get_sub_field('featured_image');

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

        $itemtitle = get_sub_field('title');
        $itemexcerpt = get_sub_field('excerpt');
        $buttonlabel = get_sub_field('button_label');
        $buttonlink = get_sub_field('button_link');
    ?>
        <div class="<?php echo $columnclasses; ?> col-internal-link">
          <?php $post = $buttonlink; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?>
            <img class="img-circle img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          </a>
          <h3><?php $post = $buttonlink; setup_postdata( $post ); ?><a href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $itemtitle; ?></a></h3>
          <p><?php echo $itemexcerpt; ?></p>
          <?php $post = $buttonlink; setup_postdata( $post ); ?><a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php wp_reset_postdata(); ?><?php echo $buttonlabel; ?></a>
        </div>
    <?php elseif( get_row_layout() == 'external_link' ):
        $itemimage = get_sub_field('featured_image');

        if( !empty($itemimage) ): 
         
          // variant_set(variant, value)
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
        $itemtitle = get_sub_field('title');
        $itemexcerpt = get_sub_field('excerpt');
        $buttonlabel = get_sub_field('button_label');
        $buttonlink = get_sub_field('button_link');
    ?>

        <div class="<?php echo $columnclasses; ?> col-external-link">
          <a href="<?php echo $buttonlink; ?>">
            <img class="img-circle img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          </a>
          <h3><a href="<?php echo $buttonlink; ?>"><?php echo $itemtitle; ?></a></h3>
          <p><?php echo $itemexcerpt; ?></p>
          <a class="btn btn-primary" href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
        </div>
    <?php elseif( get_row_layout() == 'no_link' ):
        $itemimage = get_sub_field('featured_image');

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
         
        endif;      $itemtitle = get_sub_field('title');
        $itemexcerpt = get_sub_field('excerpt');
    ?>
        <div class="<?php echo $columnclasses; ?> col-no-link">
          <img class="img-circle img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          <h3><?php echo $itemtitle; ?></h3>
          <p><?php echo $itemexcerpt; ?></p>
        </div>
  <?php endif; ?>

  <?php endwhile; ?>
   
  <?php endif; ?>
  </div>
</div>