<?php
/**
 * Title: Archive header
 * Slug: oh-so-pink/header-archive
 * Categories: featured
 * Block Types: core/cover, core/query-title
 * Keywords: site header
 *
 * @package oh-so-pink
 * @since 1.0.0
 */

?>
<!-- wp:cover {"dimRatio":80,"minHeight":100,"minHeightUnit":"vh","gradient":"pale-purple-to-pink","contentPosition":"center center","isDark":false,"align":"full","className":"is-style-oh-so-pink-half-cover","style":{"color":{}}} -->
<div class="wp-block-cover alignfull is-light is-style-oh-so-pink-half-cover" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient has-pale-purple-to-pink-gradient-background"></span><div class="wp-block-cover__inner-container">
<!-- wp:template-part {"slug":"main-menu","theme":"oh-so-pink"} /-->
<!-- wp:query-title {"type":"archive","className":"oh-so-pink-text-stroke","textAlign":"center"} /-->
</div></div>
<!-- /wp:cover -->
