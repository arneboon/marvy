<!--?php
$page_id = intval( get_option( 'home_theme_features_page' ) );

if ( 0 == $page_id ) {
	return;
}
?-->

<div class="home-section home-theme-features home-latest-blog">
	<div class="container home-about-content">
		<?php
		// Title Marvy Original
		// $title = esc_attr( get_option( 'home_theme_feature_title' ) );
		//
		// if ( !empty( $title ) ) {
		// 	printf( __( '<h2>%s</h2>', 'marvy' ), $title );
		// }
		//
		// Get itle from selected page
		// $title = get_the_title( $page_id );
		//
		// if ( !empty( $title ) ) {
		// 	echo '<h2>' . $title . '</h2>'; //note: turn off title display
		// }

		// Introduction from selected page
		marvy_page_content_by_id( $page_id, 'the_content' );

		// Pages
		$page_first	 = intval( get_option( 'home_theme_feature_1' ) );
		$page_second = intval( get_option( 'home_theme_feature_2' ) );
		$page_third	 = intval( get_option( 'home_theme_feature_3' ) );

		$icon_0	 = esc_attr( get_option( 'home_theme_feature_icon_1' ) );
		$icon_1	 = esc_attr( get_option( 'home_theme_feature_icon_2' ) );
		$icon_2	 = esc_attr( get_option( 'home_theme_feature_icon_3' ) );

		$pages = array_values( compact( 'page_first', 'page_second', 'page_third' ) );
		?>

		<ul class="grid">
			<?php
			foreach ( $pages as $key => $page ) {

				if ( 0 != $page ) {
					?>
					<li class="grid-cell sm-grid-1-1 md-grid-1-3">
						<?php if ( !empty( ${"icon_$key"} ) ) { ?>
							<i class="icon <?php echo ${"icon_$key"}; ?>"></i>
						<?php } ?>

						<h4><?php echo get_the_title( $page ); ?></h4>

						<div class="page-excerpt">
							<?php marvy_page_content_by_id( $page ); ?>
						</div>
					</li>
					<?php
				}
			}
			?>
		</ul>
	</div>
</div>
