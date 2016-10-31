<?php
/**
 * Custom frontend functions & definitions.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

if ( ! function_exists( 'bdbg_header_layout' ) ) :
	/**
	 * Transports user defined settings layout from customizer to header options.
	 *
	 * @since 1.00
	 * @return array	From-To direction of header elements.
	 */
	function bdbg_header_layout() {
		$from_to = array( 'left', 'right' );
		$keys = array( 'from', 'to' );

		$header_direction_setting = bdbg_get_theme_mod( 'bdbg_header_general_layout' );

		if ( 'left' === $header_direction_setting ) :
			$layout = $from_to;
		else :
			$layout = array_reverse( $from_to );
		endif;

		return array_combine( $keys, $layout );
	}
endif;

if ( ! function_exists( 'bdbg_menus' ) ) :
	/**
	 * Outputs site menu.
	 *
	 * @since 1.00
	 *
	 * @param	string $menu_type		Defines type of menu. Values: main, side, footer.
	 * @param	string $menu_direction	Defines menu direction, align to left or right side.
	 */
	function bdbg_menus( $menu_type = 'main', $menu_direction ) {

		$acceptable_menus = array( 'main', 'side' );
		$default_menu = 'main';
		$walker = 'Bdbg_Menu_Walker_' . ucfirst( $menu_type );
		$to = $menu_direction['to'];
		// Parameter check.
		$menu_type = ( in_array( $menu_type, $acceptable_menus, true ) ) ?
			$menu_type : $default_menu;

		$data_attrs = '';

		if ( has_nav_menu( $menu_type ) ) :
			$args = array(
				'container'		  => false,
				'menu_class'      => 'bdbg-menu bdbg-menu--' . $menu_type . ' ' . $to,
				'menu_id'         => "bdbg-menu-$menu_type",
				'echo'            => true,
				'theme_location'  => $menu_type,
				'items_wrap'      => '<ul id="bdbg-menu-' . $menu_type . '" id="%1$s" ' . $data_attrs . ' class="%2$s">%3$s</ul>',
				'depth'			  => 2,
				'walker' 		  => new $walker(),
			);
			// Conditional params for navs.
			if ( 'side' === $menu_type ) :
				$args['menu_class'] .= ' side-nav';
				$args['depth']		 = 3;
				$args['items_wrap']	 = '%3$s';
			endif;
			if ( 'main' === $menu_type ) :
				$args['menu_class'] .= ' hide-on-med-and-down';
			endif;

			wp_nav_menu( $args );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'nav-menus.php">';
			$message = __( '%4$sTheme Menu is not set for %1$s. You can set it in %2$s Menu Editor %3$s.%5$s', 'budabuga' );
			echo sprintf( esc_html( $message ), esc_html( $menu_type ), $menu_link_start, '</a>', '<span class="bdbg-message ' . $to . '">', '</span>' );
		endif;
	}
endif;

if ( ! function_exists( 'bdbg_logo' ) ) :
	/**
	 * Echos formatted logo.
	 * If empty logo, echos site title.
	 *
	 * @since 1.00
	 *
	 * @param string
	 * @param string $logo_name	Name of logo to be retrived.
	 */
	function bdbg_logo( $logo_name, $logo_echo = true ) {
		$logo_name = $logo_name . '_upload';
		$logo_id = bdbg_get_theme_mod( $logo_name );
		$logo_obj = '';

		if ( $logo_id ) :
			$logo = wp_get_attachment_image_src( $logo_id );
			$attr = array(
				'width' => $logo[1],
				'height' => $logo[2],
				'class' => 'bdbg-logo__img',
			);

			$logo_obj = sprintf( '<img src="%1$s" width="%2$d" height="%3$d" class="%4$s" />', esc_url( $logo[0] ), esc_attr( $attr['width'] ), esc_attr( $attr['height'] ), esc_attr( $attr['class'] ) );
		else :
			$logo_obj = esc_html( get_bloginfo( 'name' ) );
		endif;

		if ( ! $logo_echo ) :
			return $logo_echo;
		endif;

		echo $logo_obj;
	}

endif;

if ( ! function_exists( 'bdbg_dynamic_sidebar' ) ) :

	function bdbg_dynamic_sidebar( $sidebar ) {
		if ( is_active_sidebar( $sidebar ) ) :
			dynamic_sidebar( $sidebar );
		else :
			$menu_link_start = '<a href="' . admin_url() . 'widgets.php">';
			$message = __( '%4$sNo active widgets found for %1$s. You can set them in %2$s Theme Widgets %3$s.%5$s', 'budabuga' );
			echo '<div class="col s12">' . sprintf( esc_html( $message ), 'Widget Area', $menu_link_start, '</a>', '<span class="bdbg-message">', '</span>' ) . '</div>';
		endif;
	}

endif;

if ( ! function_exists( 'bdbg_search_modal' ) ) :
	/**
	 * Append search modal in footer.
	 *
	 * @since 1.00
	 */
	function bdbg_search_modal() {
		$searchform = get_search_form( false );
		$text_search = __( 'Searching', 'budabuga' );
		$modal_title = __( 'Type Anything & Press "Enter"', 'budabuga' );

		$output = <<<HEREDOC
			<div class="bdbg-overlay bdbg-overlay--search">
				<div class="bdbg-overlay__button bdbg-overlay__button--close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
				<div class="bdbg-modal bdbg-modal--search">
					<h3 data-textsearch="{$text_search}" class="bdbg-modal__heading center-align">{$modal_title}</h3>
					{$searchform}
				</div>
			</div>
HEREDOC;

		echo balanceTags( $output );
	}
	add_action( 'wp_footer', 'bdbg_search_modal', 100 );

