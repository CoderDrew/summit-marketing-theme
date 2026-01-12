<?php

/**
 * Title: Homepage Hero
 * Slug: summit/hero-home
 * Categories: featured, call-to-action
 * Description: Hero section with headline, description, and action buttons
 */
?>

<!-- wp:group {"className":"hero","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero">
	<!-- wp:heading {"level":1,"fontSize":"hero","textAlign":"center"} -->
	<h1 class="wp-block-heading has-text-align-center has-hero-font-size">Growth at scale</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"mist","fontSize":"lg"} -->
	<p class="has-text-align-center has-mist-color has-text-color has-lg-font-size">We engineer marketing systems that drive measurable results. No vanity metrics. No guesswork.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"summit-blue","textColor":"cloud"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-cloud-color has-summit-blue-background-color has-text-color has-background wp-element-button">Book Strategy Call</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Case Studies</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->