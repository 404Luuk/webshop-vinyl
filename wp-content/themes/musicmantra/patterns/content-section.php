<?php

/**
 * Title: Content Section
 * Slug: musicmantra/content-section
 * Categories: musicmantra-patterns
 */
$musicmantra_url = trailingslashit(get_stylesheet_directory_uri());
$musicmantra_images = array(
    $musicmantra_url . 'assets/images/about_image.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"120px","bottom":"120px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('About the MusicMantra', 'musicmantra') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"15px"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:15px;font-style:normal;font-weight:600"><?php esc_html_e('Loving Music Since Our Childhood', 'musicmantra') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Cras tincidunt tellus at mi tristique rhoncus. Etiam dapibus rutrum leo cons ectetur accumsan. Vivamus viverra ante turpis, dignissim condimentum elit egestas sit amet.', 'musicmantra') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Phasellus fauCras tincidunt tellus at mi tristique rhoncus. Etiam dapibus rutrum leo consectetur accumsan. Vivamus viverra ante tu dapibus rutrum leo consectetur accumsan. Vivamus viverra ante tu', 'musicmantra') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"0px"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"className":"is-style-button-hover-primary-color musicmantra-btns"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-color musicmantra-btns" style="font-size:18px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e('Read More', 'musicmantra') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"lightbox":{"enabled":false},"id":1266,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[0]) ?>" alt="" class="wp-image-1266" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->