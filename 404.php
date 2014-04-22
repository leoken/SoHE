<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php the_field('404_message', 'option'); ?>
</div>

<?php 
if( get_field('show_search', 'option') ) {
    get_search_form();
}