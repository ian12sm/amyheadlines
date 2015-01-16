<h1>TEST</h1>
<?php 
    $post_query = new WP_Query('category_name=inspiration');

	while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
 <?php endwhile; ?>
