<?php
/**
 * Set of custom Header controls for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

$general_controls = array(

	/*----------------------------------------------------------------------------
	   Typography
	----------------------------------------------------------------------------*/

	'bdbg_general_typography_main_fontsize' =>
		array(
			'label'       => __( 'Main font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_general',
			'input_attrs' => array(
				'min' => 1,
			),
		),

	'bdbg_general_typography_h1_fontsize' =>
		array(
			'label'       => __( 'H1 font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h1',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_general_typography_h1_weight' =>
		array(
			'label'       => __( 'H1 font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_general_h1',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_general_typography_h1_letterspace' =>
		array(
			'label'       => __( 'H1 text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h1',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
	'bdbg_general_typography_h1_color' =>
		array(
			'label'   => __( 'H1 color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_h1',
		),
	'bdbg_general_typography_h2_fontsize' =>
		array(
			'label'       => __( 'H2 font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h2',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_general_typography_h2_weight' =>
		array(
			'label'       => __( 'H2 font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_general_h2',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_general_typography_h2_letterspace' =>
		array(
			'label'       => __( 'H2 text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h2',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
	'bdbg_general_typography_h2_color' =>
		array(
			'label'   => __( 'H2 color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_h2',
		),
	'bdbg_general_typography_h3_fontsize' =>
		array(
			'label'       => __( 'H3 font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h3',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_general_typography_h3_weight' =>
		array(
			'label'       => __( 'H3 font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_general_h3',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_general_typography_h3_letterspace' =>
		array(
			'label'       => __( 'H3 text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h3',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
	'bdbg_general_typography_h3_color' =>
		array(
			'label'   => __( 'H3 color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_h3',
		),
	'bdbg_general_typography_h4_fontsize' =>
		array(
			'label'       => __( 'H4 font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h4',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_general_typography_h4_weight' =>
		array(
			'label'       => __( 'H4 font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_general_h4',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_general_typography_h4_letterspace' =>
		array(
			'label'       => __( 'H4 text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h4',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
	'bdbg_general_typography_h4_color' =>
		array(
			'label'   => __( 'H4 color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_h4',
		),
	'bdbg_general_typography_h5_fontsize' =>
		array(
			'label'       => __( 'H5 font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h5',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_general_typography_h5_weight' =>
		array(
			'label'       => __( 'H5 font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_general_h5',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_general_typography_h5_letterspace' =>
		array(
			'label'       => __( 'H5 text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h5',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
	'bdbg_general_typography_h5_color' =>
		array(
			'label'   => __( 'H5 color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_h5',
		),
	'bdbg_general_typography_h6_fontsize' =>
		array(
			'label'       => __( 'H6 font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h6',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_general_typography_h6_weight' =>
		array(
			'label'       => __( 'H6 font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_general_h6',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_general_typography_h6_letterspace' =>
		array(
			'label'       => __( 'H6 text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_general_h6',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
	'bdbg_general_typography_h6_color' =>
		array(
			'label'   => __( 'H6 color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_h6',
		),

	/*----------------------------------------------------------------------------
	   Colors
	----------------------------------------------------------------------------*/

	'bdbg_general_colors_background' =>
		array(
			'label'   => __( 'General background', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_general',
		),
	'bdbg_general_colors_fontcolor' =>
		array(
			'label'   => __( 'General text color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_general',
		),
	'bdbg_general_colors_linkcolor' =>
		array(
			'label'   => __( 'Links color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_general',
		),
	'bdbg_general_colors_linkhovercolor' =>
		array(
			'label'   => __( 'Links hover color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_general',
		),
	'bdbg_general_colors_activeelem_background' =>
		array(
			'label'   => __( 'Buttons background', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_general',
		),
	'bdbg_general_colors_activeelem_fontcolor' =>
		array(
			'label'   => __( 'Buttons text color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_general_general',
		),

);
