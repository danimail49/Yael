<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @since 1.00
 *
 * @package Budabuga
 * @subpackage Yael
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

get_header(); ?>

<section class="bdbg-post-archive row">

	<?php if ( have_posts() ) : ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			/*
			* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content/content', get_post_format() );

		endwhile;
		// End the loop. ?>

	<?php else :
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

</section>
<!-- /.bdbg-post-archive -->

<?php
get_footer();
