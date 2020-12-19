<?php
/**
*this is the single post template
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
get_header(); ?>
<div class="container">
<main id="main" class="site-main">
	<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'content/content', 'single' );
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
				endif;
	endwhile;
	?>
</main>
<?php get_sidebar();?>
</div>
<?php get_footer(); ?>