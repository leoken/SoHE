<?php

// Add Shortcode
function sidebar_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'align' => '',
      'width' => '',
      'padding' => '',
      'style' => '',
      'textstyle' => '',
    ), $atts )
  );
add_shortcode( 'sidebar', 'sidebar_shortcode' );
return '<div class="sidebar pull-' . $align . ' col-sm-' . $width . ' ' . $padding . ' ' . $style . ' ' . $textstyle . '">' . $content . '</div>';
}
add_shortcode( 'sidebar', 'sidebar_shortcode' );

// Add Quicktags
function custom_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>
  <script type="text/javascript">
  QTags.addButton( 'sidebar-left', 'sidebar-left', '[sidebar align="left" width="3" padding="extra" style="grayback" textstyle="normal"]', '[/sidebar]', '', 'sidebar-left', 1000 );
  QTags.addButton( 'sidebar-right', 'sidebar-right', '[sidebar align="right" width="3" padding="extra" style="grayback" textstyle="normal"]', '[/sidebar]', '', 'sidebar-right', 1000 );
  </script>
  <?php
  }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'custom_quicktags' );



// ROW SHORTCODE
function row_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'class' => '',
    ), $atts )
  );
add_shortcode( 'row', 'row_shortcode' );
return '<div class="row ' . $class . '">' . $content . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );

// Add Quicktags
function row_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>
  <script type="text/javascript">
  QTags.addButton( 'row', 'row', '[row]', '[/row]', '', 'row', 1100 );
  </script>
  <?php
  }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'row_quicktags' );


// COLUMN SHORTCODE
function column_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'class' => '',
      'width' => '',
    ), $atts )
  );
add_shortcode( 'column', 'column_shortcode' );
return '<div class="col-sm-' . $width . ' ' . $class . '">' . $content . '</div>';
}
add_shortcode( 'column', 'column_shortcode' );

// Add Quicktags
function column_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>
  <script type="text/javascript">
  QTags.addButton( 'column', 'column', '[column width="3"]', '[/column]', '', 'column', 1101 );
  </script>
  <?php
  }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'column_quicktags' );