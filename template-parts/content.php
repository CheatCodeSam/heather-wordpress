<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Heather
 */

?>

<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		    the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
        ?>
	</header><!-- .entry-header -->

	<!-- <?php heather_post_thumbnail(); ?> -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'heather' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'heather' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <p class='small gray'>
            <?php
                heather_posted_on()
            ?>
        </p>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
