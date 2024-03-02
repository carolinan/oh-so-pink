<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oh-so-pink
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'OH_SO_PINK_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function oh_so_pink_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/style-shared.css' );

	/*
	 * Load additional block styles.
	 */
	$styled_blocks = [
		'navigation',
	];

	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "oh-so-pink-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.css" ),
		);
		wp_enqueue_block_style( "core/$block_name", $args );
	}
}
add_action( 'after_setup_theme', 'oh_so_pink_setup' );


// Block styles.
require_once 'inc/block-styles.php';

// Block patterns.
require_once 'inc/block-patterns.php';

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function oh_so_pink_styles() {
	wp_enqueue_style(
		'oh-so-pink-style',
		get_stylesheet_uri(),
		[],
		OH_SO_PINK_VERSION
	);
	wp_enqueue_style(
		'oh-so-pink-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.css' ),
		[],
		OH_SO_PINK_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'oh_so_pink_styles' );

/**
 * Show '(No title)' if post has no title.
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = __( '(No title)', 'oh-so-pink' );
		}

		return $title;
	}
);

