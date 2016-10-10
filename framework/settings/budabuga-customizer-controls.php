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

$sections = array(
	'bdbg_header' =>
		array(
			'title'       => __( 'Header', 'budabuga' ),
			// 'description' => __( 'Header color options', 'budabuga' ),
			'capability'  => 'edit_theme_options',
		),
);

$settings = array(

	'bdbg_header_layout' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 'left',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_logo_margin' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_menu_vertical_margin' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_background' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(63,81,181,1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_fontcolor' =>
		array(
			'type'              => 'theme_mod',
			'default'           => '#ffffff',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
		),
	'bdbg_header_fixed' =>
		array(
			'type'      => 'theme_mod',
			'transport' => 'refresh',
			'default'   => true,
		),
	'bdbg_header_showdrawer' =>
		array(
			'type'      => 'theme_mod',
			'transport' => 'refresh',
			'default'   => true,
		),
	'bdbg_header_showsearch' =>
		array(
			'type'      => 'theme_mod',
			'transport' => 'refresh',
			'default'   => true,
		),
	'bdbg_header_shadow' =>
		array(
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
			'default'   => true,
		),
	'bdbg_logo_header' =>
		array(
			'type'      => 'theme_mod',
			'transport' => 'refresh',
			'sanitize_callback' => 'absint',
		),
	'bdbg_logo_header_width' =>
		array(
			'type'              => 'theme_mod',
			'transport'         => 'postMessage',
			'default'           => 128,
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_logo_header_height' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 64,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_logo_side' =>
		array(
			'type'      => 'theme_mod',
			'transport' => 'refresh',
			'sanitize_callback' => 'absint',
		),
	'bdbg_logo_side_width' =>
		array(
			'type'              => 'theme_mod',
			'transport'         => 'postMessage',
			'default'           => 128,
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_logo_side_height' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 64,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),

);

$controls = array(
	'bdbg_header_layout' =>
		array(
			'label'       => __( 'Choose header layout', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_layout',
			// 'description' => __( 'this is description', 'budabuga' ),
			'choices' => array(
				'left' => 'Left',
				'right' => 'Right',
			),
		),
	'bdbg_header_logo_margin' =>
		array(
			'label'       => __( 'Logo margin from center (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_logo_padding_top',
			// 'description' => __( 'this is description', 'budabuga' ),
		),
	'bdbg_header_menu_vertical_margin' =>
		array(
			'label'       => __( 'Main Menu margin from center (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_menu_vertical_margin',
		),
	'bdbg_header_background' =>
		array(
			'label'   => __( 'Header Background Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header',
			'setting' => 'bdbg_header_background',
			'palette' => true,
		),
	'bdbg_header_fontcolor' =>
		array(
			'label'   => __( 'Header Font Color', 'budabuga' ),
			'type'    => 'color',
			'section' => 'bdbg_header',
			'setting' => 'bdbg_header_fontcolor',
		),
	'bdbg_header_fixed' =>
		array(
			'label'       => __( 'Fixed Header', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_fixed',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_showdrawer' =>
		array(
			'label'       => __( 'Show Drawer Button on Desktop viewport', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_showdrawer',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_showsearch' =>
		array(
			'label'       => __( 'Show Search Button', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_showsearch',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_shadow' =>
		array(
			'label'       => __( 'Header Shadow', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_shadow',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_logo_header_width' =>
		array(
			'label'       => __( 'Header Logo width (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_logo_header_width',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_logo_header_height' =>
		array(
			'label'       => __( 'Header Logo height (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_logo_header_height',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_logo_header' =>
		array(
			'label'   => __( 'Header Logo', 'budabuga' ),
			'type'    => 'cropped_image',
			'section' => 'bdbg_header',
			'setting' => 'bdbg_logo_header',
			'flex_width'  => true, // True = recommended, false = required.
		    'flex_height' => true, // True = recommended, false = required.
		    'width'       => 128,
		    'height'      => 64,
		),
	'bdbg_logo_side_width' =>
		array(
			'label'       => __( 'Side Menu Logo width (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_logo_header_width',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_logo_side_height' =>
		array(
			'label'       => __( 'Side Menu Logo height (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_logo_header_height',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_logo_side' =>
		array(
			'label'   => __( 'Side Menu Logo', 'budabuga' ),
			'type'    => 'cropped_image',
			'section' => 'bdbg_header',
			'setting' => 'bdbg_logo_header',
			'flex_width'  => true, // True = recommended, false = required.
		    'flex_height' => true, // True = recommended, false = required.
		    'width'       => 194,
		    'height'      => 87,
			),
);
