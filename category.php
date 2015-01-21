<?php while (have_posts()) : the_post(); ?>
	<span class='hidden'>TEST HERE</span>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
