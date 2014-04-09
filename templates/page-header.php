<?php
if ( is_singular('staff') ) {?>
<div class="page-header">
  <h3>
	Who We Are
  </h3>
  <h1>
    Faculty &amp; Staff
  </h1>
</div>
<?php } else { ?>
<div class="page-header">
  <h3>
	<?php $parent_title = get_the_title($post->post_parent); ?>
    <?php echo $parent_title; ?>
  </h3>
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
<?php } ?>