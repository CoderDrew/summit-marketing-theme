<?php

/**
 * Title: Service Card
 * Slug: summit/service-card
 * Categories: featured
 * Description: A card component for displaying a service with title and description
 */
?>

<!-- wp:group {"className":"service-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-card">
	<!-- wp:heading {"level":3,"fontSize":"xl"} -->
	<h3 class="wp-block-heading has-xl-font-size">Service Title</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"mist"} -->
	<p class="has-mist-color has-text-color">Brief description of the service and what value it provides to clients.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->