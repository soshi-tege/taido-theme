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
        <img class="preloader__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/icon.png" alt="">
        <img class="preloader__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="">
    </div>
</div>
