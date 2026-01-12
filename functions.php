<?php

/**
 * Summit Marketing Theme functions
 *
 * This is a Full Site Editing (FSE) theme.
 * Most functionality is handled by WordPress core and theme.json.
 * Only add functions here when blocks/theme.json cannot handle the need.
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function summit_marketing_setup()
{
    // Add support for editor styles
    add_theme_support('editor-styles');

    // Enqueue editor styles (optional: only if you need editor-specific styles)
    // add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'summit_marketing_setup');

/**
 * Register block patterns
 */
function summit_marketing_register_patterns()
{
    register_block_pattern_category('summit', array(
        'label' => __('Summit Patterns', 'summit-marketing')
    ));
}
add_action('init', 'summit_marketing_register_patterns');

/**
 * Enqueue theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'summit-main',
        get_theme_file_uri('/assets/css/main.css'),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'animations',
        get_theme_file_uri('/assets/js/animations.js'),
        [],
        wp_get_theme()->get('Version'),
        true
    );
});
