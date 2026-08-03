<?php
/**
 * 固定ページ・投稿ページのテンプレート.
 *
 * @package Taido
 */

?>
<?php get_header(); ?>
<main>
	<section class="post section">
		<div class="post__inner inner">
			<h1>
				<?php the_title(); ?>
			</h1>
			<?php the_content(); ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
