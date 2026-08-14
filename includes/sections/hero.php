<section class="hero">
	<div class="hero__inner">
		<p class="hero__message-text typewriter js-hero-message">
			Dream, Wish, Create
		</p>
		<p class="hero__message-text typewriter js-hero-message">
			Burst Out<br class="mobile"> Your Imagination
		</p>
		<p class="hero__message-text fade-in js-hero-message">
			Together
		</p>
	</div>
	<!-- 装飾目的（コンテンツは上のテキスト） -->
	<video id="top-video" class="hero__video" preload="metadata" aria-hidden="true" loop muted playsinline webkit-playsinline>
		<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/videos/webm/top-video.webm" type="video/webm">
		<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/videos/mp4/top-video.mp4" type="video/mp4">
		<!-- Videoタグがサポートされていない場合 -->
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/top-video-fallback.jpg" alt="">
	</video>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/top-video-fallback.jpg" alt="" id="top-video-fallback" class="hero__video hidden">
</section>
