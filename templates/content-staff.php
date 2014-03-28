<article <?php post_class('col-sm-4'); ?>>
<div id="thumbnail-wrap" class="">
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>" class="">
		<?php 
		if ( has_post_thumbnail() ) {
		  the_post_thumbnail('medium', array('class' => 'img-responsive'));
		} 
		?>
		</a>
	</div>
</div>
<div class="">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
  </header>
  <div class="entry-summary">

  </div>
</div>
</article>