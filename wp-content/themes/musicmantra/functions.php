<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function musicmantra_scripts()
{
    // enqueue parent style
    wp_enqueue_style('musicmantra-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'musicmantra_scripts');

/**
 * Registers pattern categories.
 *
 * @since musicmantra 1.0.0
 *
 * @return void
 */
function musicmantra_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'musicmantra-patterns' => array('label' => __('MusicMantra Patterns', 'musicmantra'))
    );

    $block_pattern_categories = apply_filters('musicmantra_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'musicmantra_register_pattern_category', 9);
