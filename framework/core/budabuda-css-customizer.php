<?php
/**
 * Customizer scripts render function
 *
 * @since 1.00
 */
function bdbg_customizer_scripts() { ?>
	<style type="text/css">

		.bdbg-header { background-color: <?php echo get_theme_mod( 'bdbg_header_background' ); ?>; }

		.bdbg-menu__main > li a,
		.mdl-layout__header .mdl-layout__drawer-button {
				color: <?php echo get_theme_mod( 'bdbg_header_fontcolor' ); ?>;
		}

		.bdbg-logo {
			padding-top: <?php echo get_theme_mod( 'bdbg_header_logo_padding_top' ); ?>px;
			padding-bottom: <?php echo get_theme_mod( 'bdbg_header_logo_padding_bottom' ); ?>px;
		}

	</style>
<?php }
add_action( 'wp_head', 'bdbg_customizer_scripts' );