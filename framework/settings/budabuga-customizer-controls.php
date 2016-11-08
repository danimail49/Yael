<?php
/**
 * Set of custom controls, settings & sections for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/*----------------------------------------------------------------------------
   Panels & Section
----------------------------------------------------------------------------*/
/* Require files
-------------------------------------*/
require_once( 'customizer/budabuga-customizer-header-panels-sections.php' );
require_once( 'customizer/budabuga-customizer-footer-panels-sections.php' );
require_once( 'customizer/budabuga-customizer-general-panels-sections.php' );

/* Summ arrays of panels & sections
-------------------------------------*/
// Panels
$panels = $header_panels + $footer_panels + $general_panels;

// Sections
$sections = $header_sections + $footer_sections + $general_sections;

/*----------------------------------------------------------------------------
   Settings
----------------------------------------------------------------------------*/
/* Require files
-------------------------------------*/
require_once( 'customizer/budabuga-customizer-header-settings.php' );
require_once( 'customizer/budabuga-customizer-footer-settings.php' );
require_once( 'customizer/budabuga-customizer-general-settings.php' );

/* Summ arrays of settings
-------------------------------------*/
$settings = $header_settings + $footer_settings + $general_settings;

global $defaults; // Because we need defaults
$defaults = array();
foreach ( $settings as $key => $value ) {
	$value['default'] = ( array_key_exists( 'default', $value ) ) ? $value['default'] : false;

	$defaults[ $key ] = $value['default'];
}



/*----------------------------------------------------------------------------
   Controls
----------------------------------------------------------------------------*/
/* Require files
-------------------------------------*/
require_once( 'customizer/budabuga-customizer-header-controls.php' );
require_once( 'customizer/budabuga-customizer-footer-controls.php' );
require_once( 'customizer/budabuga-customizer-general-controls.php' );

/* Summ arrays of controls
-------------------------------------*/
$controls = $header_controls + $footer_controls + $general_controls;
