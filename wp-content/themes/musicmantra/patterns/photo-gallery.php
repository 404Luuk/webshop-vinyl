<?php

/**
 * Title: Photo Gallery
 * Slug: musicmantra/photo-gallery
 * Categories: musicmantra-patterns
 */
$musicmantra_url = trailingslashit(get_stylesheet_directory_uri());
$musicmantra_images = array(
    $musicmantra_url . 'assets/images/gallery_1.jpg',
    $musicmantra_url . 'assets/images/gallery_2.jpg',
    $musicmantra_url . 'assets/images/gallery_3.jpg',
    $musicmantra_url . 'assets/images/gallery_4.jpg',
    $musicmantra_url . 'assets/images/gallery_5.jpg',
    $musicmantra_url . 'assets/images/gallery_6.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"120px","top":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"96%"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
    <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('“Great music comes from the heart, but popular music comes from the soul”', 'musicmantra') ?></h5>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading"><?php esc_html_e('Event', 'musicmantra') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
        <h2 class="wp-block-heading has-primary-color has-text-color has-link-color"><?php esc_html_e('Gallery', 'musicmantra') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"50px"}}}} -->
    <div class="wp-block-columns" style="margin-top:50px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column"><!-- wp:image {"lightbox":{"enabled":true},"id":1401,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[0]) ?>" alt="" class="wp-image-1401" style="object-fit:cover" /></figure>
            <!-- /wp:image -->

            <!-- wp:gallery {"linkTo":"none"} -->
            <figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"lightbox":{"enabled":true},"id":1394,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[1]) ?>" alt="" class="wp-image-1394" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"lightbox":{"enabled":true},"id":1395,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[2]) ?>" alt="" class="wp-image-1395" /></figure>
                <!-- /wp:image -->
            </figure>
            <!-- /wp:gallery -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column"><!-- wp:gallery {"linkTo":"none"} -->
            <figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"lightbox":{"enabled":true},"id":1396,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[3]) ?>" alt="" class="wp-image-1396" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"lightbox":{"enabled":true},"id":1397,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[4]) ?>" alt="" class="wp-image-1397" /></figure>
                <!-- /wp:image -->
            </figure>
            <!-- /wp:gallery -->

            <!-- wp:image {"lightbox":{"enabled":true},"id":1402,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($musicmantra_images[5]) ?>" alt="" class="wp-image-1402" style="object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->