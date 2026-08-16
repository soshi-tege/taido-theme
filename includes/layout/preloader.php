<?php
/**
 * トップページのローディングアニメーション.
 *
 * @package Taido
 */

?>
<!-- スクリーンリーダーには表示しない -->
<div class="preloader" id="preloader" aria-hidden="true">
    <div class="preloader__container">
        <picture class="preloader__logo">
	        <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.webp" type="image/webp">
            <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" type="image/png">
	        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="">
	    </picture>
        <picture class="preloader__icon">
	        <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/icon.webp" type="image/webp">
            <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/icon.png" type="image/png">
	        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/icon.png" alt="">
	    </picture>
    </div>
</div>
