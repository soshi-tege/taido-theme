<?php
/**
 * 404ページのテンプレート.
 *
 * @package Taido
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part( 'includes/header' ); ?>
	<main>
		<section class="not-found not-found-404">
			<div class="not-found__inner inner">
				<h1 class="not-found__title">ページが見つかりませんでした。</h1>
				<p class="not-found__description">
				お探しのページは移動または削除された可能性があります。<br>
				URLの誤りがないかご確認ください。
				</p>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>
</body>

</html>