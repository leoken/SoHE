<?php if (is_front_page()) { ?>
<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="row">
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="row">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
</footer>
<?php } ?>
<?php wp_footer(); ?>
