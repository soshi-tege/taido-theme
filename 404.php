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
				<h1 class="not-found__title">Page not found.</h1>
				<p class="not-found__description">
				The page you are looking for may have been moved or deleted.<br>
				Please check your URL.
				</p>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>
</body>

</html>