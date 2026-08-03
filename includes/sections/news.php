<section class="news section">
	<div class="news__inner inner">
		<h2 class="news__heading heading animate pop-up">
			News
		</h2>
		<?php
		// カテゴリー「news」の最新の投稿を4つ取得する.
		$args      = array(
			'post_type'      => 'post',
			'category_name'  => 'news',
			'posts_per_page' => 4,
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			?>
		<ul class="news__items">
			<?php
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
			<li class="news__item">
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<div class="news__block">
						<?php
							// 長すぎるタイトルを短縮.
							$the_title = get_the_title();
							if ( mb_strlen( $the_title ) > 30 ) {
								$the_title = mb_substr( $the_title, 0, 30 ) . '…';
							}
							?>
							<time class="news__time"><?php echo get_the_date(); ?></time>
							<h3 class="news__post-title"><?php echo esc_html( $the_title ); ?></h3>
					</div>
				</a>
			</li>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
		</ul>
		<?php endif; ?>
        <a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>" class="news__button button">
            <span class="button__text" button-text="View All">
                View All
            </span>
        </a>
	</div>
</section>