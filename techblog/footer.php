<?php
/**
* The footer for techblog.
*@package WordPress
*@subpackage Techblog
*@since Techblog 1.0
*/
?>

<footer class="site-footer" role="contentinfo">
	<div class="footer-main">
		<div class="footer-info">
			<p class="footer-credits">
				<span class="footer-copyright">
					&copy;<?php echo esc_html( date_i18n('Y') );?> <a href="<?php echo esc_url(home_url());?>" rel="home"><?php bloginfo('name');?></a>
				</span>
				<span class="theme-credits">
					<?php echo '|Theme by <a href="s-nako.work"> Nako </a>' ?>
				</span>
			</p>
		</div>
	</div>
	<div class="scroll-to-top" onclick="location.href='#'">
		<span class="material-icons">navigation</span>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
