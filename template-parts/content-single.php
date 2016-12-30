<?php
/**
 * @package Marvy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="entry-media">
				<?php the_post_thumbnail( 'marvy-large-thumb' ); ?>
			</div>
			<?php
		}
		?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
		<!--?php marvy_entry_list_footer(); ?-->
	</footer>

	<div class="entry-content grid">
		<div class="grid-cell sm-grid-1-1 md-grid-1-2">
			<p>
				<?php the_content(); ?>
			</p>
		</div>
		<div class="grid-cell sm-grid-1-1 md-grid-1-2">
			<p>
				<?php the_content(); ?>
			</p>
		</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marvy' ),
			'after'	 => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
