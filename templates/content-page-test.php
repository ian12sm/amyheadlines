<div class="row">
	<?php 
	    $args = array(
	              'post_type' => 'post',
	              'orderby'   => 'title',
	              'order'     => 'ASC',
	              'post_status' => 'any',
	              'posts_per_page' => 10,
	            );
	    $posts_array = new WP_Query($args);

	while ($posts_array->have_posts()) : $posts_array->the_post(); ?>
		<div class="col-sm-3">
			<div class="card-container">
				<div class="img-lq thumb-card">
				<?php the_post_thumbnail('medium'); ?> 
				</div>
				<div class="thumb-overlay">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>
