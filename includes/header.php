<?php
/**
 * ヘッダーのテンプレート.
 *
 * @package Taido
 */

?>
<header class="header 
<?php
if ( is_front_page() ) {
	echo 'fixed'; }
?>
">
	<div class="header__inner inner">
		<a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="Arc and Beyond"></a>
		<nav class="header__nav-pc nav-pc desktop">
			<ul class="nav-pc__items">
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/category/work/' ) ); ?>">Works</a>
				</li>
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>">News</a>
				</li>
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
				</li>
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/mission/' ) ); ?>">Mission</a>
				</li>
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/partner/' ) ); ?>">Partners</a>
				</li>
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
				</li>
			</ul>
		</nav>
		<button id="hamburger" class="header__drawer js-hamburger mobile">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<nav id="sp-nav" class="header__nav-sp nav-sp mobile">
			<ul class="nav-sp__items">
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/category/work/' ) ); ?>">Works</a>
				</li>
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>">News</a>
				</li>
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
				</li>
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/mission/' ) ); ?>">Mission</a>
				</li>
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/partner/' ) ); ?>">Partners</a>
				</li>
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
</header>