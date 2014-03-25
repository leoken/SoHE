<article <?php post_class('col-sm-12'); ?>>
<div id="thumbnail-wrap" class="col-sm-6">
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>" class="">
		<?php 
		if ( has_post_thumbnail() ) {
		  the_post_thumbnail('featured-thumb', array('class' => 'img-responsive'));
		} 
		?>
		</a>
	</div>
</div>
<div class="col-sm-6">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</div>
</article>