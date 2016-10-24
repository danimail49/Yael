<?php
/**
 * Yael functions and definitions
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/**
 * Theme Constants
 * Any constant we need to use in a theme should go here.
 *
 * @since 1.00
 */
define( 'THEMEDIR_URI', trailingslashit( get_template_directory_uri() ), true ); // Path to theme folder.
define( 'THEMEDIR', trailingslashit( get_template_directory() ), true ); // Path to theme folder.
define( 'FRAMEWORK', THEMEDIR . 'framework/', true ); // Framework Theme base path.
define( 'FRAMEWORK_ADMIN', THEMEDIR . 'framework/admin/', true ); // Framework Theme Admin Scripts path.
define( 'FRAMEWORK_CLASSES', THEMEDIR . 'framework/classes/', true ); // Framework Classes  path.
define( 'FRAMEWORK_CORE', THEMEDIR . 'framework/core/', true ); // Framework Theme Modules base path.
define( 'FRAMEWORK_SETTINGS', THEMEDIR . 'framework/settings/', true ); // Framework Theme Settings base path.
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) ); // Current Theme version.

/*----------------------------------------------------------------------------
   FRAMEWORK CLASSES
----------------------------------------------------------------------------*/
// Main navigation walker.
require_once( FRAMEWORK_CLASSES . 'class-bdbg-menu-walker-main.php' );
// Side navigation walker.
require_once( FRAMEWORK_CLASSES . 'class-bdbg-menu-walker-side.php' );

/**
 * Incule custom controls classes.
 * Without hooking inside function class dont see $wp_customize variable.
 *
 * @since 1.00
 *
 * @param  object $wp_customize Customizr manager object.
 */
function customizer_register_classes( $wp_customize ) {
	require_once( FRAMEWORK_CLASSES . 'class-bdbg-alpha-color-picker.php' );
	require_once( FRAMEWORK_CLASSES . 'class-bdbg-int-customizer-control.php' );
}
add_action( 'customize_register', 'customizer_register_classes' );

// Customizer controls custom validation.
// require_once( FRAMEWORK_SETTINGS . 'budabuga_customizer_validator.php' );

// Customizer controls settings.
require_once( FRAMEWORK_SETTINGS . 'budabuga-customizer-controls.php' );
// Creating theme customizer controls.
require_once( FRAMEWORK_CLASSES . 'class-bdbg-theme-customizer.php' );
Bdbg_Theme_Customizer::init( $panels, $sections, $settings, $controls );

// Theme dynamic sidebars settings.
require_once( FRAMEWORK_SETTINGS . 'budabuga-dynamic-sidebars.php' );
// Creating theme widget areas.
require_once( FRAMEWORK_CLASSES . 'class-bdbg-dynamic-sidebar.php' );
Bdbg_Dynamic_Sidebar::init( $widget_list, $widget_args );

/*----------------------------------------------------------------------------
   FRAMEWORK FUNCTIONS
----------------------------------------------------------------------------*/
// Framework init.
require_once( FRAMEWORK_CORE . 'budabuga-init.php' );
// Framework scripts.
require_once( FRAMEWORK_CORE . 'budabuga-scripts.php' );
// Customizer styles.
require_once( FRAMEWORK_CORE . 'budabuda-css-customizer.php' );
// Framework views.
require_once( FRAMEWORK_CORE . 'budabuga-views.php' );
