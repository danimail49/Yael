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
<main class="bdbg-content col s12" role="main">
<section class="bdbg-post-archive">

	<?php
	$post_layout = 'grid-50'; // Values: grid-100, grid-50, 'list'.
	?>

	<div class="row bdbg-row-set">

		<?php if ( have_posts() ) :
			$index = 1;
			?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				$index++;

				/**
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content/content', get_post_format() );

				/**
				 * Closing row for grid-50 layout to avoid float left collapses
				 * when divs has different keys.
				 */
				if ( $index % 2 && 'grid-50' === $post_layout ) :
					echo '</div><div class="row bdbg-row-set">';
				endif;

			endwhile;
			// End the loop. ?>

			<div class="col s12 center-align">
				<?php bdbg_pagination(); ?>
			</div>
			<!-- /.col s12 -->

		<?php else :
			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>
	<!-- /.row -->
</section>
<!-- /.bdbg-post-archive -->
</main>
<!-- /.container bdbg-content -->

<?php
get_footer();
