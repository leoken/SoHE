<article <?php post_class('col-sm-4'); ?>>
<div id="thumbnail-wrap" class="">
	<div class="thumbnail-wrapper">
		<?php get_template_part('templates/content', 'featured-image'); ?>
	</div>
</div>
<div class="">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</div>
</article>