  <div class="col-sm-3">
    <div class="list-group">
      <?php if (is_tree(9)) {
        if (has_nav_menu('prospective_students_navigation')) :
          wp_nav_menu(array('theme_location' => 'prospective_students_navigation', 'menu_class' => ''));
        endif;
      } ?>
       <?php if (is_tree(11) || is_singular( 'staff' ) || is_taxonomy('department') || is_arcive('staff')) {
        if (has_nav_menu('who_we_are_navigation')) :
          wp_nav_menu(array('theme_location' => 'who_we_are_navigation', 'menu_class' => ''));
        endif;
      } ?>
       <?php if (is_tree(13) || is_singular('event')|| is_archive('event')) {
        if (has_nav_menu('what_we_do_navigation')) :
          wp_nav_menu(array('theme_location' => 'what_we_do_navigation', 'menu_class' => ''));
        endif;
      } ?>
       <?php if (is_tree(15)) {
        if (has_nav_menu('why_we_do_it_navigation')) :
          wp_nav_menu(array('theme_location' => 'why_we_do_it_navigation', 'menu_class' => ''));
        endif;
      } ?>
        <?php if (is_tree(17)) {
        if (has_nav_menu('get_involved_navigation')) :
          wp_nav_menu(array('theme_location' => 'get_involved_navigation', 'menu_class' => ''));
        endif;
      } ?>
    </div>
  </div>