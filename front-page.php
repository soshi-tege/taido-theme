<?php
/**
 * フロントページ用テンプレート.
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
	<section class="hero">
		<p class="hero__message">Make yourself heard</p>
		<video id="top-animation" style="width: 100vw; height: 100vh; object-fit: cover;" autoplay muted loop>
			<?php
			// エディター上のカスタムフィールドから動画を取得.
			$video_id = get_post_meta( get_the_ID(), 'top-video', true );
			if ( $video_id ) :
				$video_src = wp_get_attachment_url( $video_id );
				// 動画が見つからない際の予備.
				else :
					$video_src = get_template_directory_uri() . '/top-video/default.mp4';
				endif;
				?>
			<source src="<?php echo esc_url( $video_src ); ?>" type="video/mp4">
			Your browser doesn't support the video tag.
		</video>
	</section>
	<section class="works section">
		<div class="works__inner inner">
			<h2 class="works__heading heading">
				Your Voice Deserves to be Heard
			</h2>
			<p class="works__paragraph paragraph">
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
					<li class="cards__item card">
						<a href="#">
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
				View All
			</a>
		</div>
	</section>
	<section class="mission section">
		<div class="mission__inner inner">
			<h2 class="mission__heading heading">
				Discover African passions yet to be discovered
			</h2>
			<p class="mission__paragraph paragraph">
				The Japanese Anime industry with decades of history needs fresh, international talent.<br>
				We are working to connect overseas young talents with the industry for a more equitable, inclusive environment with open job opportunities and cultural interactions.
			</p>
			<img class="mission__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/mission.jpg" alt="">
			<a href="<?php echo esc_url( home_url( '/mission/' ) ); ?>" class="mission__button button">
				Our Mission
			</a>
		</div>
	</section>
	<section class="news section">
		<div class="news__inner inner">
			<h2 class="news__heading heading">
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
			<ul class="news__cards cards">
				<?php
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					?>
				<li class="cards__item--half cards__card card">
					<a href="#">
						<div class="card__content">
							<?php
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
			<a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>" class="news__button button">
				View All
			</a>
		</div>
	</section>
	<section class="partners section">
		<div class="partners__inner inner">
			<h2 class="partners__heading heading">Partners</h2>
			<p class="partners__paragraph paragraph">
				Our inclusive structure empowers companies and individuals to participate, tackling social challenges through collective action to make a meaningful impact on society.
			</p>
			<div class="logo-scroll">
				<div class="logo-scroll__container">
					<ul class="logo-scroll__group">
					<!-- アニメーション用に同じロゴを2回表示 -->
					<?php
					for ( $i = 0; $i < 2; $i++ ) :
						// 2回めのループではスクリーンリーダーから隠す.
						$aria_hidden = ( 1 === $i ) ? 'true' : 'false';
						// 全てのパートナーロゴをカスタムフィールドから配列として取得.
						$partners = get_post_meta( get_the_ID(), 'partner', false );
						// 全てのロゴを表示.
						foreach ( $partners as $partner ) :
							?>
							<li class="logo-scroll__item" aria-hidden="<?php echo esc_attr( $aria_hidden ); ?>">
								<img src="<?php echo esc_url( wp_get_attachment_url( $partner ) ); ?>" alt="Logo 2">
							</li>
							<?php
						endforeach;
					endfor;
					?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="cta section">
		<div class="cta__inner inner">
			<h2 class="cta__heading heading">
				Become Part of Our Inclusive Community
			</h2>
			<p class="cta__paragraph paragraph">
			If you are a passionate youth with a burning passion, you can begin showing it to the world by:
			<ul>
				<li>Joining our animation learning platform</li>
				<li>Submitting your work to our animation award</li>
			</ul>
			If you wish to be part of our community that supports multicultural cooperation and inclusion, support us through partnership.
			</p>
			<div class="cta__buttons">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta__button button">
					Contact
				</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta__button button">
					Learn
				</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta__button button">
					News Letter
				</a>
			</div>
		</div>
	</section>
	<!-- If there is a new award coming up -->
	<section class="award section">
		<div class="award__inner inner">
			<h2 class="award__heading heading">
				We Need Your Unique Passions and Talents
			</h2>
			<p class="award__paragraph paragraph">
				Learn more about our award system
			</p>
			<div class="accordion">
				<details class="award__accordion accordion__details">
					<summary class="accordion__summary">
						<span role="term" aria-details="pure-css">Find out about the details and eligibility</span>
					</summary>
				</details>
				<div role="definition" class="accordion__content">
					<?php if ( get_the_content() ) : ?>
						<?php the_content(); ?>
					<?php else : ?>
					<p>There is no upcoming award.</p>
					<?php endif; ?>
				</div>
			</div>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="award__button button">
				Contact us for any question
			</a>
		</div>
	</section>
	<?php get_footer(); ?>
</body>
</html>
