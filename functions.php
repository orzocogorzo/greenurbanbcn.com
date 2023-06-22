<?php
/**
 * Green Urban Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greenurban
 */

add_action( 'wp_enqueue_scripts', 'tewntytwentythree_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function tewntytwentythree_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'tewntytwentythree-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'greenurban-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'tewntytwentythree-style' ]
	);
}
