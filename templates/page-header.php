<div class="page-header">
	<div class="row">
		<div class="page-titles-wrapper pull-left col-sm-8">
		  <h3>
		    <?php $parent_title = get_the_title($post->post_parent); ?>
		    <?php if (is_singular('staff') || is_page('faculty-staff')) { ?>
		    	<?php $parent_title = 'Who We Are' ?>
		    <?php } ?>
		    <?php if (is_singular('event') || is_page('calendar-of-events')) { ?>
		    	<?php $parent_title = 'What We Do' ?>
		    <?php } ?>
		    <?php echo $parent_title; ?>
		  </h3>
		  <h1>
		  	<?php echo roots_title(); ?>
		  </h1>
		</div>
		<div class="form-wrapper pull-right col-sm-4">
			<?php if (is_singular('staff') || is_page('faculty-staff')) { get_template_part('templates/searchform', 'staff'); } ?>
			<?php if (is_singular('event') || is_page('calendar-of-events')) { get_template_part('templates/searchform', 'events'); } ?>
		</div>
	</div>
</div>