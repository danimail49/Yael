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

/* Summ arrays of panels & sections
-------------------------------------*/
// Panels
$panels = $header_panels + $footer_panels;

// Sections
$sections = $header_sections + $footer_sections;

/*----------------------------------------------------------------------------
   Settings
----------------------------------------------------------------------------*/
/* Require files
-------------------------------------*/
require_once( 'customizer/budabuga-customizer-header-settings.php' );
require_once( 'customizer/budabuga-customizer-footer-settings.php' );

/* Summ arrays of settings
-------------------------------------*/
$settings = $header_settings + $footer_settings;

/*----------------------------------------------------------------------------
   Controls
----------------------------------------------------------------------------*/
/* Require files
-------------------------------------*/
require_once( 'customizer/budabuga-customizer-header-controls.php' );
require_once( 'customizer/budabuga-customizer-footer-controls.php' );

/* Summ arrays of controls
-------------------------------------*/
$controls = $header_controls + $footer_controls;
