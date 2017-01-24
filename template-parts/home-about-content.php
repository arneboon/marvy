<?php
$page_id = intval( get_option( 'home_about_content' ) );
if ( 0 == $page_id ) {
	return;
}
?>

<a name="home-section-about"></a>

<div class="home-section home-latest-blog">
	<div class="container home-about-content">
		<?php
			$title = get_the_title( $page_id );
			if ( !empty( $title ) ) {
				echo '<h2>' . $title . '</h2>';
			}
		?>

		<div class="grid">
			<div class="grid-cell sm-grid-1-1 md-grid-1-3 about-quote">
				<?php
					$id = 93;
					$post = get_post($id);
					$content = apply_filters('the_content', $post->post_content);
					echo $content;
				?>
			</div>
			<div class="grid-cell sm-grid-1-1 md-grid-2-3 home-about-content">
				<?php marvy_page_content_by_id( $page_id, 'the_content' ); ?>
			</div>
		</div>

		<?php
			if ( has_post_thumbnail( $page_id ) ) {
				echo get_the_post_thumbnail( $page_id, 'full', array( 'class' => 'about-img' ) );
			}
		?>
	</div>
</div>
