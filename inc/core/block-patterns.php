<?php

/**
 * fluxari: Block Patterns
 *
 * @since fluxari 1.0.0
 */

/**
 * Registers pattern categories for fluxari
 *
 * @since fluxari 1.0.0
 *
 * @return void
 */
function fluxari_register_pattern_category()
{
	$block_pattern_categories = array(
		'fluxari' => array('label' => __('Fluxari', 'fluxari')),
	);

	$block_pattern_categories = apply_filters('fluxari_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'fluxari_register_pattern_category', 9);
