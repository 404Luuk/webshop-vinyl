<?php

/**
 * Title: Newsletter Section
 * Slug: musicmantra/newsletter-section
 * Categories: musicmantra-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"80px","bottom":"80px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"large"} -->
            <h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Signup Newsletter', 'musicmantra') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} -->
            <h5 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Get all the latest news and updates directly in your email!', 'musicmantra') ?></h5>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:contact-form-7/contact-form-selector {"id":1127,"hash":"de17a25","title":"Newsletter Form","className":"musicmantra-newsletter"} -->
            <div class="wp-block-contact-form-7-contact-form-selector musicmantra-newsletter">[contact-form-7 id="de17a25" title="Newsletter Form"]</div>
            <!-- /wp:contact-form-7/contact-form-selector -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->