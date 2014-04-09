<?php
if( get_field('include_callout') ) { ?>
<div class="row">
	<div class="col-sm-12">
		<div class="well well-lg">
			<h2 class="well-title"><?php the_field('callout_section_title'); ?></h2>
			<div class="well-content"><?php the_field('callout_section_body'); ?></div>
			<a class="btn btn-primary" href="<?php the_field('callout_section_button_link'); ?>"><?php the_field('callout_section_button_text'); ?></a>
		</div>
	</div>
</div>
<?php } else { ?>

<?php } ?>
