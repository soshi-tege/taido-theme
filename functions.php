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
 * CSSとJSの読み込み
 *
 * @return void
 */
function theme_script_init() {
	$theme_version  = wp_get_theme()->get( 'Version' );
	$fonts_path     = get_template_directory() . '/css/google-fonts.css';
	$style_path     = get_template_directory() . '/css/style.css';
	$script_path    = get_template_directory() . '/js/script.js';
	$fonts_version  = file_exists( $fonts_path ) ? (string) filemtime( $fonts_path ) : $theme_version;
	$style_version  = file_exists( $style_path ) ? (string) filemtime( $style_path ) : $theme_version;
	$script_version = file_exists( $script_path ) ? (string) filemtime( $script_path ) : $theme_version;

	wp_enqueue_style(
		'theme-google-fonts',
		get_template_directory_uri() . '/css/google-fonts.css',
		array(),
		$fonts_version,
		'all'
	);
	wp_enqueue_style(
		'theme-style',
		get_template_directory_uri() . '/css/style.css',
		array( 'theme-google-fonts' ),
		$style_version,
		'all'
	);
	wp_enqueue_script(
		'theme-script',
		get_template_directory_uri() . '/js/script.js',
		array(),
		$script_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'theme_script_init' );
