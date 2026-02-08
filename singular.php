<?php
/**
 * Singular template
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
	<section class="post">
		<h1>
			<?php the_title(); ?>
		</h1>
	</section>
	<?php get_footer(); ?>
</body>
</html>
