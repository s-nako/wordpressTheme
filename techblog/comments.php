<?php
/**
* The comment form for techblog.
* @package WordPress
* @subpackage Techblog
* @since Techblog 1.0
*/
/*
	* If the current post is protected by a password and
	* the visitor has not yet entered the password we will
	* return early without loading the comments.
*/
if ( post_password_required() ) {
	return;
}?>
<div class="comment-area">
	<div id="comments" class="comment-main">
		<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php echo "Comments for ".get_the_title(); ?>
		</h3>
		<ol class="comment-list">
			<?php wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
					)
				);
			?>
		</ol>
		<?php endif;?>
		<?php if (!comments_open() && get_comments_number() != '0' && post_type_supports( get_post_type(), 'comments' ) ) :?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'techblog' ); ?></p>
		<?php endif;
			comment_form();
		?>
	</div>
</div>