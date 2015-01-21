<div class="row cat-img-grid">
	<?php
	while (have_posts()) : the_post(); ?>
		<div class="col-lg-4 col-sm-6">
			<a href="<?php the_permalink(); ?>">
				<div class="card-container">
					<div class="img-lq thumb-card">
					<?php the_post_thumbnail('medium'); ?> 
					</div>
					<div class="thumb-overlay">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</a>
		</div>
	<?php endwhile; ?>
</div>