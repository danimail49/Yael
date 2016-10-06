<?php
/**
 * Custom frontend functions & definitions.
 *
 * @package Budabuga
 * @since 1.00
 */

if ( ! function_exists( 'bdbg_menus' ) ) :
	/**
	 * Outputs site menu.
	 *
	 * @since 1.00
	 *
	 * @param  string $type     Defines type of menu. Values: main, side, footer.
	 */
	function bdbg_menus( $type = 'main' ) {

		if ( has_nav_menu( $type ) ) :
			$args = array(
				'container'		  => '',
				'menu_class'      => "bdbg-menu bdbg-menu--$type",
				'menu_id'         => "bdbg-menu-$type",
				'echo'            => true,
				'theme_location'  => $type,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</nav>',
				'walker' 		  => new Bdbg_Menu_Walker(),
			);
			wp_nav_menu( $args );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'nav-menus.php">';
			$message = __( '%4$sTheme Menu is not set for %1$s. You can set it in %2$s Menu Editor %3$s.%5$s', 'budabuga' );
			echo sprintf( $message, $type, $menu_link_start, '</a>', '<span class="bdbg-message">', '</span>' );
		endif;

	}
endif;

if ( ! function_exists( 'bdbg_header' ) ) :
	/**
	 * Outputs site header.
	 *
	 * @since 1.00
	 *
	 * @param  string  $layout      Defines menu postion. Values: left, right, center.
	 * @param  boolean $fixed       Is header sticky. Default = true.
	 * @param  boolean $show_search Defines show search or not. Default = true.
	 */
	function bdbg_header( $layout = 'left', $fixed = true, $show_search = true ) {
		$header_classes = null;
		if ( ! $fixed && ! $header_classes ) :
			$header_classes = 'mdl-layout__header--scroll';
		endif; ?>
		<header class="mdl-layout__header bdbg-header<?php echo ' ' . $header_classes; ?>">
			<div class="mdl-layout__header-row bdbg-header__row">
				<!-- Header conditional loading -->
				<?php if ( locate_template( 'template-parts/header/header-' . $layout . '.php' ) !== '' ) :
					// Load the header template.
					get_template_part( 'template-parts/header/header', $layout );
				else :
					// Load the header default template.
					get_template_part( 'template-parts/header/header', 'left' );
				endif; ?>

				<!-- Search button conditional showing -->

			</div>
		</header>

	<?php }
endif;

if ( ! function_exists( 'bdbg_logo' ) ) :

	function bdbg_logo() {
		echo bloginfo( 'name' );
	}

endif;
