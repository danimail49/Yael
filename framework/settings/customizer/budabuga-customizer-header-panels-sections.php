<?php
/**
 * Set of custom Header sections & panels for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/*----------------------------------------------------------------------------
   Panels
----------------------------------------------------------------------------*/

$header_panels = array(
	'bdbg_header' =>
		array(
			'title'       => __( 'Header', 'budabuga' ),
			'description' => __( 'Customize Main & Side logo, Menus, Header fonts & backgrounds here.', 'budabuga' ),
			'priority'   => 22,
		),
);

/*----------------------------------------------------------------------------
   Sections
----------------------------------------------------------------------------*/

$header_sections = array(
	'bdbg_header_general' =>
		array(
			'title'       => __( 'General', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_header',
			'capability'  => 'edit_theme_options',
			'priority'   => 10,
		),
	'bdbg_header_logo_main' =>
		array(
			'title'       => __( 'Main Logo', 'budabuga' ),
			// 'description' => __( 'Logo section description', 'budabuga' ),
			'panel'		  => 'bdbg_header',
			'priority'   => 20,
		),
	'bdbg_header_logo_side' =>
		array(
			'title'       => __( 'Side Logo', 'budabuga' ),
			// 'description' => __( 'Logo section description', 'budabuga' ),
			'panel' => 'bdbg_header',
			'capability'  => 'edit_theme_options',
			'priority'   => 30,
		),
	'bdbg_header_search' =>
		array(
			'title'       => __( 'Search', 'budabuga' ),
			'description' => __( 'Click on Search Icon to see your change', 'budabuga' ),
			'panel' => 'bdbg_header',
			'capability'  => 'edit_theme_options',
			'priority'   => 40,
		),
);
