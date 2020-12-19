<?php
/**
* The search form template
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-group">
  		<label class="screen-label" for="s"><?php esc_html_e( 'Search:', 'techblog' ); ?></label><br/>
  		<span>
		<input type="text"  class="search-query" placeholder="<?php esc_attr_e('word', 'techblog;' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php esc_attr_e( 'Search for:', 'techblog' ); ?>"/>
		<button type="submit" class="search-submit" name="submit" value="<?php esc_attr_e( 'Search', 'techblog' ); ?>"><span class="material-icons">search</span></button>
		</span>
	</div>
</form>
