<?php
/**
 * Enqueuing items that are meant to appear on the front end. Despite the name, it is used for enqueuing both scripts and styles.
 *
 * @package BudaBuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

// if ( ! function_exists( 'bdbg_preloader_scripts' ) ) :
// 	function bdbg_preloader_scripts() {
// 		wp_enqueue_style( 'preloader-style', THEMEDIR_URI . 'css/preloader.css', false, THEME_VERSION );
// 		wp_enqueue_script( 'preloader-script', THEMEDIR_URI . 'js/preloader.js',  false,  THEME_VERSION );
// 	}
// 	add_action( 'wp_enqueue_scripts', 'bdbg_preloader_scripts', 999 );
// endif;

if ( ! function_exists( 'bdbg_enqueue_scripts' ) ) :
	/**
	 * Enqueues scripts and styles
	 *
	 * @since 1.00
	 */
	function bdbg_enqueue_scripts() {
		$icon_font = '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css';
		// Check if remote CDN available. If no, fallback to local resource.
		if ( wp_remote_retrieve_response_code( wp_safe_remote_get( $icon_font ) ) !== 200 ) :
			$icon_font = THEMEDIR_URI . 'fonts/font-awesome/font-awesome.css';
		endif;

		wp_enqueue_style( 'vendor-style', THEMEDIR_URI . 'css/vendor.css', null, THEME_VERSION, 'all' );
		// Safe icon font loading from CDN with local fallback.
		wp_enqueue_style( 'fa-icons', $icon_font, null, THEME_VERSION, 'all' );

		wp_enqueue_style( 'main-style', THEMEDIR_URI . 'css/main.css', null, THEME_VERSION, 'all' );

		wp_enqueue_script( 'vendor-script', THEMEDIR_URI . 'js/vendor.js', array( 'jquery' ),  THEME_VERSION, true );
		wp_enqueue_script( 'main-script', THEMEDIR_URI . 'js/main.js',  array( 'jquery' ),  THEME_VERSION, true );

	}
	add_action( 'wp_enqueue_scripts', 'bdbg_enqueue_scripts' );
endif;

if ( ! function_exists( 'bdbg_enqueue_admin' ) ) :
	/**
	 * Enqueues Admin scripts and styles
	 *
	 * @since 1.00
	 */
	function bdbg_enqueue_admin() {
		wp_enqueue_style( 'admin-style', THEMEDIR_URI . 'css/admin.css', array( 'wp-color-picker' ), THEME_VERSION, 'all' );
		// wp_enqueue_style( 'main-style', THEMEDIR_URI . 'css/main.css', null, THEME_VERSION, 'all' );

		wp_enqueue_script( 'main-script', THEMEDIR_URI . 'js/admin.js',  array( 'jquery', 'wp-color-picker' ),  THEME_VERSION, true );
	}
	add_action( 'admin_enqueue_scripts', 'bdbg_enqueue_admin' );
endif;

if ( ! function_exists( 'bdbg_enqueue_customizer' ) ) :
	/**
	 * Enqueues Customizer scripts and styles
	 *
	 * @since 1.00
	 */
	function bdbg_enqueue_customizer() {
		wp_enqueue_script( 'customizer-script', THEMEDIR_URI . 'js/customizer.js',  array( 'jquery', 'customize-preview' ),  THEME_VERSION, true );
	}
	add_action( 'customize_preview_init', 'bdbg_enqueue_customizer' );
endif;

if ( ! function_exists( 'bdbg_enqueue_customizer_validation' ) ) :
	/**
	 * Enqueues Customizer scripts and styles
	 *
	 * @since 1.00
	 */
	function bdbg_enqueue_customizer_validation() {
		$customizer_validator_errors = array(
			'isint_isreq' => __( 'Valid numeric value required!', 'budabuga' ),
		);

		wp_enqueue_script( 'customizer-validator', THEMEDIR_URI . 'js/customizer_validator.js',  array( 'jquery', 'customize-controls' ),  THEME_VERSION, true );
		wp_localize_script( 'customizer-validator', 'customizerErrors', $customizer_validator_errors );
	}
	add_action( 'customize_controls_enqueue_scripts', 'bdbg_enqueue_customizer_validation' );
endif;
