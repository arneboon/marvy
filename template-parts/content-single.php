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
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h6>
			<?php the_date('Y'); ?>
			&nbsp;&nbsp;
			<?php the_field('location'); ?>
		</h6>
	</header><!-- .entry-header -->

	<div class="entry-content grid">
		<div class="grid-cell">

			<p><?php the_field('introduction'); ?></p>
			<p><?php the_content(); ?></p>

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

			<p><?php the_field('gallery'); ?></p>

		</div>

		<footer class="entry-footer">
			<!--?php marvy_entry_list_footer(); ?-->
		</footer>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marvy' ),
			'after'	 => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
