
	<?php dynamic_sidebar('sidebar-primary'); ?>

<h2>Related Posts</h2>
<?php
	$post_id = get_the_ID();
	$category = get_the_category($post_id);
	foreach((get_the_category()) as $category){
		echo "<h3>" . $category->cat_name ."</h3>";
		$cat_id = $category->cat_ID;
		$args = array(
		'posts_per_page'   => 3,
		'offset'           => 0,
		'category'         => $cat_id,
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
	<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//amyheadlines.us9.list-manage.com/subscribe/post?u=9058e8f1491ecc5e38882a801&amp;id=f24cbd857a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<h3>Subscribe to our mailing list for more Amyheadlines updates!</h3>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9058e8f1491ecc5e38882a801_f24cbd857a" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
