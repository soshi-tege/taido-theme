<?php
/**
 * トップページのローディングアニメーション.
 *
 * @package Taido
 */

?>
<div class="preloader" id="preloader">
	<ul class="preloader__image-list">
		<li class="preloader__container">
			<img class="preloader__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/icon.png" alt="Taido Project">
		</li>
		<li class="preloader__container">
			<img class="preloader__image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="Taido Project">
		</li>
	</ul>
</div>
