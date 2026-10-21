<?php
/**
 * Title: Services grid
 * Slug: lawrance-fse-demo/services
 * Categories: lawrance-fse-demo, featured
 * Description: Three-column services grid using the custom Card block style.
 */
?>
<!-- wp:group {"anchor":"services","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div id="services" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What I build', 'lawrance-fse-demo' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-lfd-card","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-lfd-card" style="min-height:100%"><!-- wp:paragraph {"textColor":"primary","fontSize":"x-large","style":{"typography":{"fontWeight":"800"}}} -->
<p class="has-primary-color has-text-color has-x-large-font-size" style="font-weight:800">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Block themes', 'lawrance-fse-demo' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary-text"} -->
<p class="has-secondary-text-color has-text-color"><?php esc_html_e( 'Custom FSE themes with theme.json tokens, templates, parts and style variations editors can safely change.', 'lawrance-fse-demo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-lfd-card","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-lfd-card" style="min-height:100%"><!-- wp:paragraph {"textColor":"primary","fontSize":"x-large","style":{"typography":{"fontWeight":"800"}}} -->
<p class="has-primary-color has-text-color has-x-large-font-size" style="font-weight:800">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Patterns &amp; custom blocks', 'lawrance-fse-demo' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary-text"} -->
<p class="has-secondary-text-color has-text-color"><?php esc_html_e( 'Reusable synced and unsynced patterns, locked layouts and custom blocks built with block.json.', 'lawrance-fse-demo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-lfd-card","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-lfd-card" style="min-height:100%"><!-- wp:paragraph {"textColor":"primary","fontSize":"x-large","style":{"typography":{"fontWeight":"800"}}} -->
<p class="has-primary-color has-text-color has-x-large-font-size" style="font-weight:800">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Performance &amp; integrations', 'lawrance-fse-demo' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary-text"} -->
<p class="has-secondary-text-color has-text-color"><?php esc_html_e( 'Fast Core Web Vitals, REST API endpoints, WooCommerce, CRM and payment integrations.', 'lawrance-fse-demo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
