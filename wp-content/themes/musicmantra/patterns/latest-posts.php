<?php

/**
 * Title: Latest Posts
 * Slug: musicmantra/latest-posts
 * Categories: musicmantra-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"120px","top":"100px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
    <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Blogs', 'musicmantra') ?></h5>
    <!-- /wp:heading -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading -->
        <h2 class="wp-block-heading"><?php esc_html_e('Recent News', 'musicmantra') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color">&amp; <?php esc_html_e('Articles', 'musicmantra') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":36,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:cover {"useFeaturedImage":true,"minHeight":360,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 36%,rgb(0,0,0) 100%)","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"musicmantra-post-cover","layout":{"type":"constrained"}} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-center musicmantra-post-cover" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 36%,rgb(0,0,0) 100%)"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:post-date {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} /-->

                <!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->
            </div>
        </div>
        <!-- /wp:cover -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->