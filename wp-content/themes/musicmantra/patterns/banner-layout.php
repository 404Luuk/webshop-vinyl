<?php

/**
 * Title: Banner Section
 * Slug: musicmantra/banner-layout
 * Categories: musicmantra-patterns
 */
$musicmantra_url = trailingslashit(get_stylesheet_directory_uri());
$musicmantra_images = array(
    $musicmantra_url . 'assets/images/banner_image.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($musicmantra_images[0]) ?>","id":1187,"dimRatio":30,"focalPoint":{"x":0.51,"y":0.5},"minHeight":950,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"120px"}}},"className":"musicmantra-banner-cover","layout":{"type":"constrained"}} -->
<div class="wp-block-cover musicmantra-banner-cover" style="margin-top:0;margin-bottom:0;padding-bottom:120px;min-height:950px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1187" alt="" src="<?php echo esc_url($musicmantra_images[0]) ?>" style="object-position:51% 50%" data-object-fit="cover" data-object-position="51% 50%" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"326px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"xxxx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-xxxx-large-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('We Rock The World', 'musicmantra') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"30px"}}}} -->
        <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"width":"2px","radius":"0px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"13px","bottom":"13px"}}},"className":"is-style-button-hover-primary-bgcolor","fontSize":"x-small"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-x-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:2px;border-radius:0px;padding-top:13px;padding-right:40px;padding-bottom:13px;padding-left:40px"><?php esc_html_e('BUY ALBUM', 'musicmantra') ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"foregound-alt","textColor":"background-alt","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"border":{"radius":"0px","width":"2px"},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"13px","bottom":"13px"}}},"borderColor":"foregound-alt","className":"is-style-button-hover-primary-bgcolor","fontSize":"x-small"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-x-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-background-alt-color has-foregound-alt-background-color has-text-color has-background has-link-color has-border-color has-foregound-alt-border-color wp-element-button" style="border-width:2px;border-radius:0px;padding-top:13px;padding-right:40px;padding-bottom:13px;padding-left:40px"><?php esc_html_e('LIVE EVENTS', 'musicmantra') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->