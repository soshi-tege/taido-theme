<?php
/**
 * ヘッダータグのテンプレート.
 *
 * @package Taido
 */

?>
<?php // トップページのみ先頭固定＋スクロールで表示. ?>
<header class="header 
<?php
if ( is_front_page() ) {
	echo 'fixed header-transparent'; }
?>
" 
<?php
if ( is_front_page() ) {
	echo "id='header-scroll'"; }
?>
>
	<div class="header__inner inner">
    <a class="header__skip-to-main" id="skip-to-main" href="#main-content">Skip to Main Content</a>
	<?php
	// トップページにおいてのみロゴをh1タグにする.
	$logo_tag = is_front_page() ? 'h1' : 'div';
	?>
	<<?php echo esc_html( $logo_tag ) ?> class="header__logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.svg" alt="TAIDO Project">
		</a>
    </<?php echo esc_html( $logo_tag ) ?>>
    <?php is_front_page() ? '</h1>' : ''; ?>
		<nav class="header__nav-pc nav-pc" aria-label="Main Navigation">
			<ul class="nav-pc__items">
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/posts/' ) ); ?>">Posts</a>
				</li>
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/category/works/' ) ); ?>">Works</a>
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
					<a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">Projects</a>
				</li>
				<li class="nav-pc__item">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
				</li>
				<li class="nav-pc__item nav-pc__item--social">
					<a target="_blank" aria-label="Link to Instagram" href="https://www.instagram.com/taido_animation_africa/">
					    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/instagram.svg" alt="Instagram">
					</a>
				</li>
			</ul>
		</nav>
		<button
		id="hamburger-button"
		class="header__drawer"
		aria-controls="sp-nav"
		aria-label="Open Navigation Menu"
		aria-expanded="false"
		>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</button>
		<nav
		id="sp-nav"
		class="header__nav-sp nav-sp"
		aria-label="Main Navigation"
		inert
		>
			<ul class="nav-sp__items">
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/posts/' ) ); ?>">Posts</a>
				</li>
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/category/works/' ) ); ?>">Works</a>
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
					<a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">Projects</a>
				</li>
				<li class="nav-sp__item">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
				</li>
				<li class="nav-sp__item nav-sp__item--social">
					<a target="_blank" aria-label="Link to Instagram" href="https://www.instagram.com/taido_animation_africa/">
					    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/instagram.svg" alt="Instagram">
					</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
