<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'distinctpress';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'distinctpress' ),
				'background-image'      => esc_attr__( 'Background Image', 'distinctpress' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'distinctpress' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'distinctpress' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'distinctpress' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'distinctpress' ),
				'inherit'               => esc_attr__( 'Inherit', 'distinctpress' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'distinctpress' ),
				'cover'                 => esc_attr__( 'Cover', 'distinctpress' ),
				'contain'               => esc_attr__( 'Contain', 'distinctpress' ),
				'background-size'       => esc_attr__( 'Background Size', 'distinctpress' ),
				'fixed'                 => esc_attr__( 'Fixed', 'distinctpress' ),
				'scroll'                => esc_attr__( 'Scroll', 'distinctpress' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'distinctpress' ),
				'left-top'              => esc_attr__( 'Left Top', 'distinctpress' ),
				'left-center'           => esc_attr__( 'Left Center', 'distinctpress' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'distinctpress' ),
				'right-top'             => esc_attr__( 'Right Top', 'distinctpress' ),
				'right-center'          => esc_attr__( 'Right Center', 'distinctpress' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'distinctpress' ),
				'center-top'            => esc_attr__( 'Center Top', 'distinctpress' ),
				'center-center'         => esc_attr__( 'Center Center', 'distinctpress' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'distinctpress' ),
				'background-position'   => esc_attr__( 'Background Position', 'distinctpress' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'distinctpress' ),
				'on'                    => esc_attr__( 'ON', 'distinctpress' ),
				'off'                   => esc_attr__( 'OFF', 'distinctpress' ),
				'all'                   => esc_attr__( 'All', 'distinctpress' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'distinctpress' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'distinctpress' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'distinctpress' ),
				'greek'                 => esc_attr__( 'Greek', 'distinctpress' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'distinctpress' ),
				'khmer'                 => esc_attr__( 'Khmer', 'distinctpress' ),
				'latin'                 => esc_attr__( 'Latin', 'distinctpress' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'distinctpress' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'distinctpress' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'distinctpress' ),
				'arabic'                => esc_attr__( 'Arabic', 'distinctpress' ),
				'bengali'               => esc_attr__( 'Bengali', 'distinctpress' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'distinctpress' ),
				'tamil'                 => esc_attr__( 'Tamil', 'distinctpress' ),
				'telugu'                => esc_attr__( 'Telugu', 'distinctpress' ),
				'thai'                  => esc_attr__( 'Thai', 'distinctpress' ),
				'serif'                 => _x( 'Serif', 'font style', 'distinctpress' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'distinctpress' ),
				'monospace'             => _x( 'Monospace', 'font style', 'distinctpress' ),
				'font-family'           => esc_attr__( 'Font Family', 'distinctpress' ),
				'font-size'             => esc_attr__( 'Font Size', 'distinctpress' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'distinctpress' ),
				'line-height'           => esc_attr__( 'Line Height', 'distinctpress' ),
				'font-style'            => esc_attr__( 'Font Style', 'distinctpress' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'distinctpress' ),
				'top'                   => esc_attr__( 'Top', 'distinctpress' ),
				'bottom'                => esc_attr__( 'Bottom', 'distinctpress' ),
				'left'                  => esc_attr__( 'Left', 'distinctpress' ),
				'right'                 => esc_attr__( 'Right', 'distinctpress' ),
				'center'                => esc_attr__( 'Center', 'distinctpress' ),
				'justify'               => esc_attr__( 'Justify', 'distinctpress' ),
				'color'                 => esc_attr__( 'Color', 'distinctpress' ),
				'add-image'             => esc_attr__( 'Add Image', 'distinctpress' ),
				'change-image'          => esc_attr__( 'Change Image', 'distinctpress' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'distinctpress' ),
				'add-file'              => esc_attr__( 'Add File', 'distinctpress' ),
				'change-file'           => esc_attr__( 'Change File', 'distinctpress' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'distinctpress' ),
				'remove'                => esc_attr__( 'Remove', 'distinctpress' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'distinctpress' ),
				'variant'               => esc_attr__( 'Variant', 'distinctpress' ),
				'subsets'               => esc_attr__( 'Subset', 'distinctpress' ),
				'size'                  => esc_attr__( 'Size', 'distinctpress' ),
				'height'                => esc_attr__( 'Height', 'distinctpress' ),
				'spacing'               => esc_attr__( 'Spacing', 'distinctpress' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'distinctpress' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'distinctpress' ),
				'light'                 => esc_attr__( 'Light 200', 'distinctpress' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'distinctpress' ),
				'book'                  => esc_attr__( 'Book 300', 'distinctpress' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'distinctpress' ),
				'regular'               => esc_attr__( 'Normal 400', 'distinctpress' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'distinctpress' ),
				'medium'                => esc_attr__( 'Medium 500', 'distinctpress' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'distinctpress' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'distinctpress' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'distinctpress' ),
				'bold'                  => esc_attr__( 'Bold 700', 'distinctpress' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'distinctpress' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'distinctpress' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'distinctpress' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'distinctpress' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'distinctpress' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'distinctpress' ),
				'add-new'           	=> esc_attr__( 'Add new', 'distinctpress' ),
				'row'           		=> esc_attr__( 'row', 'distinctpress' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'distinctpress' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'distinctpress' ),
				'back'                  => esc_attr__( 'Back', 'distinctpress' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'distinctpress' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'distinctpress' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'distinctpress' ),
				'none'                  => esc_attr__( 'None', 'distinctpress' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'distinctpress' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'distinctpress' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'distinctpress' ),
				'initial'               => esc_attr__( 'Initial', 'distinctpress' ),
				'select-page'           => esc_attr__( 'Select a Page', 'distinctpress' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'distinctpress' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'distinctpress' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'distinctpress' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'distinctpress' ),
			);

			// Apply global changes from the kirki/config filter.
			// This is generally to be avoided.
			// It is ONLY provided here for backwards-compatibility reasons.
			// Please use the kirki/{$config_id}/l10n filter instead.
			$config = apply_filters( 'kirki/config', array() );
			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			// Apply l10n changes using the kirki/{$config_id}/l10n filter.
			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
