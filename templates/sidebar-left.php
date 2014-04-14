<div class="col-sm-3">
    <div class="list-group">

<?php 
// use wp_list_pages to display parent and all child pages all generations (a tree with parent)
$parent = 209;
$args=array(
  'child_of' => $parent
);
$pages = get_pages($args);  
if ($pages) {
  $pageids = array();
  foreach ($pages as $page) {
    $pageids[]= $page->ID;
  }

  $args=array(
    'title_li' => 'Tree of Parent Page ' . $parent,
    'sort_column'  => 'menu_order',
    'include' =>  $parent . ',' . implode(",", $pageids)
  );
  wp_list_pages($args);
}
?>

      <?php /* if (is_tree(209)) {
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
      } */ ?>
    </div>
    <?php dynamic_sidebar('sidebar-left'); ?>
  </div>