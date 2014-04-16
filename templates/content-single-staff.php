<div class="row">
<?php get_template_part('templates/sidebar', 'left'); ?>
  <div class="col-sm-9">
  <?php while (have_posts()) : the_post(); ?>
    <div class="row">
      <article <?php post_class(); ?>>
          <div class="col-sm-3">
            <div class="thumbnail-wrapper">
              <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium', array('class' => 'img-mask img-responsive'));
              } ?>
            </div>
            <div>
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <?php get_template_part('templates/meta-staff'); ?>
            </div>
          </div><!-- /.col-sm-3 -->
          <div class="col-sm-9">
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </div>
            <?php get_template_part('templates/content', 'well'); ?>
            <?php get_template_part('templates/content', 'tabs'); ?>
        </div><!-- /.col-sm-9 -->
      </article>
    </div><!-- /.row -->
  <?php endwhile; ?>
  </div>
</div>