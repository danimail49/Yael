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
		elseif( 'video' === get_post_format() && ! empty( get_post_meta( get_the_ID(), 'bdbg_video_url', true ) ) ) :
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
			$time_string = bdbg_post_meta_date();
			// Post Author.
			$author = bdbg_post_meta_author();
			// Post comments.
			$write_comments = bdbg_post_meta_comments();
			// Categories
			$categories = bdbg_post_meta_categories();

			if ( ! is_singular() ) :
				echo "{$author} {$time_string} {$write_comments}";
			else :
				echo "{$author} {$time_string} {$categories} {$write_comments}";
			endif;
		}
	}

endif;

if ( ! function_exists( 'bdbg_post_meta_date' ) ) :

	function bdbg_post_meta_date() {
		// Post Date.
		$archive_year  = get_the_time( 'Y' );
		$archive_month = get_the_time( 'm' );
		$time_string = '<a href="' . get_month_link( $archive_year, $archive_month ) . '">
			%1$s
		</a>';

		$date_format = ( ! is_rtl() ) ? 'F jS, Y' : 'd F Y';
		$time_string = sprintf( $time_string, esc_attr( get_the_date( $date_format ) ) );

		return "<span class=\"bdbg-meta__item bdbg-meta__time\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> {$time_string}</span>";
	}

endif;

if ( ! function_exists( 'bdbg_post_meta_author' ) ) :

	function bdbg_post_meta_author() {
		// Post Date.
		$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
		$author_name = get_the_author_meta( 'display_name' );
		$author = "<a href=\"{$author_url}\" rel=\"author\"> {$author_name}</a>";

		return "<span class=\"bdbg-meta__item bdbg-meta__author\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {$author}</span>";
	}

endif;

if ( ! function_exists( 'bdbg_post_meta_comments' ) ) :

	function bdbg_post_meta_comments() {

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
				 ' . $comments . '
			</a>';
		else :
			$write_comments = __( 'Comments are off for this post.', 'budabuga' );
		endif;

		return "<span class=\"bdbg-meta__item bdbg-meta__comments\"><i class=\"fa fa-commenting-o\" aria-hidden=\"true\"></i> {$write_comments}</span>";
	}

endif;

if ( ! function_exists( 'bdbg_post_meta_categories' ) ) :

	function bdbg_post_meta_categories() {

		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'budabuga' ) );
		if ( $categories_list ) {
			$categories = sprintf( '<span class="cat-links"> <span class="screen-reader-text">%1$s </span>
 %2$s</span>',
				_x( 'Categories', 'Used before category names.', 'budabuga' ),
				$categories_list
			);
		}

		return "<span class=\"bdbg-meta__item bdbg-meta__cats\"><i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i> {$categories}</span>";

	}

endif;

if ( ! function_exists( 'bdbg_post_meta_tags' ) ) :

	function bdbg_post_meta_tags() {
		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'budabuga' ) );

		if ( $tags_list ) {
			$taxonomies = sprintf( '<span class="cat-links"><span class="screen-reader-text">%1$s</span>
 %2$s',
				_x( 'Tags', 'Used before tag names.', 'budabuga' ),
				$tags_list
			);

			return "<span class=\"bdbg-meta__item bdbg-meta__cats\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i> {$taxonomies}</span>";
		}

		return false;
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

if ( ! function_exists( 'bdbg_list_comments' ) ) :

	function bdbg_list_comments( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;

		if ( 'div' === $args['style'] ) {
			$add_below = 'comment';
		} else {
			$add_below = 'div-comment';
		}

		$item_class = 'bdbg-comments__item row valign-wrapper';
		$avatar_args = array(
			'size' 	=> $args['avatar_size'],
			'alt'	=> 'User Avatar',
			'args'	=> array(
				'width' => 48,
				'height' => 48,
			),
		);

		if ( ! empty( $args['has_children'] ) ) :
			$item_class .= ' bdbg-comments__item--parent';
		endif;
		?>

		<li id="<?php echo 'comment-' . comment_ID(); ?>"
			<?php comment_class( $item_class ); ?>>

			<div class="bdbg-comments__author col l3 m3 s12">
				<div class="bdbg-comments__avatar">
					<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 64 ); ?>
					<br />
					<span class="title"><b><?php echo get_comment_author_link(); ?></b></span>
				</div>
				<!-- /.bdbg-comments__avatar -->
			</div>
			<!-- /.bdbg-comments__author -->

			<div class="bdbg-comments__text col l9 m9 s12">
				<div class="bdbg-comments__body">
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em class="comment-awaiting-moderation">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
							<?php _e( 'Your comment is awaiting moderation.', 'budabuga' ); ?>
						</em><br /><br />
					<?php endif; ?>
					<div class="bdbg-commets__text-row">
						<?php comment_text(); ?>
						<div class="bdbg-comments__meta">
							<?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a>
						</div>
						<!-- /.bdbg-comments__meta -->
					</div>
					<!-- /.bdbg-commets__text-row -->
					<div class="bdbg-commets__text-row">
						<div class="bdbg-commetns__reply">
							<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</div>
						<!-- /.bdbg-comments__reply -->
					</div>
					<!-- /.bdbg-commets__text-row -->
				</div>
				<!-- /.bdbg-comments__body -->
			</div>
			<!-- /.bdbg-comments__text -->
		</li>
	<?php }

