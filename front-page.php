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
	<?php get_template_part( 'includes/preloader' ); ?>
	<section class="hero">
		<div class="hero__inner">
			<div class="hero__message">
				<p class="hero__message-text typewriter-animation">
					Dream, Wish, Create
				</p>
			</div>
			<div class="hero__message">
				<p class="hero__message-text typewriter-animation">
					Burst Out Your Imagination
				</p>
			</div>
			<div class="hero__message">
				<p class="hero__message-text typewriter-animation">
					Together
				</p>
			</div>
		</div>
		<?php
		// エディター上のカスタムフィールドから動画を取得.
		$video_id = get_post_meta( get_the_ID(), 'top-video', true );
		if ( $video_id ) :
			$video_src = wp_get_attachment_url( $video_id );
			?>
		<video id="top-animation" class="hero__video" preload="metadata" autoplay loop muted playsinline webkit-playsinline>
			<source src="<?php echo esc_url( $video_src ); ?>" type="video/mp4">
			<div style="background: #000000;"></div>
		</video>
			<?php
			// 動画が見つからない際の予備.
		else :
			?>
			<div class="hero__video" style="background: #000000;"></div>
			<?php
		endif;
		?>
	</section>
	<section class="projects section">
        <div class="projects__inner inner">
            <div class="projects__content">
                <h2 class="projects__heading heading animate pop-up">
                    Passion is All You Need 
                </h2>
                <p class="projects__paragraph">
                    Our partners collaborated with experienced Japanese animators and anime studios to produce high-quality anime, delivering their traditions and history. They began their career as pioneers of African anime in Nigeria and Ghana. 
                </p>
                <!-- button-textの中身が実際は表示（aタグの中身は読み上げ用） -->
                <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="projects__button button">
                    <span class="button__text" button-text="Our Projects">
                        Our Projects
                    </span>
                </a>
            </div>
            <div class="projects__image-box fade-in animate">
                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/home/projects.jpg" alt="Image of one of our partners at the TAIDO animation award 2026.">
            </div>
        </div>
	</section>
	<section class="mission section" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/images/home/mission.jpg);">
        <div class="mission__inner inner">
            <div class="mission__content">
                <h2 class="mission__heading heading animate pop-up">
                    Only you can Weave your Story
                </h2>
                <p class="mission__paragraph">
                    The Japanese Anime industry with decades of history needs fresh, international talent.<br>
                    We are working to connect overseas young talents with the industry for a more equitable, inclusive environment with open job opportunities and cultural interactions.
                </p>
                <a href="<?php echo esc_url( home_url( '/mission/' ) ); ?>" class="mission__button button">
                    <span class="button__text" button-text="Our Mission">
                        Our Mission
                    </span>
                </a>
            </div>
        </div>
    </section>
    <section class="roadmap section">
        <div class="roadmap__inner inner">
            <div class="roadmap__sticky-box">
                <div class="roadmap__sticky">
                    <h2 class="roadmap__heading heading animate pop-up">
                        Get Started Now
                    </h2>
                    <p class="roadmap__paragraph">
                        In our mission to make anime creation open to everyone, we provide support across three stages: learning, creating, and getting recognition.
                    </p>
                </div>
            </div>
            <div class="roadmap__scroll">
                <h3 class="roadmap__subheading animate pop-up">① <span class="roadmap__accent">Learn</span> Animation</h3>
                <p class="roadmap__paragraph">
                    Anime creation is not magic: it’s a result of collaboration across many animators who know the same ground of how anime should be created. A little flavor of creativity makes each animator unique: but everyone starts with practicing elementary shapes.<br><br>
                    Our learning platform provides you with essential skills and toolkits of anime creation, which eventually helps your creativity shine.
                </p>
                <h3 class="roadmap__subheading animate pop-up">② <span class="roadmap__accent">Share</span> your animation with the world</h3>
                <p class="roadmap__paragraph">
                    Anime creation is not magic: it’s a result of collaboration across many animators who know the same ground of how anime should be created. A little flavor of creativity makes each animator unique: but everyone starts with practicing elementary shapes.<br><br>
                    Our learning platform provides you with essential skills and toolkits of anime creation, which eventually helps your creativity shine.
                </p>
                <h3 class="roadmap__subheading animate pop-up">③ <span class="roadmap__accent">Connect</span> with your future partners</h3>
                <p class="roadmap__paragraph">
                    Anime creation is not magic: it’s a result of collaboration across many animators who know the same ground of how anime should be created. A little flavor of creativity makes each animator unique: but everyone starts with practicing elementary shapes.<br><br>
                    Our learning platform provides you with essential skills and toolkits of anime creation, which eventually helps your creativity shine.
                </p>
            </div>
        </div>
    </section>
    <section class="voice section">
        <div class="voice__inner inner">
            <h2 class="voice__heading heading">
                Meet the Community of African Anime Pioneers
            </h2>
            <ul class="voice__items">
                <li class="voice__item">
                    <video controls muted disablepictureinpicture playsinline loop src="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4" poster="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574/695eb28c1d29c860b6b38557_c76087770506d00f7039ff303b82505d_Seth%20Stop.avif" class="voice__video embedded-video">Message from our partner.</video>
                    <p class="voice__person">
                        <span class="voice__name">Name@Organization</span>
                    </p>
                </li>
                <li class="voice__item">
                    <video controls muted disablepictureinpicture playsinline loop src="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4" poster="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574/695eb28c1d29c860b6b38557_c76087770506d00f7039ff303b82505d_Seth%20Stop.avif" class="voice__video embedded-video">Message from our partner.</video>
                    <p class="voice__person">
                        <span class="voice__name">Name@Organization</span>
                    </p>
                </li>
                <li class="voice__item">
                    <video controls muted disablepictureinpicture playsinline loop src="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4" poster="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574/695eb28c1d29c860b6b38557_c76087770506d00f7039ff303b82505d_Seth%20Stop.avif" class="voice__video embedded-video">Message from our partner.</video>
                    <p class="voice__person">
                        <span class="voice__name">Name@Organization</span>
                    </p>
                </li>
                <li class="voice__item">
                    <video controls muted disablepictureinpicture playsinline loop src="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574%2F699dc01b81404e1b1b6c8404_Gary%20Preview%20%281%29_mp4.mp4" poster="https://cdn.prod.website-files.com/6939a31d6f0751cc94b4a574/695eb28c1d29c860b6b38557_c76087770506d00f7039ff303b82505d_Seth%20Stop.avif" class="voice__video embedded-video">Message from our partner.</video>
                    <p class="voice__person">
                        <span class="voice__name">Name@Organization</span>
                    </p>
                </li>
            </ul>
        </div>
    </section>
	<section class="works section">
		<div class="works__inner inner">
			<h2 class="works__heading heading">
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
	<section class="cta section">
		<div class="cta__inner inner">
			<h2 class="cta__heading heading">
				We Always Appreciate Your Voice
			</h2>
			<p class="cta__paragraph">
			If you have any questions regarding our activities and community, don't hesitate to reach out to us.<br>
			One small email can be the beginning of your big journey.
			</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta__button button">
                <span class="button__text" button-text="Contact">
                    Contact
                </span>
            </a>
		</div>
	</section>
	<?php get_footer(); ?>
</body>
</html>
