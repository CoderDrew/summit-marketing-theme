<?php

/**
 * Title: Process Step
 * Slug: summit/process-step
 * Categories: featured
 * Description: A numbered process step with title and description
 */
?>

<!-- wp:group {"className":"process-step","style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group process-step">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|xs","margin":{"bottom":"var:preset|spacing|sm"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"fontSize":"lg","textColor":"summit-blue"} -->
		<h3 class="wp-block-heading has-summit-blue-color has-text-color has-lg-font-size">01</h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3,"fontSize":"xl"} -->
		<h3 class="wp-block-heading has-xl-font-size">Step Title</h3>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"textColor":"mist"} -->
	<p class="has-mist-color has-text-color">Description of this step in your process and what it accomplishes.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->