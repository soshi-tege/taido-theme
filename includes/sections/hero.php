<section class="hero">
	<div class="hero__inner">
		<div class="hero__message">
			<p class="hero__message-text typewriter-animation">
				Dream, Wish, Create
			</p>
		</div>
		<div class="hero__message">
			<p class="hero__message-text typewriter-animation">
				Burst Out<br class="mobile"> Your Imagination
			</p>
		</div>
		<div class="hero__message">
			<p class="hero__message-text typewriter-animation">
				Together
			</p>
		</div>
	</div>
	<video id="top-animation" class="hero__video" preload="metadata" autoplay loop muted playsinline webkit-playsinline>
		<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/videos/webm/top-video.webm" type="video/webm">
		<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/videos/mp4/top-video.mp4" type="video/mp4">
		<!-- Videoタグがサポートされていない場合 -->
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/top-video-fallback.jpg">
	</video>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/top-video-fallback.jpg" id="top-animation-fallback" class="hero__video hidden">
</section>
