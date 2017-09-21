<?php
/**
 * The template for displaying the footer
 *
 * @package Devcan_Pagebuilder
 */

?>

			</div><!-- #content -->
		</div><!-- .main-page -->
	</div><!-- .main-content-area -->

	<div class="footer-area full">
		<div class="main-page">
			<footer id="colophon" class="site-footer inner">
				<div class="site-info">
<?php
printf( esc_html__( '&copy; 2017 - All right reserved | %1$s developed by %2$s', 'devcan-pagebuilder' ), 'Devcan Pagebuilder', '<a href="https://developercanvas.com/">Developer Canvas</a>.' );
?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- .main-page -->
	</div><!-- .footer-area -->

<?php wp_footer(); ?>

</body>
</html>
