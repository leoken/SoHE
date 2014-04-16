<div class="staff-meta">
	<?php $emailaddress = get_field('email_address'); 

	?>

	<?php if( get_field('title') ) { ?><div class="staff-title"><strong><?php the_field('title'); ?></strong></div><?php } ?>
	<?php if( get_field('address') ) { ?><div class="staff-address"><address><?php the_field('address'); ?></address></div><?php } ?>
	<?php if( get_field('office_hours') ) { ?><div class="staff-hours"><strong>Office Hours</strong><br/><?php the_field('office_hours'); ?></div><?php } ?>
	<?php if( get_field('phone_number') ) { ?><div class="staff-phone"><?php the_field('phone_number'); ?></div><?php } ?>
	<?php if( get_field('email_address') ) { ?>
		<div class="staff-email">
			<a href="mailto:<?php echo $emailaddress; ?>"><?php echo $emailaddress; ?></a>
		</div>
	<?php } ?>
</div>