endif;

if ( ! function_exists( 'bdbg_gravatar_class' ) ) :

	/**
	 * Adds custom classes to wp avatar.
	 *
	 * @since 1.00
	 *
	 * @param  string $class Avatar class list.
	 *
	 * @return string        Avatar class list.
	 */
	function bdbg_gravatar_class( $class ) {
		$class = str_replace( "class='avatar", "class='bdbg-comments__avatar", $class );
		return $class;
	}
	add_filter( 'get_avatar','bdbg_gravatar_class' );

endif;

if ( ! function_exists( 'bdbg_reply_link_class' ) ) :

	function bdbg_reply_link_class( $class ){
		$new_classes = 'comment-reply-link btn waves-effect waves-light';
		$new_title = __( 'Reply', 'budabuga' );

	    $class = str_replace( "class='comment-reply-link", "class='{$new_classes}", $class );
	    return $class;
	}
	add_filter( 'comment_reply_link', 'bdbg_reply_link_class' );

endif;

if ( ! function_exists( 'bdbg_move_comment_field_to_bottom' ) ) :

	function bdbg_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter( 'comment_form_fields', 'bdbg_move_comment_field_to_bottom' );

endif;

if( ! function_exists( 'bdbg_comment_form' ) ) :

	function bdbg_comment_form() {
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? "aria-required=\"true\"" : '' );

		$value_author = esc_attr( $commenter['comment_author'] );
		$value_email = esc_attr( $commenter['comment_author_email'] );
		$value_url = esc_attr( $commenter['comment_author_url'] );

		$label_email = __( 'Email *', 'budabuga' );
		$label_url = __( 'Url', 'budabuga' );
		$label_name = __( 'Name *', 'budabuga' );
		$label_comment = __( 'Comment *', 'budabuga' );

		$args = array(
			'id_form'           => 'commentform',
			'class_form'      	=> 'bdbg-commentform row',
			'id_submit'         => 'submit',
			'class_submit'      => 'bdbg-commentform__submit col btn-large waves-effect waves-light',
			'name_submit'       => 'submit',
			'title_reply_before'=> '<h5>',
			'title_reply_after'	=> '</h5>',
			'title_reply'       => __( 'Leave a Reply', 'budabuga' ),
			'title_reply_to'    => __( 'Leave a Reply to %s', 'budabuga' ),
			'cancel_reply_link' => __( 'Cancel Reply', 'budabuga' ),
			'label_submit'      => __( 'Post Comment', 'budabuga' ),
			'fields' 			=> array(
			    'author' => "
					<div class=\"comment-form-author input-field col s6\">
					  <input id=\"author\" name=\"author\" type=\"text\" class=\"validate\"
					  value=\"{$value_email}\" {$aria_req} />
					  <label for=\"author\">{$label_name}</label>
					</div>",

			    'email' => "
					<div class=\"comment-form-email input-field col s6\">
				  		<input id=\"email\" name=\"email\" type=\"text\" class=\"validate\"
						value=\"{$value_author}\" {$aria_req} />
				  		<label for=\"email\">{$label_email}</label>
					</div>",

			   'url' => "
					<div class=\"comment-form-url input-field col s12\">
					  <input id=\"url\" name=\"url\" type=\"text\" class=\"validate\"
						value=\"{$value_url}\">
					  <label for=\"url\">{$label_url}</label>
					</div>",

			),

			'comment_field' => "
			<div class=\"comment-form-comment input-field col s12\">
			  <textarea id=\"comment\" name=\"comment\" class=\"materialize-textarea\" value=\"\" aria-required=\"true\" required></textarea>
			  <label for=\"comment\">{$label_comment}</label>
			</div>",
		);
		comment_form( $args );
	}

endif;

if ( ! function_exists( 'bdbg_comments_pagination' ) ) :

	function bdbg_comments_pagination() {
		$args = array(
			'echo' => false,
			'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
			'next_text' => '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
		);

		$pagination = paginate_comments_links( $args );

		echo $pagination = str_replace( "page-numbers", "page-numbers waves-effect", $pagination );
	}

endif;

if ( ! function_exists( 'bdbg_embed_wrapper' ) ) :

	function bdbg_embed_wrapper( $html, $url, $attr, $post_id ) {
		return '<div class="video-container">' . $html . '</div>';
	}

	add_filter( 'embed_oembed_html', 'bdbg_embed_wrapper', 10, 4 );

endif;
