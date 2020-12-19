<?php
/**
* The template to display posts archve
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
get_header(); ?>
<div class="container">
<main id="main" class="site-main">
	<div class= "main-content">
		<?php if ( have_posts() ) :?>
			<?php
				the_archive_title('<h1>', '</h1>');
				the_archive_description();
			?>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content/content', get_post_format());
			endwhile;
				the_posts_pagination(
					array('prev_text' => '<u>Back<<</u>  ',
					'next_text' => '  <u>>>Next</u>', )
				);
		endif; ?>
	</div>
</main>
<?php get_sidebar(); ?>
</div>
<?php
	get_footer(); ?>
