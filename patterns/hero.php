<?php
/**
 * Title: Hero
 * Slug: lawrance-fse-demo/hero
 * Categories: lawrance-fse-demo, banner
 * Description: Full-width gradient hero with headline and two buttons.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"gradient":"primary-to-accent","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-to-accent-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Full Site Editing · Block themes · theme.json', 'lawrance-fse-demo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-link-color has-xx-large-font-size"><?php esc_html_e( 'Fast, editable WordPress sites built the modern way.', 'lawrance-fse-demo' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Every template, header and footer on this site is editable in the Site Editor, driven by theme.json design tokens. No page builder required.', 'lawrance-fse-demo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="#services"><?php esc_html_e( 'See services', 'lawrance-fse-demo' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#contact"><?php esc_html_e( 'Get in touch', 'lawrance-fse-demo' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
