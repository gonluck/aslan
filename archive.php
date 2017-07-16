<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

		<div id="archive" class="<?php echo get_post($wp_query->post->ID)->post_name; ?>">
			<main>
				<div class="wrapper">

<section id="message">
	<figure>
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/top/main01.jpg">
	</figure>
	<h1><span>News</span>お知らせ</h1>
	<p>営業日のお知らせ、ときどき美容商品のご紹介も</p>
</section>

<section class="entry-content">
		<?php if ( have_posts() ) : ?>

		<ul class="list">

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;
		?>

		</ul>
			<?php
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
</section>
		<ul class="news-paging cinzel">
		<?php
			// Previous/next page navigation.
			the_posts_pagination( array(
		'prev_text'          => '<i class="fa fa-chevron-circle-left"></i>',
		'next_text'          => '<i class="fa fa-chevron-circle-right"></i>',
		'show_all'           => false,
			) );
		?>
		</ul>

				</div>
			</main>
		</div>


<?php get_footer(); ?>
