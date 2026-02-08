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
	<h1>Taido Project</h1>
	<p>Home page content</p>
	<?php get_footer(); ?>
</body>
</html>
