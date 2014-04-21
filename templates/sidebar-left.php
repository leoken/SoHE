<div class="col-sm-3">
    <div class="list-group">
      <ul>
      <?php 
        // use wp_list_pages to display parent and all child pages all generations (a tree with parent)
        $parent = get_post_top_ancestor_id();
        $spanid = $page->ID;
        $spanclass = 'plus-button';
        $parentid = $page->ID;
        $parentclass = 'parent-' . $parentid;
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
            'sort_column'  => 'menu_order',
            'title_li'=> '',
            'link_before' => '<span id="menu-' . $parentclass . '" class="' . $spanclass . '" data-toggle="collapse" data-target="' . $parentclass . '">+</span>',
            'include' =>  $parent . ',' . implode(",", $pageids),
            'walker' => new My_Walker
          );
          wp_list_pages($args);
        } ?>

       <?php /* if ( is_singular( 'event' ) || is_archive( 'event' )) {
        // use wp_list_pages to display parent and all child pages all generations (a tree with parent)
        $parent = 13;
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
            'sort_column'  => 'menu_order',
            'include' =>  $parent . ',' . implode(",", $pageids)
          );
          wp_list_pages($args);
        }

      } */ ?>

       <?php /* if (is_singular( 'staff' ) || is_taxonomy('department') || is_arcive('staff')) {
        // use wp_list_pages to display parent and all child pages all generations (a tree with parent)
        $parent = 11;
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
            'sort_column'  => 'menu_order',
            'include' =>  $parent . ',' . implode(",", $pageids)
          );
          wp_list_pages($args);
        }

      } */ ?>
    </ul>
    </div>
    <?php dynamic_sidebar('sidebar-left'); ?>
  </div>