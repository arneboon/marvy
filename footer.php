<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Marvy
 */
?>

</div><!-- #content -->

<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>

	<div class="footer-widget-area">
	<a name="contact"></a>

		<div class="container">

			<div class="grid">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>

		</div>

	</div>

<?php } ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container site-info">
		&copy;
		<?php echo date('Y'); ?>
		Studio Arne Boon
		<span class="sep"> | </span>
		All rights reserved
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<div class="nav-overlay"></div>

<?php wp_footer(); ?>

</body>
</html>
