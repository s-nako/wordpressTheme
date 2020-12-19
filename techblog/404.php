<?php
/**
*this is the 404 page template
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
get_header(); ?>
<div class="container">
<main id="main" class="site-main">
	<div class= "main-content">
		<h1>404! Sorry, the page can't be found.</h1>
			<br/>
		<?php get_search_form(); ?>
		<h2>Recent Posts</h2>
		<?php
			$lastposts = get_posts( array(
    			'posts_per_page' => 4
			) ); ?>
		<div class="post-item recent-post">
			<?php if ( $lastposts ) {
    			foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
        		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	    		<div class="post-info">
        				<span class="post-date"><?php the_date();?></span>
        				<?php $post_categories = get_the_category();
        				if ( $post_categories ) {
							foreach( $post_categories as $category ): ?>
								<span class= "post-categories"><a class="category" href= "<?php echo get_category_link($category->term_id) ?>" >
								<?php echo $category->cat_name ?>
								</a></span>
							<?php endforeach; ?>
						<?php }; ?>
        			</div>
        	<?php endforeach; 
    		wp_reset_postdata();
			}?>
		</div>
		<h2>Categories</h2>
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
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>