<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

<main>
	<div class="wrapper">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section id="message">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<section>
			<section class="entry-content">
				<p class="center" style="font-size: 16px;">ご指定のページは、存在しません。<br />
				申し訳ありませんが、メニューより別のページをお選びください。</p>
				<p class="" style="padding: 10px 0; font-size: 16px"><a href="/">ASLAN（アスラン）</a>に戻る</p>
			</section>
		</article>

	</div><!--/wrapper-->
</main><!--/main-->>


<?php get_footer(); ?>
