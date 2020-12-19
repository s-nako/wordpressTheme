<?php
/**
*this is the fixed page template
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
get_header(); ?>
<div class="container">
<main id="main" class="site-main">
	<?php
		while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content/content', 'page' ); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile;?>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>