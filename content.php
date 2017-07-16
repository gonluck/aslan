<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>

<?php
	if ( is_page()) :
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php remove_filter('the_content', 'wpautop'); ?>
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<?php
	elseif ( is_single()) :
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post">
	<section id="message">
		<!--<figure>
			<img src="images/top/main01.jpg">
		</figure>-->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<aside class="title">
			<span><?php echo get_post_modified_time('Y年m月d日'); ?></span>
		</aside>
	</section>
	<section class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</section><!-- .entry-content -->
</div>
</article><!-- #post-## -->

<?php
	else :
?>
	<li class="ct">
		<figure>
			<img src="<?php echo catch_that_image(); ?>" alt=" "/>
		</figure>
 		<span class="mark_date">
		<?php the_time('Y年m月d日'); ?>
		</span>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php the_title(); ?>
		</a>
	</li>

<?php
	endif;
?>

