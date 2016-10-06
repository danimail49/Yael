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
endif; ?>

<!-- Title -->
<span class="mdl-layout-title bdbg-logo bdbg-logo--main"><?php bdbg_logo(); ?></span>

<!-- Add spacer, to align navigation to the right -->
<div class="mdl-layout-spacer"></div>

<!-- Navigation. We hide it in small screens. -->
<nav role="navigation" class="mdl-navigation mdl-layout--large-screen-only">
	<?php bdbg_menus( 'main' );	?>
</nav>
<!-- /.mdl-navigation mdl-layout--large-screen-only -->
