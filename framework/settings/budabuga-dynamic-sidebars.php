<?php
/**
 * Set of custom controls, settings & sections for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
//if ( ! defined( 'ABSPATH' ) ) :
//	die( 'No direct script access allowed' );
//endif;

function widgetarea_generator( $maxcolumns, $id_part, $name_part ) {
	$maxcolumns++;
	$result = array();

	for ($i=1; $i < $maxcolumns; $i++) {
		$id = "$id_part-$i";
		$name = "$name_part $i Column";

		$result = $result + array(
			$id => array(
				'name' => $name,
			),
		) ;
	}

	return $result;
}

/*----------------------------------------------------------------------------
   Global Widget Areas Args
----------------------------------------------------------------------------*/
$widget_args = array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
);

/*----------------------------------------------------------------------------
   Theme Widget Areas List
----------------------------------------------------------------------------*/
$widget_list = array(
	'test1' => array(
		'name' => 'Test 1'
	),
);

/* Footer
-------------------------------------*/
$widget_list = $widget_list + widgetarea_generator(
	get_theme_mod( 'bdbg_footer_middle_columns' ),
	'footer-top',
	'Footer Top'
);
