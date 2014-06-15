<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h4 class="tags"><?php $posttags = get_the_tags(); 
    if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . ' '; 
  }
	}?>
</h4>
  </header>
  <div class="post-img">
  	<?php the_post_thumbnail(large); ?> 
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
