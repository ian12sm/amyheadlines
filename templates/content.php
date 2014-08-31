<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h3><a href="<?php the_permalink(); ?>#disqus_thread"></a></h3>
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
  <?php if( $wp_query->current_post == 0 && !is_paged() ) {
  	the_content();
    $withcomments = true;
    comments_template('/templates/comments.php');
  }
  else{
	the_excerpt();
	}
	?>
  </div>
</article>
