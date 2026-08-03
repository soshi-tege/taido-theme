<?php
/**
 * トップページの「Works」セクション
 *
 * @package Taido
 */

?>

<section class="works section">
	<div class="works__inner inner">
		<h2 class="works__heading heading animate pop-up">
			Discover what our precious partners have achieved
		</h2>
		<p class="works__paragraph">
			We are looking for the young passion waiting to be discovered inside your heart.<br>
			We do not expect any previous experience or knowledge. All you need is a passion.<br>
			<br>
			See what our previous learners have created and be one of them.
		</p>
		<?php
		// カテゴリー「work」の最新の投稿を３つ取得する.
		$args      = array(
			'post_type'      => 'post',
			'category_name'  => 'work',
			'posts_per_page' => 3,
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			?>
		<ul class="works__cards cards">
			<?php
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
				<li class="cards__item card fade-in animate">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
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
				wp_reset_postdata();
			?>
		</ul>
		<?php endif; ?>
        <a href="<?php echo esc_url( home_url( '/category/work/' ) ); ?>" class="works__button button">
            <span class="button__text" button-text="View All">
                View All
            </span>
        </a>
	</div>
</section>