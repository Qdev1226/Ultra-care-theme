<?php
/**
 * Title: Archives
 * Slug: ultracare/archive
 * Categories: ultracare, archive
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/inner-banner.jpg'); ?>","id":19,"dimRatio":50,"minHeight":300,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-19" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/inner-banner.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"40px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":10,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":300,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}},"className":"lite-shadow","layout":{"type":"default"}} -->
<div class="wp-block-group lite-shadow" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:post-title /-->

<!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":""} /-->

<!-- wp:read-more {"content":"Read More","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"16px"} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center"},"fontSize":"medium"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center"><?php esc_html_e('Sorry, No posts exists...','ultracare'); ?></h3>
<!-- /wp:heading -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Search', 'ultracare' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Popular Posts', 'ultracare' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":38,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"82%"} -->
<div class="wp-block-column" style="flex-basis:82%"><!-- wp:post-title {"level":6,"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"spacing":{"margin":{"top":"5px","right":"0px","bottom":"0px","left":"0px"}}},"className":"truncate-line"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Categories', 'ultracare' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"className":"sidebar-meta-list"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Archives', 'ultracare' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:archives {"className":"sidebar-meta-list"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px"><!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h3 style="margin-bottom:10px;letter-spacing:1px"><?php esc_html_e( 'Tags', 'ultracare' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:tag-cloud {"showTagCounts":true,"className":"is-style-outline"} /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->