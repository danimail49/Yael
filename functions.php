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
 */
define( 'THEMEDIR_URI', trailingslashit( get_template_directory_uri() ), true ); // Path to theme folder.
define( 'THEMEDIR', trailingslashit( get_template_directory() ), true ); // Path to theme folder.
define( 'FRAMEWORK', THEMEDIR . 'framework/', true ); // Framework Theme base path.
define( 'FRAMEWORK_ADMIN', THEMEDIR . 'framework/admin/', true ); // Framework Theme Admin Scripts path.
define( 'FRAMEWORK_CLASSES', THEMEDIR . 'framework/classes/', true ); // Framework Classes  path.
define( 'FRAMEWORK_CORE', THEMEDIR . 'framework/core/', true ); // Framework Theme Modules base path.


// -------------------------------------------------
// FRAMEWORK CORE
// -------------------------------------------------
// Framework init.
require_once( FRAMEWORK_CORE . 'budabuga-init.php' );
// Framework scripts.
require_once( FRAMEWORK_CORE . 'budabuga-scripts.php' );
// Framework views.
require_once( FRAMEWORK_CORE . 'budabuga-views.php' );

// -------------------------------------------------
// FRAMEWORK CLASSES
// -------------------------------------------------
// Framework class Bdbg_Menu_Desktop_Walker.
require_once( FRAMEWORK_CLASSES . 'class-bdbg-menu-desktop-walker.php' );



