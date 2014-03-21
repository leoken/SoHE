<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
      <nav class="nav-mini" role="navigation">
        <?php
          if (has_nav_menu('mini_navigation')) :
            wp_nav_menu(array('theme_location' => 'mini_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
<header class="banner navbar navbar-default" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      
      $walker = new Menu_With_Description;  
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'walker' => $walker));
        endif;
      ?>
    </nav>
  </div>
</header>
