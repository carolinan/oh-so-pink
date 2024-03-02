<?php
/**
 * Title: Header for the home page
 * Slug: oh-so-pink/header-home
 * Categories: featured
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 *
 * @package oh-so-pink
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>","dimRatio":80,"minHeight":100,"minHeightUnit":"vh","gradient":"pale-purple-to-pink","contentPosition":"top center","align":"full","className":"is-style-oh-so-pink-half-cover"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-top-center is-style-oh-so-pink-half-cover" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-pale-purple-to-pink-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"constrained","justifyContent":"right"}} -->
	<div class="wp-block-group" style="min-height:100vh">
		<!-- wp:template-part {"slug":"main-menu","theme":"oh-so-pink","align":"full"} /-->
		<!-- wp:site-title {"textAlign":"center","isLink":false,"align":"full","style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"8rem"}}},"className":"is-style-oh-so-pink-text-stroke","fontSize":"xxxxl"} /-->
	</div>
	<!-- /wp:group -->
</div>
</div>
<!-- /wp:cover -->
