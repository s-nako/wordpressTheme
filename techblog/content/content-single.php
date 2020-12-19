<?php
/**
* The template used for displaying single post content in single.php
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="main-content">
		<div class="page-item">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="post-info">
				<span class="sns"><a href="https://twitter.com/share" data-url="<?php the_permalink(); ?>" data-text="<?php echo get_the_title(); ?>" class="twitter-share-button" data-via="nako_new_high" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></span><br/>
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
				<br/>
				<?php if ( has_tag() ) : ?>
					<?php $tags = get_the_tags( get_the_ID() );
						foreach ( $tags as $tag ) {
							echo '<span class= "post-tags"><a href="'. get_tag_link( $tag->term_id ) . '">#' . $tag->name . '</a></span>';
						}
					?>
		  		<?php endif; ?>
        	</div>
		  	<?php the_content(); ?>
		</div>
	</div>
</article>