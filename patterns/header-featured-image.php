<?php
/**
 * Title: Header with featured image
 * Slug: oh-so-pink/header-featured-image
 * Categories: featured
 * Block Types: core/cover, core/post-title
 * Keywords: site header
 *
 * @package oh-so-pink
 * @since 1.0.0
 */

?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"minHeight":100,"minHeightUnit":"vh","gradient":"pale-purple-to-pink","contentPosition":"center center","isDark":false,"align":"full","className":"is-style-oh-so-pink-half-cover"} -->
<div class="wp-block-cover alignfull is-light is-style-oh-so-pink-half-cover" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient has-pale-purple-to-pink-gradient-background"></span><div class="wp-block-cover__inner-container">
<!-- wp:template-part {"slug":"main-menu","theme":"oh-so-pink"} /-->
<!-- wp:post-title {"textAlign":"center","level":1,"className":"oh-so-pink-text-stroke","fontSize":"xxxl"} /-->
</div></div>
<!-- /wp:cover -->
