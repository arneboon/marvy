<?php
$page_id = intval( get_option( 'home_footer_map_content' ) );
if ( 0 == $page_id ) {
	return;
}
?>

<a name="home-section-footer"></a>

<div class="footer-widget-area">
	<div class="container">
		<!-- <?php
			$title = get_the_title( $page_id );
			if ( !empty( $title ) ) {
				echo '<h2>' . $title . '</h2>';
			}
		?> -->

		<div class="grid">
			<div class="grid-cell sm-grid-1-1 md-grid-1-2 footer-widget textwidget">
				<h3 class="widget-title"><?php echo get_the_title( $page_id ); ?></h3>
				<?php marvy_page_content_by_id( $page_id, 'the_content' ); ?>
			</div>
			<div class="grid-cell sm-grid-1-1 md-grid-1-2 footer-widget textwidget">
				<h3 class="widget-title">Map</h3>
				<?php
					$id = 259;
					$post = get_post($id);
					$content = apply_filters('the_content', $post->post_content);
					echo $content;
				?>
			</div>
		</div>

		<?php
			if ( has_post_thumbnail( $page_id ) ) {
				echo get_the_post_thumbnail( $page_id, 'full', array( 'class' => 'about-img' ) );
			}
		?>
	</div>
</div>
