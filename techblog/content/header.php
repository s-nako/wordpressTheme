<?php
/* *
* The Header for our theme.
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
?>

<!doctype html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header" role="banner">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'techblog' ); ?></a>
	<nav class="navbar  navbar-default" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'techblog' ); ?>">
		<div class="container">
			<div class="navbar-header">
				<?php if (has_custom_logo()):
					the_custom_logo();
				else : ?>
					<h1>
                    	<a class="navbar-item" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name'));?>">
                        	<span class="navbar-item"><?php echo esc_html(get_bloginfo('name'));?></span>
                    	</a>
                	</h1>
                <?php endif; ?>
				<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<?php //techblog_header_menu(); // main navigation ?>
		</div>
	</nav>
</header>
