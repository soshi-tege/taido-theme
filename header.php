<?php
/**
 * Headタグの中身.
 *
 * @package Taido
 */

?>
<!DOCTYPE html>
<!-- トップページではヘッダーを固定するため、scroll-paddingを指定する -->
<html lang="en" class="<?php echo is_front_page() ? "scroll-padding" : '' ?>">
<head>
    <?php if ( is_front_page() ) : ?>
    <script>
    // ページ本体が読み込まれる前にローディングアニメーションを表示するか決定する
    const visited = localStorage.getItem("visited");
    // Motion reducedモードである / サイトに訪れたことがありかつ1日以上経過していない場合.
    const skipPreloader = window.matchMedia('(prefers-reduced-motion: reduce)').matches ||
        (visited !== null && Date.now() < Number(visited))
    if (skipPreloader) {
        document.documentElement.classList.add("skip-preloader");
    } else {
        const imageUrls = ["<?php echo esc_url( get_template_directory_uri() );?>/images/common/logo.webp",
            "<?php echo esc_url( get_template_directory_uri() );?>/images/common/icon.webp",
        ]
        imageUrls.forEach(imageUrl => {
            const link = document.createElement("link");
            link.rel = "preload";
            link.as = "image";
            link.href = imageUrl;
            link.type = "image/webp";
            document.head.appendChild(link);
        });
    }
    </script>
    <?php endif; ?>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php ?>
    <?php wp_head(); ?>
</head>
<body>
<?php get_template_part( 'includes/layout/header' ); ?>
<div id="drawer" class="drawer-bg" aria-hidden="true"></div>
<main id="main-content" tabindex="-1">
<?php if ( function_exists ( 'bcn_display' ) && ! is_front_page() ) : ?>
<section class="breadcrumb">
	<div class="breadcrumb__inner inner">
	    <nav class="breadcrumb__nav">
	        <ul class="breadcrumb__items">
        		<?php bcn_display(); ?>
	        </ul>
	    </nav>
    </div>
</section>
<?php endif; ?>