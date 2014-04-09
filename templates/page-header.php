<?php
if ( is_singular('staff') || is_taxonomy('department') ) {?>
<div class="page-header">
  <h3>Who We Are</h3>
  <h1>Faculty &amp; Staff<?php if ( is_archive('department') ) { ?> <span>/</span> <?php echo roots_title(); } ?></h1>
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