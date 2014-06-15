<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_tags(); ?>
  </header>
  <div class="post-img">
  	<?php the_post_thumbnail(large); ?> 
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
