<?php

/**
 * Title: Content Section 2
 * Slug: musicmantra/content-section-2
 * Categories: musicmantra-patterns
 */
$musicmantra_url = trailingslashit(get_stylesheet_directory_uri());
$musicmantra_images = array(
    $musicmantra_url . 'assets/images/about_image_2.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--50);padding-bottom:0px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"lightbox":{"enabled":false},"id":1274,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[0]) ?>" alt="" class="wp-image-1274" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained","contentSize":"500px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
                <h5 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('About the MusicMantra', 'musicmantra') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"15px"}}}} -->
                <h2 class="wp-block-heading" style="margin-top:15px;font-style:normal;font-weight:600"><?php esc_html_e('Want your event to be loud? Have a crazy night with us!', 'musicmantra') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"0px","width":"2px"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"13px","bottom":"13px"}}},"borderColor":"primary","className":"is-style-button-hover-primary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor" style="font-size:18px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-primary-border-color wp-element-button" href="#" style="border-width:2px;border-radius:0px;padding-top:13px;padding-right:40px;padding-bottom:13px;padding-left:40px"><?php esc_html_e('Book Ticket', 'musicmantra') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->