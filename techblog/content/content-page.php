<?php
/**
* The template used for displaying page content in page.php
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class= "main-content">
		<div class="page-item">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="post-info">
				<span class="sns"><a href="https://twitter.com/share" data-url="<?php the_permalink(); ?>" data-text="<?php echo get_the_title(); ?>" class="twitter-share-button" data-via="nako_new_high" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></span><br/>
				<span class="post-date"><?php the_date();?></span>
			</div>
			<?php
				the_content();
				wp_link_pages();
			?>
			<?php if(get_edit_post_link()) : ?>
				<footer>
					<?php edit_post_link(); ?>
				</footer>
			<?php endif; ?>
		</div>
	</div>
</article>