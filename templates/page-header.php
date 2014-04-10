<div class="page-header">
	<div class="row">
		<div class="page-titles-wrapper pull-left col-sm-8">
		  <h3>
		    <?php $parent_title = get_the_title($post->post_parent); ?>
		    <?php echo $parent_title; ?>
		  </h3>
		  <h1><?php echo roots_title(); ?></h1>
		</div>
		<div class="form-wrapper pull-right col-sm-4">
			<?php get_template_part('templates/searchform', 'staff'); ?>
		</div>
	</div>
</div>