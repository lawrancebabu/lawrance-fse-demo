<?php
/**
 * Lawrance FSE Demo functions.
 *
 * @package lawrance-fse-demo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup: editor styles (style.css loaded inside the editor canvas too).
 */
function lfd_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'lfd_setup' );

/**
 * Front-end stylesheet (no jQuery dependency).
 */
function lfd_enqueue_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'lawrance-fse-demo-style', get_stylesheet_uri(), array(), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lfd_enqueue_styles' );

/**
 * Custom block styles, selectable in the editor's Styles panel.
 */
function lfd_register_block_styles() {
	register_block_style( 'core/group', array( 'name' => 'lfd-card', 'label' => __( 'Card', 'lawrance-fse-demo' ) ) );
	register_block_style( 'core/button', array( 'name' => 'lfd-outline-pill', 'label' => __( 'Outline pill', 'lawrance-fse-demo' ) ) );
	register_block_style( 'core/image', array( 'name' => 'lfd-rounded-shadow', 'label' => __( 'Rounded shadow', 'lawrance-fse-demo' ) ) );
}
add_action( 'init', 'lfd_register_block_styles' );

/**
 * Pattern category for the theme's patterns.
 */
function lfd_register_pattern_category() {
	register_block_pattern_category( 'lawrance-fse-demo', array( 'label' => __( 'Lawrance FSE Demo', 'lawrance-fse-demo' ) ) );
}
add_action( 'init', 'lfd_register_pattern_category' );