endif;

if ( ! function_exists( 'bdbg_post_thumbnail' ) ) :

	function bdbg_post_thumbnail( $size = null, $classes = '' ) {
		if ( ! has_post_thumbnail() && 'video' !== get_post_format() || ( ! has_post_thumbnail() && 'video' === get_post_format() && empty( get_post_meta( get_the_ID(), 'bdbg_video_url', true ) ) ) ) :
			echo '<img src ="' . THEMEDIR_URI . 'img/images/bdbg-img-placeholder.png"
				width="1920" height="1080" alt="' . get_the_title() . '">';
		elseif( ! has_post_thumbnail() && 'video' === get_post_format() && ! empty( get_post_meta( get_the_ID(), 'bdbg_video_url', true ) ) ) :
			$video = wp_oembed_get( get_post_meta( get_the_ID(), 'bdbg_video_url', true ) );
			echo <<<VIDEO
				<div class="video-container">
					{$video}
	  			</div>
VIDEO;
		else :
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) );
		endif;
	}

endif;

if ( ! function_exists( 'bdbg_post_meta' ) ) :
	/**
	 * Outputs post meta for archive.
	 */
	function bdbg_post_meta() {
		if ( in_array( get_post_type(), array( 'post', 'attachment' ), true ) ) {

			// Post Date.
			$archive_year  = get_the_time( 'Y' );
			$archive_month = get_the_time( 'm' );
			$time_string = '<a href="' . get_month_link( $archive_year, $archive_month ) . '"><time class="entry-date published" datetime="%1$s">
				<i class="fa fa-calendar" aria-hidden="true"></i> %1$s
			</time></a>';

			$time_string = sprintf( $time_string, esc_attr( get_the_date( 'F jS, Y' ) ) );

			// Post Author.
			$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
			$author_name = get_the_author_meta( 'display_name' );
			$author = "<a href=\"{$author_url}\" rel=\"author\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {$author_name}</a>";

			$num_comments = get_comments_number(); // Get_comments_number returns only a numeric value.

			if ( comments_open() ) :
				if ( 0 === $num_comments ) :
					$comments = __( 'No Comments', 'budabuga' );
				elseif ( $num_comments > 1 ) :
					$comments = $num_comments . __( ' Comments', 'budabuga' );
				else :
					$comments = __( '1 Comment', 'budabuga' );
				endif;
				$write_comments = '<a href="' . get_comments_link() . '">
					<i class="fa fa-commenting-o" aria-hidden="true"></i> ' . $comments . '
				</a>';
			else :
				$write_comments = __( 'Comments are off for this post.', 'budabuga' );
			endif;

			echo "{$author} {$time_string} {$write_comments}";
		}
	}

endif;

if ( ! function_exists( 'bdbg_pagination' ) ) :
	/**
	 * Outputs pagination markup.
	 */
	function bdbg_pagination() {

		if ( is_singular() ) :
			return;
		endif;

		global $wp_query;

		/** Stop execution if there's only 1 page */
		if ( $wp_query->max_num_pages <= 1 ) :
			return;
		endif;

		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max   = intval( $wp_query->max_num_pages );

		/**	Add current page to the array */
		if ( $paged >= 1 ) :
			$links[] = $paged;
		endif;

		/**	Add the pages around the current page to the array */
		if ( $paged >= 3 ) :
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		endif;

		if ( ( $paged + 2 ) <= $max ) :
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		endif;

		echo '<ul class="pagination bdbg-pagination">' . "\n";

		/**	Previous Post Link */
		if ( get_previous_posts_link() ) :
			printf( '<li class="waves-effect">%s</li>' . "\n", get_previous_posts_link( '<i class="fa fa-chevron-left" aria-hidden="true"></i>' ) );
		else :
			print('<li class="disabled"><a href="#!"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>');
		endif;

		/**	Link to first page, plus ellipses if necessary */
		if ( ! in_array( 1, $links ) ) {
			$class = ( 1 === $paged ) ? ' class="active"' : '';

			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

			if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
		}

		/**	Link to current page, plus 2 pages in either direction if necessary */
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = ( $paged === $link ) ? ' class="active waves-effect"' : ' class="waves-effect"';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}

		/**	Link to last page, plus ellipses if necessary */
		if ( ! in_array( $max, $links ) ) {
			if ( ! in_array( $max - 1, $links ) )
			echo '<li class="waves-effect">…</li>' . "\n";

			$class = ( $paged === $max ) ? ' class="active waves-effect"' : ' class="waves-effect"';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}

		/**	Next Post Link */
		if ( get_next_posts_link() ) :
			printf( '<li class="waves-effect">%s</li>' . "\n", get_next_posts_link( '<i class="fa fa-chevron-right" aria-hidden="true"></i>' ) );
		else :
			print('<li class="disabled"><a href="#!"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>');
		endif;

		echo '</ul>' . "\n";

	}
endif;
