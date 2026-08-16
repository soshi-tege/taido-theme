<?php
/**
 * 投稿リストのテンプレート.
 *
 * @package Taido
 */

?>
<section class="posts-page section">
	<div class="posts-page__inner inner">
		<h1 class="posts-page__title">
			<?php
			// 「Archive」ページは「Posts」に置き換え.
			echo esc_html( str_replace( 'Archives', 'Posts', get_the_archive_title() ) );
			$is_category = is_category();
			?>
		</h1>
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
					<!-- サムネイルは装飾目的のためaltテキストは指定しない -->
					<img src="<?php echo esc_url( $src ); ?>" alt="" class="card__img">
					<div>
						<?php
						// 「カテゴリーアーカイブ」内ではカテゴリの記載を省略（全て同一のため）.
						if ( ! $is_category ):
							// カテゴリーを全て取得して最初のものを表示（空の場合"Uncategorized"を表示）.
							$categories = get_the_category();
							if ( ! empty( $categories ) ) :
								$category = $categories[0]->name;
							else :
								$category = 'Uncategorized';
							endif;
                            ?>
                        <span class="card__category"><?php echo esc_html( $category ); ?></span>
                        <?php endif; ?>
                        <?php
                            $title = get_the_title();
                            if ( $title ):
							// タイトルを30字以内にしHTMLを省略する.
							$title = sanitize_and_truncate_text( $title );
							?>
						<h3 class="card__heading"><?php echo esc_html( $title ); ?></h3>
						<?php endif; ?>
						<?php
							// 長すぎる抜粋を短縮.
							$excerpt = get_the_excerpt();
							if ( $excerpt ):
							$excerpt = sanitize_and_truncate_text( $excerpt, 180 );
							?>
						<p class="card__excerpt"><?php echo esc_html( $excerpt ); ?></p>
						<?php endif; ?>
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
		<?php else: ?>
		<p>No posts found on the page.</p>
		<?php endif; ?>
	</div>
</section>