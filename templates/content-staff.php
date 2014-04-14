<article <?php if(is_page('faculty-staff')){ post_class('col-sm-4'); } elseif (is_singular('staff')) { post_class('col-sm-3'); }?>>
<div id="thumbnail-wrap" class="">
	<div class="thumbnail-wrapper">
		<?php get_template_part('templates/content', 'featured-image'); ?>
	</div>
</div>
<div class="">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
  	<?php echo the_field('title');?>
  </div>
</div>
</article>