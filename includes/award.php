<?php
/**
 * フロントページのAwardセクションテンプレート.
 *
 * @package Taido
 */

?>
<section class="award section">
	<div class="award__inner inner">
		<h2 class="award__heading heading">
			We Seek Your Unique Voice and Talent
		</h2>
		<p class="award__paragraph paragraph">
			Learn more about our award system
		</p>
		<div class="accordion">
			<details class="award__accordion accordion__details">
				<summary class="accordion__summary">
					<span role="term" aria-details="pure-css">Find out about the details and eligibility</span>
				</summary>
			</details>
			<div role="definition" class="accordion__content">
				<p>There is no upcoming award.</p>
			</div>
		</div>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="award__button button">
			Contact us for any question
		</a>
	</div>
</section>
