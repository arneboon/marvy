<?php
$page_id = intval( get_option( 'home_callout_content' ) );

if ( 0 == $page_id ) {
	return;
}
?>

<a class="anchor" id="contact"></a>

<div class="home-section home-section-callout">
	<div class="container">
		<div class="home-callout">
			<?php
			// Title
			$title = get_the_title( $page_id );

			if ( !empty( $title ) ) {
				echo '<h2>' . $title . '</h2>';
			}
			?>
			<?php marvy_page_content_by_id( $page_id, 'the_content' ); ?>
		</div>
	</div>
</div>
