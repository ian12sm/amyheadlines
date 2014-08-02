<?php dynamic_sidebar('sidebar-primary'); ?>
<h2>Related Posts</h2>
<?php
	$post_id = get_the_ID();
	$category = get_the_category($post_id);
	foreach((get_the_category()) as $category){
		echo "<h3>" . $category->cat_name ."</h3>";
		$args = array(
		'posts_per_page'   => 3,
		'offset'           => 0,
		'category'         => '$category',
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => true );
		$posts_array = get_posts( $args );
		foreach ( $posts_array as $post ){ setup_postdata( $post );  ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	<?php }
	}
	wp_reset_postdata();
	?>
