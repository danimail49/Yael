<?php
/**
 * Class for creating dynamic sedebars.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}
/**
 * Class Bdbg_Int_Customizer_control
 *
 * Adds custom integer control to customizer.
 *
 * @since 1.00
 */
class Bdbg_Int_Customizer_control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @var string
	 */
	public $type = 'numeric_input';

	/**
	 * Creates custom number control.
	 *
	 * @since 1.00
	 */
	public function render_content() { ?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<input type="number" style="width: 100%;" <?php $this->input_attrs(); ?>
				<?php $this->link(); ?> id="<?php echo $this->id; ?>"
				name="<?php echo $this->id; ?>"
				value="<?php echo esc_html( $this->value() ); ?>" />
		</label>
	<?php }
}
