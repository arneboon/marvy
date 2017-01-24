<?php
$page_id = intval( get_option( 'home_projects_content' ) );

if ( 0 == $page_id ) {
	return;
}
?>

<a name="home-section-projects"></a>

<div class="home-section home-download-section">
	<div class="container">
		<?php
		// Title
		$title = get_the_title( $page_id );

		if ( !empty( $title ) ) {
			echo '<h2>' . $title . '</h2><br>';
		}
		?>

		<!--Load [portfolio] shortcode-->
		<?php marvy_page_content_by_id( $page_id, 'the_content' ); ?>

	</div>
</div>
