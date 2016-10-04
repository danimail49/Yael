<?php
/**
 * Custom frontend functions & definitions.
 *
 * @package Budabuga
 * @since 1.00
 */

if ( ! function_exists( 'bdbg_the_custom_logo' ) ) :
	/**
	 * Outputs site logo, if defined in customizer. If empty logo outputs site title.
	 *
	 * @since 1.00
	 */
	function bdbg_the_custom_logo() {
		if ( function_exists( 'get_custom_logo' ) ) :
			$output = get_custom_logo();
		endif;
		// Nothing in the output: Custom Logo is not supported, or there is no selected logo.
		// In both cases we display the site's name.
		if ( empty( $output ) ) :
			$output = '<a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a>';
		endif;

		echo $output;
	}
endif;

if ( ! function_exists( 'bdbg_menus' ) ) :
	/**
	 * Outputs site menu.
	 *
	 * @since 1.00
	 *
	 * @param  string $type     Defines type of menu. Values: main, side, footer.
	 * @param  string $position Defines menu postion.
	 */
	function bdbg_menus( $type = 'main', $position = 'left' ) {
		if ( has_nav_menu( $type ) ) :
			$args = array(
				'container'		  => '',
				'menu_class'      => "bdbg-menu bdbg-menu__$type bdbg-menu--$position",
				'menu_id'         => "mdbg-menu-$type",
				'echo'            => true,
				'theme_location'  => $type,
				'items_wrap'      => '<nav role="navigation" id="%1$s" class="%2$s">%3$s</nav>',
				'walker' 		  => new Bdbg_Menu_Walker(),
			);
			wp_nav_menu( $args );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'nav-menus.php?action=locations">';
			$message = __( '%4$sTheme Menu is not set for %1$s. You can set it in %2$s Menu Editor %3$s.%5$s', 'budabuga' );
			echo sprintf( $message, $type, $menu_link_start, '</a>', '<p class="">', '</p>' );
		endif;
	}
endif;
