<h1>TEST</h1>
<?php 
    $args = array(
              'post_type' => 'post',
              'orderby'   => 'title',
              'order'     => 'ASC',
              'post_status' => 'any',
              'posts_per_page' => 10,
            );
    $post_query = new WP_Query($args);

	while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
 <?php endwhile; ?>
