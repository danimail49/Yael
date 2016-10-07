<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @package BudaBuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

if ( ! function_exists( 'bdbg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.00
	 */
	function bdbg_setup() {
		// Hide WordPress version.
		remove_action( 'wp_head', 'wp_generator' );

		// Make theme available for translation.
		load_theme_textdomain( 'budabuga', trailingslashit( THEMEDIR ) . 'languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails', array( 'post' ) );

		// This theme uses wp_nav_menu() in three locations.
		register_nav_menus( array(
			'main' => __( 'Primary Menu', 'budabuga' ),
			'side' => __( 'Side Menu', 'budabuga' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		) );
	}
endif; // budabuga_setup.
add_action( 'after_setup_theme', 'bdbg_setup' );
