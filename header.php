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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<?php get_template_part( 'includes/layout/header' ); ?>
<main id="main-content">