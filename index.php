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
	<section class="posts-page section">
		<div class="posts__inner inner">
			<h2 class="heading">
				Posts
			</h2>
			<?php
			// 最新の投稿を全て取得する.
			if ( have_posts() ) :
				?>
			<ul class="cards">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
				<li class="cards__item cards__item card">
					<a href="<?php the_permalink(); ?>">
						<div class="card__content card__content--vertical">
							<?php
							// アイキャッチ画像を取得（無い場合テーマ内蔵のNo Imageを表示）.
							$this_id = get_post_thumbnail_id();
							$img     = wp_get_attachment_image_src( $this_id );
							if ( $img ) {
								$src = $img[0];
							} else {
								$src = get_template_directory_uri() . '/images/common/noimage.jpg';
							}
							?>
							<img src="<?php echo esc_url( $src ); ?>" alt="#" class="card__img">
							<div>
								<?php
								// カテゴリーを取得して表示（空の場合"Uncategorized"を表示）.
								$categories = get_the_category();
								if ( ! empty( $categories ) ) :
									$category = $categories[0]->name;
										else :
											$category = 'Uncategorized';
										endif;
										// 長すぎるタイトルを短縮.
										$the_title = get_the_title();
										if ( mb_strlen( $the_title ) > 30 ) {
											$the_title = mb_substr( $the_title, 0, 30 ) . '…';
										}
										// 長すぎる抜粋を短縮.
										$excerpt = get_the_excerpt();
										if ( mb_strlen( $excerpt ) > 60 ) {
											$excerpt = mb_substr( $excerpt, 0, 60 ) . '…';
										}
										?>
								<span class="card__category"><?php echo esc_html( $category ); ?></span>
								<h3 class="card__heading"><?php echo esc_html( $the_title ); ?></h3>
								<p class="card__excerpt"><?php echo esc_html( $excerpt ); ?></p>
							</div>
						</div>
					</a>
				</li>
					<?php
				endwhile;
				?>
			</ul>
				<?php
				$args = array(
					'mid_size'           => 2,
					'prev_next'          => '',
					'screen_reader_text' => __( 'Posts navigation', 'textdomain' ),
				);
				the_posts_pagination( $args );
				?>
			<?php endif; ?>
		</div>
	</section>
	<?php get_footer(); ?>
</body>
</html>
