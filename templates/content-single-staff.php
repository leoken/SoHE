<div class="row">
<?php get_template_part('templates/sidebar', 'left'); ?>
  <div class="col-sm-9">
  <?php while (have_posts()) : the_post(); ?>
    <div class="row">
      <article <?php post_class(); ?>>
          <div class="col-sm-3">
            <div class="thumbnail">
              <a href="<?php the_permalink(); ?>" class="">
              <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('featured-single', array('class' => 'img-responsive'));
              } 
              ?>
              </a>
            </div>
            <div>
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <?php get_template_part('templates/entry-meta'); ?>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>
    </div>

  <?php endwhile; ?>
    <?php get_template_part('templates/content', 'well'); ?>
    <?php get_template_part('templates/content', 'tabs'); ?>
  </div>
</div>
