<?php
/**
 * フロントページ用テンプレート.
 *
 * @package Taido
 */

?>
<?php get_header(); ?>
<main>
    <?php get_template_part( 'includes/layout/preloader' ); ?>
    <?php get_template_part( 'includes/layout/home-sections' ); ?>
</main>
<?php get_footer(); ?>
