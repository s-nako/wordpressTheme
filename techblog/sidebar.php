<?php
/**
* The template used for the sidebar
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
?>
<?php if ( is_active_sidebar('sidebar') ) : ?>
	<aside id="sidebar">
	<?php dynamic_sidebar('sidebar'); ?>
	</aside>
<?php endif; ?>