<h1>TEST</h1>
<?php 
	$args = array(
        'post_type' => 'post'
        'category_name' => 'inspiration'
    );

    $post_query = new WP_Query($args);

	while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
 <?php endwhile; ?>
