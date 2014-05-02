<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'marketing-row'); ?>
	<?php get_template_part('templates/content', 'social-blocks'); ?>
<?php endwhile; ?>