<?php
/**
* techblog functions and definitions
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/

if ( ! defined( 'TECHBLOG_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'TECHBLOG_VERSION', '1.0.0' );
}
/*-------------------
post-item
-------------------*/
function twpp_change_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

/*-------------------
widgets
-------------------*/

/*sidebar*/
function techblog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_attr__( 'SideBar', 'techblog' ),
		'id'            => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'techblog_widgets_init' );

/*-------------------
enqueue scripts
-------------------*/
add_action( 'wp_enqueue_scripts', 'techblog_scripts' );
function techblog_scripts() {
	//add icon with Google Material Icons
	wp_enqueue_style( 'google-mateial-style', "https://fonts.googleapis.com/icon?family=Material+Icons", null);
	// Add main theme stylesheet
	wp_enqueue_style( 'techblog-main-style', get_stylesheet_uri(), null);
}