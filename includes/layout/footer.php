<?php
/**
 * フッタータグのテンプレート.
 *
 * @package Taido
 */

?>

<footer class="footer">
    <div class="footer__inner inner">
    	<a class="footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    	   <picture>
    	       <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.webp" type="image/webp">
               <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" type="image/png">
    	       <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="TAIDO Project Logo">
    	   </picture>
    	</a>
    	<nav class="footer__nav" aria-label="Footer Navigation">
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
    		&copy; 2026 TAIDO Project. All rights reserved.
    	</p>
    </div>
</footer>