<?php
/**
 * Block styles.
 *
 * @package oh-so-pink
 * @since 1.0.0
 */

/**
 * Register block styles
 */
function oh_so_pink_register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'  => 'oh-so-pink-half-cover',
			'label' => __( 'Media Left', 'oh-so-pink' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'  => 'oh-so-pink-half-cover-right',
			'label' => __( 'Media Right', 'oh-so-pink' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'oh-so-pink-text-stroke',
			'label' => __( 'Text stroke', 'oh-so-pink' ),
		)
	);
}
add_action( 'init', 'oh_so_pink_register_block_styles' );
