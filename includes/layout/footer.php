<?php
/**
 * フッタータグのテンプレート.
 *
 * @package Taido
 */

?>

<footer class="footer">
    <div class="footer__inner inner">
    	<a class="footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="Arc and Beyond"></a>
    	<nav class="footer__nav">
    		<ul class="footer__items">
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    				Top
    			</a>
    			</li>
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/posts/' ) ); ?>">
    				Posts
    			</a>
    			</li>
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/category/works/' ) ); ?>">
    				Works
    			</a>
    			</li>
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>">
    				News
    			</a>
    			</li>
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
    				About
    			</a>
    			</li>
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/mission/' ) ); ?>">
    				Mission
    			</a>
    			</li>
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">
    				Projects
    			</a>
    			</li>
    			<li class="footer__item">
    			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
    				Contact
    			</a>
    			</li>
    		</ul>
    	</nav>
    	<p class="footer__copyright">
    		&copy; 2026 Arc & Beyond. All rights reserved.
    	</p>
    </div>
</footer>