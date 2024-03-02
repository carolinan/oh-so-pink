<?php
/**
 * Block patterns
 *
 * @package oh-so-pink
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'elements',
		array( 'label' => esc_html__( 'Design elements', 'oh-so-pink' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'oh-so-pink/menu-latest-posts-column',
		array(
			'title'      => esc_html__( 'Menu and latest posts in two columns', 'oh-so-pink' ),
			'categories' => array( 'elements' ),
			'content'    => '
			<!-- wp:columns {"align":"full","className":"is-style-oh-so-pink-no-bottom-margin"} -->
			<div class="wp-block-columns alignfull is-style-oh-so-pink-no-bottom-margin">
				<!-- wp:column {"width":"65%","backgroundColor":"purple","style":{"spacing":{"padding":{"top":"29px","right":"50px","bottom":"50px","left":"50px"}}}} -->
				<div class="wp-block-column has-purple-background-color has-background" style="flex-basis:65%;padding-top:29px;padding-right:50px;padding-bottom:50px;padding-left:50px">
					<!-- wp:navigation {"orientation":"vertical","textColor":"pale-purple","backgroundColor":"purple","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"xxl"} -->
					<!-- wp:navigation-link {"label":"Sample menu links:","url":"#","kind":"custom"} /-->
					<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom"} /-->
					<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom"} /-->
					<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom"} /-->
					<!-- /wp:navigation -->
					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"35%","style":{"spacing":{"padding":{"top":"0px","right":"50px","bottom":"50px","left":"50px"}}},"backgroundColor":"dark-purple","textColor":"pale-purple"} -->
				<div class="wp-block-column has-pale-purple-color has-dark-purple-background-color has-text-color has-background"
					style="flex-basis:35%;padding-top:0px;padding-right:50px;padding-bottom:50px;padding-left:50px">
					<!-- wp:latest-posts {"postsToShow":2,"displayPostContent":false,"excerptLength":19,"displayAuthor":true,"displayPostDate":true} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		',
		)
	);
}
