<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-desktop-drawer-button">

	<?php bdbg_header(); ?>

	<div class="mdl-layout__drawer">
		<span class="mdl-layout-title"><?php _e( 'Main Menu', 'budabuga' ); ?></span>
		<div class="mdl-navigation">
			<?php bdbg_menus( 'side' );	?>
		</div>
	</div>
	<main class="mdl-layout__content">
		<div class="page-content"><!-- Your content goes here -->
			<h1>MENU TEST</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla mattis nulla. Sed id scelerisque mi. Phasellus placerat, massa id rhoncus fermentum, dui lectus tempus lorem, ac euismod lorem odio ac dolor. Maecenas quis gravida velit. Suspendisse vel maximus nisi. Nulla porttitor congue ligula ac finibus. Mauris eu fermentum sem. Donec faucibus nulla nulla, ut aliquam sem convallis non. Nam nulla leo, scelerisque et orci et, consequat vestibulum tellus. Quisque non egestas urna, vel cursus neque. Ut efficitur lacus nec leo maximus, vel pulvinar enim feugiat.
			</p>

			<p>
				Ut hendrerit est at arcu lobortis imperdiet. Nullam in nibh non tellus porta venenatis. Integer id imperdiet ante. Nullam non elementum nisi, eu blandit tellus. Donec volutpat, erat eget egestas sagittis, nisi dui lacinia felis, vel feugiat arcu felis ut nulla. In congue blandit est, vitae interdum libero posuere sed. Maecenas in efficitur nunc.
			</p>

			<p>
				Fusce porta posuere dui et consequat. Duis ornare arcu id erat vulputate, eget cursus ex luctus. Cras eu magna elit. Etiam vitae venenatis arcu. Aliquam non accumsan dolor, id bibendum ligula. Aliquam turpis sapien, tempor rutrum fermentum eget, tempor vitae turpis. Nulla quis blandit mauris, ac commodo lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc cursus sit amet erat ut maximus. Donec elit risus, suscipit ac odio vitae, laoreet aliquam lorem. Proin quis sapien eu lectus lobortis pharetra. Phasellus molestie diam ac venenatis mattis. Suspendisse ultricies maximus egestas. Sed in ante purus. Mauris ut leo id justo tempor rutrum.
			</p>

			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla mattis nulla. Sed id scelerisque mi. Phasellus placerat, massa id rhoncus fermentum, dui lectus tempus lorem, ac euismod lorem odio ac dolor. Maecenas quis gravida velit. Suspendisse vel maximus nisi. Nulla porttitor congue ligula ac finibus. Mauris eu fermentum sem. Donec faucibus nulla nulla, ut aliquam sem convallis non. Nam nulla leo, scelerisque et orci et, consequat vestibulum tellus. Quisque non egestas urna, vel cursus neque. Ut efficitur lacus nec leo maximus, vel pulvinar enim feugiat.
			</p>

			<p>
				Ut hendrerit est at arcu lobortis imperdiet. Nullam in nibh non tellus porta venenatis. Integer id imperdiet ante. Nullam non elementum nisi, eu blandit tellus. Donec volutpat, erat eget egestas sagittis, nisi dui lacinia felis, vel feugiat arcu felis ut nulla. In congue blandit est, vitae interdum libero posuere sed. Maecenas in efficitur nunc.
			</p>

			<p>
				Fusce porta posuere dui et consequat. Duis ornare arcu id erat vulputate, eget cursus ex luctus. Cras eu magna elit. Etiam vitae venenatis arcu. Aliquam non accumsan dolor, id bibendum ligula. Aliquam turpis sapien, tempor rutrum fermentum eget, tempor vitae turpis. Nulla quis blandit mauris, ac commodo lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc cursus sit amet erat ut maximus. Donec elit risus, suscipit ac odio vitae, laoreet aliquam lorem. Proin quis sapien eu lectus lobortis pharetra. Phasellus molestie diam ac venenatis mattis. Suspendisse ultricies maximus egestas. Sed in ante purus. Mauris ut leo id justo tempor rutrum.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla mattis nulla. Sed id scelerisque mi. Phasellus placerat, massa id rhoncus fermentum, dui lectus tempus lorem, ac euismod lorem odio ac dolor. Maecenas quis gravida velit. Suspendisse vel maximus nisi. Nulla porttitor congue ligula ac finibus. Mauris eu fermentum sem. Donec faucibus nulla nulla, ut aliquam sem convallis non. Nam nulla leo, scelerisque et orci et, consequat vestibulum tellus. Quisque non egestas urna, vel cursus neque. Ut efficitur lacus nec leo maximus, vel pulvinar enim feugiat.
			</p>

			<p>
				Ut hendrerit est at arcu lobortis imperdiet. Nullam in nibh non tellus porta venenatis. Integer id imperdiet ante. Nullam non elementum nisi, eu blandit tellus. Donec volutpat, erat eget egestas sagittis, nisi dui lacinia felis, vel feugiat arcu felis ut nulla. In congue blandit est, vitae interdum libero posuere sed. Maecenas in efficitur nunc.
			</p>

			<p>
				Fusce porta posuere dui et consequat. Duis ornare arcu id erat vulputate, eget cursus ex luctus. Cras eu magna elit. Etiam vitae venenatis arcu. Aliquam non accumsan dolor, id bibendum ligula. Aliquam turpis sapien, tempor rutrum fermentum eget, tempor vitae turpis. Nulla quis blandit mauris, ac commodo lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc cursus sit amet erat ut maximus. Donec elit risus, suscipit ac odio vitae, laoreet aliquam lorem. Proin quis sapien eu lectus lobortis pharetra. Phasellus molestie diam ac venenatis mattis. Suspendisse ultricies maximus egestas. Sed in ante purus. Mauris ut leo id justo tempor rutrum.
			</p>
		</div>
