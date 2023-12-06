<?php

/**
 * Title: Default Footer
 * Slug: musicmantra/footer-default
 * Categories: musicmantra-patterns, footer
 */
$musicmantra_url = trailingslashit(get_stylesheet_directory_uri());
$musicmantra_images = array(
    $musicmantra_url . 'assets/images/logo_icon.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"width":"0px","style":"none"},"right":{},"bottom":{},"left":{}}},"textColor":"foregound-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-foregound-alt-color has-text-color" style="border-top-style:none;border-top-width:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"60px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px">
        <!-- wp:image {"id":1164,"width":"auto","height":"80px","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($musicmantra_images[0]) ?>" alt="" class="wp-image-1164" style="width:auto;height:80px" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0px","textTransform":"uppercase"}},"textColor":"foregound-alt","fontSize":"medium","fontFamily":"playfair-display"} -->
        <h3 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-playfair-display-font-family has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('MusicMantra', 'musicmantra') ?></h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('14 Fourth Avenue, California, Cal 192831', 'musicmantra') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:paragraph -->
        <p><?php esc_html_e('email@example.com', 'musicmantra') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>|</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('+1 (012) 234-5678', 'musicmantra') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|40"},"margin":{"top":"60px","bottom":"60px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:60px;margin-bottom:60px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

        <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

        <!-- wp:social-link {"url":"#","service":"spotify"} /-->

        <!-- wp:social-link {"url":"#","service":"twitter"} /-->

        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    </ul>
    <!-- /wp:social-links -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('Proudly powered by WordPress&nbsp;|&nbsp;Theme: MusicMantra by&nbsp; CozyThemes.', 'musicmantra') ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"fotawp-scrollto-top is-style-button-hover-white-bgcolor"} -->
    <div class="wp-block-button fotawp-scrollto-top is-style-button-hover-white-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'musicmantra') ?></a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->