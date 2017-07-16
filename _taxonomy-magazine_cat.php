<?php
/**
 * The template for displaying customtype category archive pages
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

	<div id="contents" class="magazine">
	<h1><a href="/magazine"><img src="/wp/wp-content/themes/jyozaiji/images/magazine/tl_magazine.png" alt="常在寺だより"></a></h1>
			<header class="page-header">
				<div class="block heading">
				</div>
			</header><!-- .page-header -->

			<section>
				<ul class="sort">
					<?php wp_nav_menu( array(
						'theme_location'=>'archivemenu', 
						'container'     =>'', 
						'menu_class'    =>'',
						'items_wrap'    =>'<ul>%3$s</ul>'));
					?>
				</ul>
			</section>
		<?php if ( have_posts() ) : ?>
			<ul class="magazineList">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'magazine' );

			// End the loop.
			endwhile;
		?>
			<?php
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
			</ul>
			<ul class="news-paging cinzel">
				<?php
				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_next'          => false,
					'before_page_number' => '<li>',
					'after_page_number' => '</li>',
				) );
			?>
			</ul>
	</div><!--/#contents -->


<?php get_footer(); ?>
