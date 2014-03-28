<?php if( have_rows('subsection') ): ?>
 
  <?php while( have_rows('subsection') ): the_row(); ?>
 
  <?php if( get_row_layout() == 'full_width' ):
      $subhead = get_sub_field('subhead');
      $content = get_sub_field('content'); ?>
    <h2><?php echo $subhead; ?></h2>
    <div class="row">
      <div class="col-sm-12 col-lg-12"><?php echo $content; ?></div>
    </div>

  <?php elseif( get_row_layout() == 'sidebar' ):
      $subhead = get_sub_field('subhead');
      $content = get_sub_field('content');
      $sidebar = get_sub_field('sidebar'); ?>
    <h2><?php echo $subhead; ?></h2>
    <div class="row">
      <div class="col-sm-9 col-lg-9"><?php echo $content; ?></div>
      <div class="col-sm-3 col-lg-3"><?php echo $sidebar; ?></div>
    </div>

    <?php endif; ?>

  <?php endwhile; ?>
 
<?php endif; ?>