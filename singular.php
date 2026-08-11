<?php
/**
 * 固定ページ・投稿ページのテンプレート.
 *
 * @package Taido
 */

?>
<?php get_header(); ?>
<section class="post section">
	<div class="post__inner inner">
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
		<!-- 複数ページのある投稿にページネーションを表示. -->
		<?php
		$args = array(
			'before' => '<div class="pagination">',
			'after'  => '</div>',
		);
		wp_link_pages( $args );
		?>
	</div>
</section>
<?php get_footer(); ?>
