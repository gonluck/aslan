<?php
/**
 * ASLAN V functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 */

//自動挿入されるpタグを削除
//add_action('init', function() {
//	remove_filter('the_excerpt', 'wpautop');
//	remove_filter('the_content', 'wpautop');
//});
 
//スタイルシート
function newStylesheet_URI () {
    $stylesheet_URI = "<link rel='stylesheet' href='" . get_stylesheet_uri() . "' type='text/css' media='all' />\n";
    echo $stylesheet_URI;
}
add_action('wp_head', 'newStylesheet_URI' );


//サムネイル機能
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

//カスタムメニュー
register_nav_menus( array(
	'headermenu'   => __( 'グローバルナビメニュー'),
	'archivemenu'   => __( 'アーカイブメニュー'),
	'footermenu'   => __( 'フッターメニュー'),
) );

//画像パス
function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_stylesheet_directory_uri() . '/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');

//追加カスタマイズ
remove_action('wp_head','wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

// フッターWordPressリンクを非表示に
function custom_admin_footer() {
	echo 'Copyright © <a href="http://hair-aslan.jp/">ASLAN</a> All Rights Reserved';
}
add_filter('admin_footer_text', 'custom_admin_footer');

//投稿の画像を取得
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
        $first_img = esc_url( get_template_directory_uri()) . "/images/archive/default.jpg";
    }
    return $first_img;
}

// yoast seo カスタマイズ
function aslan_remove_prev_next_links($link) {
//    if ( is_page_template('home.php') ) {
    if ( is_home() || is_front_page() ) {
        return '';
      }
    return $link;
}
add_filter('wpseo_next_rel_link', 'aslan_remove_prev_next_links');
add_filter('wpseo_prev_rel_link', 'aslan_remove_prev_next_links');