<?php
/**
 * カスタム関数の一覧.
 *
 * @package Taido
 */

/**
 * テーマのセットアップ.
 *
 * @return void
 */
function theme_default_setup() {
	add_theme_support( 'post-thumbnails' ); // アイキャッチ.
	add_theme_support( 'title-tag' ); // タイトルタグ自動生成.
}
add_action( 'after_setup_theme', 'theme_default_setup' );

/**
 * 投稿ページ内でbody_class関数にスラッグを追加
 *
 * @param string $classes にはCSSクラス名が入ります.
 */
function add_slug( $classes ) {
	if ( is_page() ) {
		$this_page = get_post( get_the_ID() );
		$classes[] = $this_page->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug' );


/**
 * CSSの読み込み
 *
 * @return void
 */
function theme_scripts() {
	wp_enqueue_style(
		'theme-style',
		get_template_directory_uri() . '/css/style.css',
		array(),
		'1.0',
		'all'
	);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


/**
 * Google Fontの読み込み
 *
 * @return void
 */
function font_enqueue() {
	wp_enqueue_style(
		'texturina-google-font',
		'https://fonts.googleapis.com/css2?family=Texturina:ital,opsz,wght@0,12..72,100..900;1,12..72,100..900&display=swap',
		array(),
		'1.0',
		'all'
	);
}
add_action( 'wp_enqueue_scripts', 'font_enqueue' );
