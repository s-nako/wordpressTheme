<?php
/**
* The template to display search results
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
get_header(); ?>
<div class="container">
<main id="main" class="site-main">
	<div class= "main-content">
		<?php if ( have_posts() ) :?>
			<h1><?php echo esc_html__( 'Search Results for: ', 'techblog' ).'<span>'.esc_html(get_search_query()).'</span>'; ?></h1>
		<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content/content', 'search');
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