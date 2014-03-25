<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
        <nav class="post-nav">
          <ul class="">
            <li class="pull-left"><?php previous_post_link(); ?></li>
            <li class="pull-right"><?php next_post_link(); ?></li>
          </ul>
        </nav>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>