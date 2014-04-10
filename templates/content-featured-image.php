<?php
$maskimage = get_field('image_mask', 'option');

if( !empty($maskimage) ): 
 
	// vars
	$url = $maskimage['url'];
	$title = $maskimage['title'];
	$alt = $maskimage['alt'];
	$caption = $maskimage['caption'];
 
	// thumbnail
	$size = 'thumbnail';
	$thumb = $maskimage['sizes'][ $size ];
	$width = $maskimage['sizes'][ $size . '-width' ];
	$height = $maskimage['sizes'][ $size . '-height' ];
 
endif; ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<a href="<?php the_permalink(); ?>" class="">
<div id="custom-bg"  class="thumbnail-mask" style="background-image: url('<?php echo $url; ?>'), url('<?php echo $image[0]; ?>');">
</div>
</a>
<?php endif; ?>