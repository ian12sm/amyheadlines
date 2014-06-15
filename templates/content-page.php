<?php while (have_posts()) : the_post(); ?>
	<?php echo "loop runs on content-page.php"; ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
