<?php
/**
 * トップページの「Works」セクション
 *
 * @package Taido
 */

?>

<?php
// カテゴリー「works」の最新の投稿を３つ取得する.
$args      = array(
	'post_type'      => 'post',
	'category_name'  => 'works',
	'posts_per_page' => 3,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	?>
<section class="works section">
	<div class="works__inner inner">
		<h2 class="works__heading heading animation-viewport pop-up">
			Discover what our precious partners have achieved
		</h2>
		<p class="works__paragraph">
			We are looking for the young passion waiting to be discovered inside your heart.<br>
			We do not expect any previous experience or knowledge. All you need is a passion.<br>
			<br>
			See what our previous learners have created and be one of them.
		</p>
		<ul class="works__cards cards">
			<?php
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
				<li class="cards__item card fade-in animation-viewport">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php
						// サムネイル画像を取得（無い場合テーマ内蔵のNo Imageを表示）.
						$this_id = get_post_thumbnail_id();
						$img     = wp_get_attachment_image_src( $this_id );
						if ( $img ) {
							$src = $img[0];
						} else {
							$src = get_template_directory_uri() . '/images/common/noimage.jpg';
						}
						?>
						<!-- サムネイルは装飾画像のためaltは指定しない -->
						<img src="<?php echo esc_url( $src ); ?>" alt="" class="card__img">
						<div>
							<time datetime="<?php the_time( 'Y-m-d' ); ?>" class="card__time">
					            <?php the_time( 'F j, Y' ); ?>
					        </time>
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
								$excerpt = sanitize_and_truncate_text( $excerpt, 90 );
								?>
							<p class="card__excerpt"><?php echo esc_html( $excerpt ); ?></p>
							<?php endif; ?>
						</div>
					</a>
				</li>
					<?php
				endwhile;
				wp_reset_postdata();
			?>
		</ul>
		<?php get_template_part( 'components/button', null, array(
            'url' => home_url( '/category/works/' ),
            'text' => 'View All',
            'custom_css' => 'works__button'
        )); ?>
	</div>
</section>
<?php endif; ?>