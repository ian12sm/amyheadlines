<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
    <div class="post-img">
    <?php the_post_thumbnail(large, array( 'class' => "img-responsive attachment-post-thumbnail")); ?>
  </div>
      <?php the_content(); ?>
    </div>
    <footer>
    <?php get_template_part('content-mail','signup'); ?>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
