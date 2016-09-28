<?php
/**
 * Enqueuing items that are meant to appear on the front end. Despite the name, it is used for enqueuing both scripts and styles.
 *
 * @package BudaBuga framework
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/**
 * Enqueues scripts and styles
 *
 * @since 1.00
 */
function budabuga_enqueue_scripts() {
	wp_enqueue_style( 'vendor-style', THEMEDIR_URI . 'css/vendor.css', null, false, 'all' );
	wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', null, false, 'all' );
	wp_enqueue_style( 'main-style', THEMEDIR_URI . 'css/main.css', null, false, 'all' );

	wp_enqueue_script( 'vendor-script', THEMEDIR_URI . 'js/vendor.js', array( 'jquery' ),  null, true );
	wp_enqueue_script( 'main-script', THEMEDIR_URI . 'js/main.js',  array( 'jquery' ),  null, true );
}
add_action( 'wp_enqueue_scripts', 'budabuga_enqueue_scripts' );
