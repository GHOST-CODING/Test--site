<?php
/**
 * Title: Grid Boxed
 * Slug: grid-boxed
 * Categories: blog
 * ID: 35
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|xs","left":"var:preset|spacing|xs","top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-sub-heading"} -->
<p class="aligncenter has-text-align-center is-style-sub-heading aligncenter" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Blog</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","gradient":"heading"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-gradient-background has-background">Latest news</h2>
<!-- /wp:heading -->
<!-- wp:query {"queryId":0,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|lg"},"blockGap":"1.5em"}}} -->
<div class="wp-block-query alignwide" style="padding-top:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-surface","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-surface" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"base"} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","right":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|xs"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)"><!-- wp:post-date {"displayType":"modified","fontSize":"14"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1"}},"fontSize":"24"} /-->
<!-- wp:post-excerpt {"moreText":"Read more","excerptLength":24,"hideReadMore":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|lg"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="aligncenter has-text-align-center aligncenter"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->