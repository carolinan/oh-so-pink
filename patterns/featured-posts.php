<?php
/**
 * Title: Featured posts
 * Slug: oh-so-pink/featured-posts
 * Categories: featured
 * Block Types: core/cover, core/query-title
 * Keywords: site header
 * Description: Requires the first sticky post to have a featured image.
 *
 * @package oh-so-pink
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-headphones2.jpg' ) ); ?>","dimRatio":80,"minHeight":100,"minHeightUnit":"vh","gradient":"pink-to-pale-purple","contentPosition":"center center","align":"full","className":"is-style-oh-so-pink-half-cover"} -->
<div class="wp-block-cover alignfull is-style-oh-so-pink-half-cover" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-pink-to-pale-purple-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-headphones2.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"displayLayout":{"type":"list"},"layout":{"inherit":true}} -->
<div class="wp-block-query">
<!-- wp:paragraph {"textColor":"black","fontSize":"medium"} -->
<p class="has-black-color has-text-color has-medium-font-size"><strong><?php esc_html_e( 'FEATURED', 'oh-so-pink'); ?></strong></p>
<!-- /wp:paragraph -->
<!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div></div>
<!-- /wp:cover -->
