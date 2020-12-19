<?php
/**
* The Header for techblog.
* @package WordPress
* @subpackage Techblog
* @since Techblog 1.0
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

<header class="site-header">
	<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'techblog' ); ?></a>
	<div class="header-main">
		<h1 class="site-title">
			<?php if (has_custom_logo()):
				the_custom_logo();
			else : ?>
				<a class="title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name'));?>"><?php echo esc_html(get_bloginfo('name'));?></a>
			<?php endif; ?>
			<span class="site-description">
				<?php echo esc_html(get_bloginfo('description'));?>
			</span>
		</h1>
		<?php 
		wp_nav_menu(
			array(
				'menu'				=> '',
				'theme_location'	=> '',
				'container'			=> 'div',
				'container_class'	=> 'manubar',
				'menu_class'		=> 'nav',
				'fallback_cb'		=> 'wp_page_menu',
				'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
			)
		); ?>
	</div>
</header>