<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 */

get_header(); ?>

<main>
<div class="wrapper">

<section id="message">
	<h1>ASLAN（アスラン）は、<br />東飯能駅から徒歩3分の美容室です。</h1>
	<figure>
		<img alt-"" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/top/lion_normal.png">
	</figure>
	<p><a href="/greetings-2016/">お知らせ</a></p>
</section>

<section id="main-menu">
<ul>
	<li class="half">
		<a href="/about/">
			<h3><span class="en">Greetings</span>ご挨拶</h3>
		</a>
	</li>
	<li class="half">
		<a href="/menu/">
			<h3><span class="en">Menu</span>メニュー・料金</h3>
		</a>
	</li>
	<li class="full">
		<a href="/info/">
			<h3><span class="en">Salon Info</span>店舗情報・アクセス</h3>
		</a>
	</li>
</ul>
</section>

<section id="news">
	<h4>News</h4>
	<div class="box blog">
		<h5>お知らせ</h5>
			<?php query_posts('showposts=5'); ?><ul>
<?php while(have_posts()) : the_post(); ?>
			<li><span class="jp"><?php the_time('Y年m月d日'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?></ul>
		<p class="button"><a href="/category/news/">もっと見る</a></p>
	</div><!--
	--><div class="box calendar">
		<h5>営業カレンダー</h5>
<?php echo do_shortcode('[my_calendar above="none" below="nav" format="mini" ]'); ?>
	</div>
</section>

<section id="instagram">
	<h4>Instagram</h4>
	<ul class="instagram"></ul>
</section>

</div><!--/wrapper-->
</main><!--/main-->

<?php get_footer(); ?>
