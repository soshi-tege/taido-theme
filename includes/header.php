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
	echo 'fixed-md'; }
?>
">
	<div class="header__inner inner">
		<a class="header__logo" href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="Arc and Beyond"></a>
		<nav class="header__nav nav">
			<ul class="nav__items">
				<li class="nav__item">
					<a href="<?php echo esc_url( home_url( '/category/work/' ) ); ?>">Works</a>
				</li>
				<li class="nav__item">
					<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
				</li>
				<li class="nav__item">
					<a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>">News</a>
				</li>
				<li class="nav__item">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
				</li>
				<li class="nav__item">
					<a href="<?php echo esc_url( home_url( '/mission/' ) ); ?>">Mission</a>
				</li>
				<li class="nav__item">
					<a href="#">EN | JP</a>
				</li>
			</ul>
		</nav>
	</div>
</header>