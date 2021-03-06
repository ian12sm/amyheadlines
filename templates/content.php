<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h4 class="tags">
    <?php $categories = get_the_category_list();
    echo $categories;
    echo get_the_date();
    ?></h4>
  </header>
  <div class="post-img">
  	<?php the_post_thumbnail(large, array( 'class' => "img-responsive attachment-post-thumbnail")); ?>
  </div>
  <div class="entry-summary">
  <?php
  	the_content();
    disqus_embed('amyheadlines');
	?>
  </div>
</article>
