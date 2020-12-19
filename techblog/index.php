<?php
/**
*This is main file for "techblog" theme
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
 */
get_header(); ?>
<div class="container">
<main id="main" class="site-main">
	<div class= "main-content">
	<h1>Recent Posts</h1>
	<?php
		$lastposts = get_posts( array(
    		'posts_per_page' => 3
		) );
		if ( $lastposts ) {
    		foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
    			<div class="post-item recent-post">
        		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        		<div class="post-info">
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
        		<?php the_excerpt(); ?>
        		</div>
    	<?php endforeach; 
    		wp_reset_postdata();
		}?>
	<h1>Categories</h1>
	<?php
		$categories = get_categories();
		if ( $categories ) {
			foreach( $categories as $category ): ?>
				<a class="index category" href= "<?php echo get_category_link($category->term_id) ?>" >
				<?php echo $category->cat_name ?>
				</a>
			<?php endforeach; ?>
		<?php }; ?>
	</div>
</main>
<?php 
get_sidebar(); ?>
</div>
<?php 
get_footer(); ?>