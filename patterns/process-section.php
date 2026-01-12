<?php

/**
 * Title: Process Section
 * Slug: summit/process-section
 * Categories: featured
 * Description: Complete process section with heading and three process steps
 */
?>

<!-- wp:group {"className":"process-section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull process-section">
	<!-- wp:heading {"level":2,"fontSize":"2xl","textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size">Our Process</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"mist","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|lg"}}}} -->
	<p class="has-text-align-center has-mist-color has-text-color">A clear, repeatable framework designed to drive growth without guesswork.</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"process-steps","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
	<div class="wp-block-group process-steps">
		<!-- wp:pattern {"slug":"summit/process-step"} /-->
		<!-- wp:pattern {"slug":"summit/process-step"} /-->
		<!-- wp:pattern {"slug":"summit/process-step"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->