<?php
/**
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item">
		<a href="<?php the_permalink(); ?>"></a>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-info">
			<span class="sns"><a href="https:/twitter.com/share" data-url="<?php the_permalink(); ?>" data-text="<?php echo get_the_title(); ?>" class="twitter-share-button" data-via="nako_new_high" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></span><br/>
			<span class="post-date"><?php the_date();?></span>
			<?php 
				$post_categories = get_the_category();
        		if ( $post_categories ) {
					foreach( $post_categories as $category ): ?>
					<span class= "post-categories"><a class="category" href= "<?php echo get_category_link($category->term_id) ?>" >
					<?php echo $category->cat_name ?>
					</a></span>
					<?php endforeach; ?>
				<?php }; ?>
			</div>
		<?php the_content(); ?>
	</div>
	<?php if ( is_search() ) : ?>
		<div>
			<?php the_excerpt(); ?>
			<p><a class="read-more" href="<?php the_permalink(); ?>"></p>
		</div>
	<?php endif; ?>
</article>