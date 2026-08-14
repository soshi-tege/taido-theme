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


// アーカイブページの接頭辞（例：Category: Example）を削除
add_filter('get_the_archive_title_prefix','__return_empty_string');


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
		null,
		'all'
	);
	wp_enqueue_style(
		'scroll-hint',
		'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css',
		array( 'theme-google-fonts' ),
		$style_version,
		'all'
	);
	wp_enqueue_style(
		'theme-style',
		get_template_directory_uri() . '/css/style.css',
		array( 'theme-google-fonts', 'scroll-hint' ),
		null,
		'all'
	);
	wp_enqueue_script(
		'scroll-hint',
		'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js',
		array(),
		null,
		true
	);
	wp_enqueue_script(
		'theme-script',
		get_template_directory_uri() . '/js/script.js',
		array( 'scroll-hint' ),
		$script_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'theme_script_init' );


/**
 * タイトルの文字数を制限し、HTMLを削除.
 *
 * @param string $title 省略前のタイトル
 * @param integer Optional. $max 最大文字数. 50
 *
 * @return $title
 */

function sanitize_and_truncate_text(
	$title,
	$max = 50
) {
    // HTMLを削除
    $title = wp_strip_all_tags( $title );
    // $max文字以内に短縮し、その場合...を追記.
	if ( mb_strlen( $title ) > $max ) {
		$title = mb_substr( $title, 0, $max ) . '…';
	}
	return $title;
}
