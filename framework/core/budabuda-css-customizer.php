<?php
/**
 * Customizer scripts render function
 *
 * @since 1.00
 */
function bdbg_customizer_scripts() { ?>
	<style type="text/css">

		/**
		 * General Header Settings
		 */
		<?php if ( bdbg_get_theme_mod( 'bdbg_header_general_showdrawer' ) ) : ?>
			.bdbg-nav .button-collapse {
				display: block;
			}
		<?php endif; ?>

		<?php if ( ! bdbg_get_theme_mod( 'bdbg_header_general_showshadow' ) ) : ?>
			.bdbg-nav {
				box-shadow: none;
			}
		<?php endif; ?>

		.bdbg-nav,
		.bdbg-header {
			height: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_height' ) . 'px;'; ?>
		}

		.navbar-fixed {
			top: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_height' ) . 'px;'; ?>
		}

		.bdbg-logo--main,
		nav a.button-collapse,
		.bdbg-js-search,
		.bdbg-menu--main > .bdbg-menu__item > a {
			line-height: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_height' ) . 'px;'; ?>
		}

		.bdbg-nav {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_background' ) . ';'; ?>
		}

		.bdbg-menu--main > .bdbg-menu__item > a,
		.button-collapse,
		.bdbg-js-search {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_fontcolor' ) . ';'; ?>
		}

		.bdbg-menu--main > li > a:hover {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_hoverbackground' ) . ';'; ?>
		}

		.bdbg-menu--main > .bdbg-menu__item > a:hover,
		.button-collapse:hover,
		.bdbg-js-search:hover {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_hovercolor' ) . ';'; ?>
		}

		.bdbg-menu--main > li > a {
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_weight' ) . ';'; ?>
		}

		<?php if ( 0 !== ( (int) bdbg_get_theme_mod( 'bdbg_header_general_letterspace' ) ) ) : ?>
			.bdbg-menu--main > li > a {
				letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_letterspace' ) . 'px;'; ?>
			}
		<?php endif; ?>

		.bdbg-menu--main > li > a {
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_general_weight' ) . ';'; ?>
		}

		/**
		 * Top Bar
		 */
		#js-topheader {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_topbar_background' ) . ';'; ?>
			color: <?php echo bdbg_get_theme_mod( 'bdbg_topbar_fontcolor' ) . ';'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_topbar_weight' ) . ';'; ?>
			letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_topbar_letterspace' ) . 'px;'; ?>
		}

		#js-topheader a {color: <?php echo bdbg_get_theme_mod( 'bdbg_topbar_linkcolor' ) . ';'; ?>}
		#js-topheader a:hover {color: <?php echo bdbg_get_theme_mod( 'bdbg_topbar_linkhovercolor' ) . ';'; ?>}

		/**
		 * Searchbox
		 */
		.bdbg-overlay #searchform .bdbg-input-group__field {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_fontsize' ) . 'px;'; ?>
		}

		.bdbg-modal__heading,
		.bdbg-overlay__button--close,
		.bdbg-overlay #searchform .bdbg-input-group__field,
		.bdbg-overlay #searchform .bdbg-input-group__field:focus {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_fontcolor' ) . ';'; ?>
		}

		.bdbg-overlay #searchform .bdbg-input-group__field,
		.bdbg-overlay #searchform .bdbg-input-group__field:focus {
			border-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_fontcolor' ) . ';'; ?>
		}

		.bdbg-overlay--search {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_header_search_background' ) . ';'; ?>
		}

		/**
		 * Header Main Logo
		 */
		<?php
		// Additonal dynamic style to add margin for drawer.
		if ( bdbg_get_theme_mod( 'bdbg_header_general_showdrawer' ) ) :
		 	$logo_margin_hor = ( 'left' === bdbg_get_theme_mod( 'bdbg_header_general_layout' ) ) ? 'left' : 'right'; ?>
		 	nav .bdbg-logo--main {
				margin-<?php echo $logo_margin_hor; ?>: <?php echo '3rem' ?>
			}
		<?php endif; ?>

		.bdbg-logo--main .bdbg-logo__img {
			height: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_height' ) . 'px;'; ?>
		}

		nav .bdbg-logo--main {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_fontcolor' ) . '!important;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_weight' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_fontsize' ) . 'px;'; ?>

			<?php if ( 0 !== ( (int) bdbg_get_theme_mod( 'bdbg_header_logo_main_letterspace' ) ) ) : ?>
				letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_main_letterspace' ) . 'px;'; ?>
			<?php endif; ?>
		}

		/**
		 * Header Side Logo
		 */
		.bdbg-logo--side img {
 			width: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_width' ) . 'px;'; ?>
		}

		.side-nav .bdbg-logo--side {
			color: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_fontcolor' ) . '!important;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_weight' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_fontsize' ) . 'px;'; ?>

			<?php if ( 0 !== ( (int) bdbg_get_theme_mod( 'bdbg_header_logo_side_letterspace' ) ) ) : ?>
				letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_letterspace' ) . 'px;'; ?>
			<?php endif; ?>

			margin-left: <?php echo bdbg_get_theme_mod( 'bdbg_header_logo_side_margin' ) . 'px;'; ?>
		}

		/**
		 * Footer Top Section
		 */
		.bdbg-footer__section--top {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_background' ) . ';'; ?>
			color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_fontcolor' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_fontsize' ) . 'px;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_weight' ) . ';'; ?>
			letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_letterspace' ) . 'px;'; ?>
		}

		.bdbg-footer__section--top .bdbg-widget__title {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_top_fontsize' ) . 'px;'; ?>
		}

		.bdbg-footer__section--top .bdbg-widget__title {
			font-size: 1.64em;
		}

		/**
		 * Footer Middle Section
		 */
		.bdbg-footer__section--middle {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_background' ) . ';'; ?>
			color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_fontcolor' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_fontsize' ) . 'px;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_weight' ) . ';'; ?>
			letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_letterspace' ) . 'px;'; ?>
		}

		.bdbg-footer__section--middle .bdbg-widget__title {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_middle_fontsize' ) . 'px;'; ?>
		}

		.bdbg-footer__section--middle .bdbg-widget__title {
			font-size: 1.64em;
		}

		/**
		 * Footer bottom Section
		 */
		.bdbg-footer__section--bottom {
			background-color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_background' ) . ';'; ?>
			color: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_fontcolor' ) . ';'; ?>
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_fontsize' ) . 'px;'; ?>
			font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_weight' ) . ';'; ?>
			letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_letterspace' ) . 'px;'; ?>
		}

		.bdbg-footer__section--bottom .bdbg-widget__title {
			font-size: <?php echo bdbg_get_theme_mod( 'bdbg_footer_bottom_fontsize' ) . 'px;'; ?>
		}

		.bdbg-footer__section--bottom .bdbg-widget__title {
			font-size: 1.64em;
		}

		/**
		 * General Settings
		 */
		 body {
			 font-size: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_main_fontsize' ) . 'px;'; ?>
			 background-color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_background' ) . ';'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_fontcolor' ) . ';'; ?>
		 }

		 a {
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_linkcolor' ) . ';'; ?>
		 }

		 a:hover,
		 .card .card-action a:hover:not(.btn):not(.btn-large):not(.btn-large):not(.btn-floating) {
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_linkhovercolor' ) . ';'; ?>
		 }

		 input[type="button"],
		 button,
		 .btn,
		 .btn-large,
		 .pagination li.active,
		 .paginate-com a.page-numbers {
			 background-color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_activeelem_background' ) . '!important;'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_activeelem_fontcolor' ) . '!important;'; ?>
		 }

		 .pagination li.active a {
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_activeelem_fontcolor' ) . '!important;'; ?>
		 }

		 .pagination li:not(.active) a,
		 .paginate-com span.page-numbers {
	 		color: <?php echo bdbg_get_theme_mod( 'bdbg_general_colors_activeelem_background' ) . '!important;'; ?>
		 }

		 h1 {
			 font-size: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h1_fontsize' ) . 'px;'; ?>
			 font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h1_weight' ) . ';'; ?>
			 letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h1_letterspace' ) . 'px;'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h1_color' ) . ';'; ?>
		 }
		 .bdbg-post h2.bdbg-post__title a,
		 h2 {
			 font-size: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h2_fontsize' ) . 'px;'; ?>
			 font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h2_weight' ) . ';'; ?>
			 letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h2_letterspace' ) . 'px;'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h2_color' ) . ';'; ?>
		 }
		 h3 {
			 font-size: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h3_fontsize' ) . 'px;'; ?>
			 font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h3_weight' ) . ';'; ?>
			 letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h3_letterspace' ) . 'px;'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h3_color' ) . ';'; ?>
		 }
		 h4 {
			 font-size: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h4_fontsize' ) . 'px;'; ?>
			 font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h4_weight' ) . ';'; ?>
			 letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h4_letterspace' ) . 'px;'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h4_color' ) . ';'; ?>
		 }
		 h5 {
			 font-size: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h5_fontsize' ) . 'px;'; ?>
			 font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h5_weight' ) . ';'; ?>
			 letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h5_letterspace' ) . 'px;'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h5_color' ) . ';'; ?>
		 }
		 h6 {
			 font-size: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h6_fontsize' ) . 'px;'; ?>
			 font-weight: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h6_weight' ) . ';'; ?>
			 letter-spacing: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h6_letterspace' ) . 'px;'; ?>
			 color: <?php echo bdbg_get_theme_mod( 'bdbg_general_typography_h6_color' ) . ';'; ?>
		 }

	</style>
<?php }
add_action( 'wp_head', 'bdbg_customizer_scripts' );
