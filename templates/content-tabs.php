<?php if( have_rows('tabbed_section') ): ?>
 
  <?php while( have_rows('tabbed_section') ): the_row(); ?>
 
  <?php if( get_row_layout() == 'two_tabs' ):
      $tabtext1 = get_sub_field('tab_text_1');
      $tabtext2 = get_sub_field('tab_text_2');
      $tabbody1 = get_sub_field('tab_body_1');
      $tabbody2 = get_sub_field('tab_body_2');
  ?>
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="tabs-wrapper">
          <ul id="tabs" class="nav nav-pills nav-justified">
            <li class="active"><a href="#one" data-toggle="pill"><?php echo $tabtext1; ?></a></li>
            <li><a href="#two" data-toggle="pill"><?php echo $tabtext2; ?></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="one"><?php echo $tabbody1; ?></div>
            <div class="tab-pane fade" id="two"><?php echo $tabbody2; ?></div>
          </div>
        </div>
      </div>
    </div>
  <?php elseif( get_row_layout() == 'three_tabs' ):
      $tabtext1 = get_sub_field('tab_text_1');
      $tabtext2 = get_sub_field('tab_text_2');
      $tabtext3 = get_sub_field('tab_text_3');
      $tabbody1 = get_sub_field('tab_body_1');
      $tabbody2 = get_sub_field('tab_body_2');
      $tabbody3 = get_sub_field('tab_body_3');
  ?>
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="tabs-wrapper">
          <ul id="tabs" class="nav nav-pills nav-justified">
            <li class="active"><a href="#one" data-toggle="pill"><?php echo $tabtext1; ?></a></li>
            <li><a href="#two" data-toggle="pill"><?php echo $tabtext2; ?></a></li>
            <li><a href="#three" data-toggle="pill"><?php echo $tabtext3; ?></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="one"><?php echo $tabbody1; ?></div>
            <div class="tab-pane fade" id="two"><?php echo $tabbody2; ?></div>
            <div class="tab-pane fade" id="three"><?php echo $tabbody3; ?></div>
          </div>
        </div>
      </div>
    </div>
  <?php elseif( get_row_layout() == 'four_tabs' ):
      $tabtext1 = get_sub_field('tab_text_1');
      $tabtext2 = get_sub_field('tab_text_2');
      $tabtext3 = get_sub_field('tab_text_3');
      $tabtext4 = get_sub_field('tab_text_4');
      $tabbody1 = get_sub_field('tab_body_1');
      $tabbody2 = get_sub_field('tab_body_2');
      $tabbody3 = get_sub_field('tab_body_3');
      $tabbody4 = get_sub_field('tab_body_4');
  ?>
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="tabs-wrapper">
          <ul id="tabs" class="nav nav-pills nav-justified">
            <li class="active"><a href="#one" data-toggle="pill"><?php echo $tabtext1; ?></a></li>
            <li><a href="#two" data-toggle="pill"><?php echo $tabtext2; ?></a></li>
            <li><a href="#three" data-toggle="pill"><?php echo $tabtext3; ?></a></li>
            <li><a href="#four" data-toggle="pill"><?php echo $tabtext4; ?></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="one"><?php echo $tabbody1; ?></div>
            <div class="tab-pane fade" id="two"><?php echo $tabbody2; ?></div>
            <div class="tab-pane fade" id="three"><?php echo $tabbody3; ?></div>
            <div class="tab-pane fade" id="four"><?php echo $tabbody4; ?></div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>

  <?php endwhile; ?>
 
<?php endif; ?>