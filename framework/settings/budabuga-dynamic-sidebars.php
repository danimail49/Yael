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
   Footer widgets width options from customizer
----------------------------------------------------------------------------*/
if ( ! function_exists( 'bdbg_width_widget_class' ) ) :
	/**
	 * Counts column num, depending on columns in theme used & customizer param for section.
	 *
	 * @since 1.00
	 *
	 * @param  string  $widget_area_customizer_param Customizer setting name.
	 * @param  integer $columns                      Max columns used in theme.
	 *
	 * @return string                                Set of HTML classes.
	 */
	function bdbg_width_widget_class( $widget_area_customizer_param, $columns = 12 ) {

		$widget_columns = bdbg_get_theme_mod( $widget_area_customizer_param );

		switch ( $widget_columns ) :
			case 4:
				return 'l3 m6 s12';
				break;
			case 3:
				return 'l4 m6 s12';
				break;
			case 2:
				return 'm6 s12';
				break;
			case 1:
				return 's12';
				break;
			default:
				return 's12';
				break;
		endswitch;
	}
endif;

$footer_top_classes =
	bdbg_width_widget_class( 'bdbg_footer_top_columns' );
$footer_middle_classes =
	bdbg_width_widget_class( 'bdbg_footer_middle_columns' );

/*----------------------------------------------------------------------------
   Global Widget Areas Args
----------------------------------------------------------------------------*/
$widget_args = array(
	'before_widget' => '<div class="card"><div class="card-content"><div id="%1$s" class="widget bdbg-widget %2$s">',
	'after_widget' => '</div></div></div>',
	'before_title' => '<h5 class="widget-title bdbg-widget__title">',
	'after_title' => '</h5>',
);

/*----------------------------------------------------------------------------
   Theme Widget Areas List
----------------------------------------------------------------------------*/
/* Header
-------------------------------------*/

$widget_list = array(
	'page_right' => array(
		'name' => __( 'Main Sidebar', 'budabuga' ),
		'before_widget' => '<div class="card"><div class="card-content"><div id="%1$s" class="widget bdbg-widget bdbg-widget--page %2$s">',
		'after_widget' => '</div></div></div>',
	),

	'topbar_left' => array(
		'name' => __( 'Top Bar Left', 'budabuga' ),
		'before_widget' => '<div id="%1$s" class="widget bdbg-widget bdbg-widget--inline %2$s">',
		'after_widget' => '</div>',
	),
	'topbar_right' => array(
		'name' => __( 'Top Bar Right', 'budabuga' ),
		'before_widget' => '<div id="%1$s" class="widget bdbg-widget bdbg-widget---alignright bdbg-widget--inline %2$s">',
		'after_widget' => '</div>',
	),

/* Footer
-------------------------------------*/

	'footer_top' => array(
		'name' => __( 'Top Footer', 'budabuga' ),
		'before_widget' => '<div id="%1$s" class="' . $footer_top_classes . ' col widget bdbg-widget %2$s">',
		'after_widget' => '</div>',
	),
	'footer_middle' => array(
		'name' => __( 'Middle Footer', 'budabuga' ),
		'before_widget' => '<div id="%1$s" class="' . $footer_middle_classes . ' col widget bdbg-widget %2$s">',
		'after_widget' => '</div>',
	),
	'footer_bottom-left' => array(
		'name' => __( 'Bottom Footer Left', 'budabuga' ),
		'before_widget' => '<div id="%1$s" class="widget bdbg-widget bdbg-widget--inline %2$s">',
		'after_widget' => '</div>',
	),
	'footer_bottom-right' => array(
		'name' => __( 'Bottom Footer Right', 'budabuga' ),
		'before_widget' => '<div id="%1$s" class="widget bdbg-widget bdbg-widget---alignright bdbg-widget--inline %2$s">',
		'after_widget' => '</div>',
	),

/* Page
-------------------------------------*/
	// 'page_left' => array(
	// 	'name' => __( 'Left Page', 'budabuga' ),
	// 	'before_widget' => '<div class="card"><div class="card-content"><div id="%1$s" class="widget bdbg-widget bdbg-widget--page %2$s">',
	// 	'after_widget' => '</div></div></div>',
	// ),
	'precomments' => array(
		'name' => __( 'Precomments', 'budabuga' ),
		'before_widget' => '<div id="%1$s" class="widget bdbg-widget bdbg-widget--comments %2$s">',
		'after_widget' => '</div>',
	),
);
