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
	<?php get_template_part( 'includes/header' ); ?>
	<section class="post">
		<div class="post__inner inner">
			<h1>
				<?php the_title(); ?>
			</h1>
			<?php the_content(); ?>
		</div>
	</section>
	<?php get_footer(); ?>
</body>
</html>
