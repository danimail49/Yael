<?php
/**
 * Set of custom General sections & panels for Customizer.
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

$general_panels = array(
	'bdbg_general' =>
		array(
			'title'       => __( 'General', 'budabuga' ),
			'description' => __( 'Customize main site elements.', 'budabuga' ),
			'priority'   => 21,
		),
);

/*----------------------------------------------------------------------------
   Sections
----------------------------------------------------------------------------*/

$general_sections = array(
	'bdbg_general_h1' =>
		array(
			'title'       => __( 'Heading 1', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_general',
			'priority'   => 15,
		),
	'bdbg_general_h2' =>
		array(
			'title'       => __( 'Heading 2', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_general',
			'priority'   => 20,
		),
	'bdbg_general_h3' =>
		array(
			'title'       => __( 'Heading 3', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_general',
			'priority'   => 25,
		),
	'bdbg_general_h4' =>
		array(
			'title'       => __( 'Heading 4', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_general',
			'priority'   => 30,
		),
	'bdbg_general_h5' =>
		array(
			'title'       => __( 'Heading 5', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_general',
			'priority'   => 35,
		),
	'bdbg_general_h6' =>
		array(
			'title'       => __( 'Heading 6', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_general',
			'priority'   => 40,
		),
	'bdbg_general_general' =>
		array(
			'title'       => __( 'General', 'budabuga' ),
			// 'description' => __( 'Logo section description', 'budabuga' ),
			'panel'		  => 'bdbg_general',
			'priority'   => 10,
		),
);
