<?php
/**
 * @package Marvy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="entry-media">
				<!--?php the_post_thumbnail( 'marvy-full-width-thumb' ); ?-->
			</div>
			<?php
		}
		?>
		<center>
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<!--ENTRY FOOTER-->
			<footer class="entry-footer">
				<!-- <?php marvy_entry_list_footer(); ?> -->
				<?php
					$date = get_the_date('Y');
					echo '<p>'
					. '<i class="ti-calendar"></i>'
					. $date
					. '</p>';

					$client_name = get_field('client_name');
					$client_website = esc_url( get_field('client_website') );
					if ($client_name) {
						if ($client_website) {
							echo '<p>'
							. '<i class="ti-id-badge"></i>'
							. '<a href="'
							. $client_website
							. '" target="_blank">'
							. $client_name
							. '</a>'
							. '</p>';
						} else {
							echo '<p>'
							. '<i class="ti-id-badge"></i>'
							. $client_name
							. '</p>';
						}
					}

					$location = get_field('location');
					if ($location) {
						echo '<p>'
						. '<i class="ti-location-pin"></i>'
						. $location
						. '</p><br>';
					}
				?>
			</footer>
		</center>
	</header><!-- .entry-header -->

	<div class="entry-content grid">
		<div class="grid-cell sm-grid-1-1 md-grid-1-1">

			<!--INTRODUCTION-->
			<span class="project-introduction ">
				<p><?php the_field('introduction'); ?></p>
				<br>
			</span>

			<!--CONTENT-->
			<span class="project-content">
				<?php the_content(); ?>
				<br>
			</span>

			<!--YOUTUBE-->
			<?php
				//https://css-tricks.com/NetMag/FluidWidthVideo/Article-FluidWidthVideo.php
				$youtube_code = get_field('youtube_code');

				if ($youtube_code) {
					$youtube_embed = 'https://www.youtube.com/embed/';
					$youtube_url = $youtube_embed . $youtube_code;
					$iframe_begin = '<div class="embed-container"><iframe src="';
					$iframe_end = '" frameborder="0" allowfullscreen></iframe></div>';
					$iframe = $iframe_begin . $youtube_url . $iframe_end;
					echo $iframe;
				}
			?>

			<!--VIMEO-->
			<?php
				// <iframe src="https://player.vimeo.com/video/183905151" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				$vimeo_code = get_field('vimeo_code');

				if ($vimeo_code) {
					$vimeo_embed = 'https://player.vimeo.com/video/';
					$vimeo_url = $vimeo_embed . $vimeo_code;
					$iframe_begin = '<iframe src="';
					$iframe_end = '" width="1050" height="591" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
					$iframe = $iframe_begin . $vimeo_url . $iframe_end;
					echo $iframe;
				}
			?>

			<!--GALLERY-->
			<p><?php the_field('gallery'); ?></p>

			<?php
				$num = 5;
				for ($i=1; $i <= $num; $i++) {
					$name = 'image' . $i;
					$image = get_field($name);
					$size = 'portfolio-gallery';
					if (!empty($image)) {
						// vars
						$url = $image['url'];
						$title = $image['title'];
						$alt = $image['alt'];
						$caption = $image['caption'];

						// thumbnail
						$size = 'portfolio-gallery';
						$thumb = $image['sizes'][ $size ];
						$width = $image['sizes'][ $size . '-width' ];
						$height = $image['sizes'][ $size . '-height' ];

						if (!empty($caption)) {
							echo '<div class="wp-caption">';
						}

						?>
						<!--a href="<?php echo $url; ?>" title="<?php echo $title; ?>"-->
							<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						<!--/a-->
						<?php

						if (!empty($caption)) {
							echo '<p class="wp-caption-text" style="text-align: center;">' . $caption . '</p>';
							echo '</div>';
						} else {
							echo '<br><br>';
						}
					}
				}
			?>

		</div>

		<!-- http://www.wpbeginner.com/wp-themes/how-to-use-thumbnails-with-previous-and-next-post-links-in-wordpress/ -->
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marvy' ),
			'after'	 => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
