<?php
/**
 * BudaBuga custom colorpicker.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/**
 * Alpha Color Picker Customizer Control
 *
 * This control adds a second slider for opacity to the stock WordPress color picker,
 * and it includes logic to seamlessly convert between RGBa and Hex color values as
 * opacity is added to or removed from a color.
 *
 * @package Budabuga
 * @since 1.00
 */
class Bdbg_Alpha_Color_Control extends WP_Customize_Control {

	/**
	 * Official control name.
	 *
	 * @var string.
	 */
	public $type = 'alpha-color';

	/**
	 * Add support for palettes to be passed in.
	 * Supported palette values are true, false, or an array of RGBa and Hex colors.
	 *
	 * @var array.
	 */
	public $palette;

	/**
	 * Add support for showing the opacity value on the slider handle.
	 *
	 * @var boolean.
	 */
	public $show_opacity;

	/**
	 * Render the colorpicker control.
	 *
	 * @since 1.00
	 */
	public function render_content() {

		// Process the palette.
		if ( is_array( $this->palette ) ) :
			$palette = implode( '|', $this->palette );
		else :
			$palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
		endif;

		// Support passing show_opacity as string or boolean. Default to true.
		$show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';

		// Begin the output. ?>
		<label>
			<?php // Output the label and description if they were passed in.
			if ( isset( $this->label ) && '' !== $this->label ) :
				echo '<span class="customize-control-title">' . sanitize_text_field( $this->label ) . '</span>';
			endif;
			if ( isset( $this->description ) && '' !== $this->description ) :
				echo '<span class="description customize-control-description">' . sanitize_text_field( $this->description ) . '</span>';
			endif; ?>
			<input class="alpha-color-control" type="text" data-show-opacity="<?php echo $show_opacity; ?>"
			       data-palette="<?php echo esc_attr( $palette ); ?>"
			       data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php $this->link(); ?> />
		</label>
		<?php
	}
}
