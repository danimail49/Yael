<?php
/**
 * Set of custom controls, settings & sections for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

$sections = array(
	'bdbg_header' =>
		array(
			'title'       => __( 'Header', 'budabuga' ),
			'description' => __( 'Header color options', 'budabuga' ),
			'capability'  => 'edit_theme_options',
		),
);

$settings = array(

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
	'bdbg_header_shadow' =>
		array(
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
			'default'   => true,
		),
);

$controls = array(
	'bdbg_header_logo_margin'    =>
		array(
			'label'       => __( 'Logo margin from center (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_logo_padding_top',
			'description' => __( 'this is description', 'budabuga' ),
		),
	'bdbg_header_menu_vertical_margin' =>
		array(
			'label'       => __( 'Main Menu margin from center (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_menu_vertical_margin',
		),
	'bdbg_header_background'          =>
		array(
			'label'   => __( 'Header Background Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header',
			'setting' => 'bdbg_header_background',
			'palette' => true,
		),
	'bdbg_header_fontcolor'           =>
		array(
			'label'   => __( 'Header Font Color', 'budabuga' ),
			'type'    => 'color',
			'section' => 'bdbg_header',
			'setting' => 'bdbg_header_fontcolor',
		),
	'bdbg_header_fixed'               =>
		array(
			'label'       => __( 'Fixed Header', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_fixed',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_shadow'               =>
		array(
			'label'       => __( 'Header Shadow', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header',
			'setting'     => 'bdbg_header_shadow',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
);
