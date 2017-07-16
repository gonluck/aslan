<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>

<main>
<div class="wrapper">

	<div id="contents" class="<?php echo get_post($wp_query->post->ID)->post_name; ?>">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

	<ul class="pages">
<?php $previous = get_previous_post(); $next = get_next_post(); ?>
		<li class="before">
		<p><span class="jp"><?php echo get_post_time('Y年m月d日',false ,$previous->ID); ?></span>
		<a title="<?php echo esc_attr($previous->post_title); ?>" href="<?php echo get_permalink($previous->ID); ?>"><?php echo esc_attr($previous->post_title); ?></a></p>
		</li>
		<li class="after">
		<p><span class="jp"><?php echo get_post_time('Y年m月d日',false ,$next->ID); ?></span>
		<a title="<?php echo esc_attr($next->post_title); ?>" href="<?php echo get_permalink($next->ID); ?>"><?php echo esc_attr($next->post_title); ?></a></p>
		</li>
	</ul>

		<?php
		// End the loop.
		endwhile;
		?>


	</div><!--/#contents -->

</div><!--/wrapper-->
</main><!--/main-->

<?php get_footer(); ?>
