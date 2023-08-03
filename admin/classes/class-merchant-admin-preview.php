<?php
/**
 * Merchant_Admin_Preview Class.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'Merchant_Admin_Preview' ) ) {
	class Merchant_Admin_Preview {

		/**
		 * @var string
		 */
		protected $html;

		/**
		 * @var array
		 */
		protected $manipulators;

		/**
		 * The single class instance.
		 */
		private static $instance = null;

		/**
		 * Instance.
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Constructor.
		 */
		public function __construct() {}

		/**
		 * @param $html
		 *
		 * @return void
		 */
		public function set_html( $html ) {
			$this->html = $html;
		}

		/**
		 * This will update the CSS variable of a selector with the value from the settings field.
		 *
		 * @param string $setting the setting ID
		 * @param string $selector the selector
		 * @param string $variable the CSS variable
		 * @param string $unit optional. set unit.
		 *
		 * @return void
		 */
		public function set_css( $setting, $selector, $variable, $unit = '' ) {
			$this->manipulators['css'][] = array(
				'setting'  => $setting,
				'selector' => $selector,
				'variable' => $variable,
				'unit'     => $unit
			);
		}

		/**
		 * This will update the text of a selector with the value from the settings field.
		 *
		 * @param string $setting the setting ID
		 * @param string $selector the selector
		 * @param array $replacements optional, set string replacements
		 *
		 * @return void
		 */
		public function set_text( $setting, $selector, $replacements = array() ) {
			$manipulator = array(
				'setting'  => $setting,
				'selector' => $selector,
			);

			if ( ! empty( $replacements ) ) {
				$manipulator['replacements'] = $replacements;
			}

			$this->manipulators['text'][] = $manipulator;
		}

		/**
		 * This will update an attribute of an element with the value from the settings field.
		 *
		 * @param string $setting the setting ID
		 * @param string $selector the selector
		 * @param string $attribute the attribute to update.
		 * @param array $replacements optional, set string replacements
		 *
		 * @return void
		 */
		public function set_attribute( $setting, $selector, $attribute, $replacements = array() ) {
			$manipulator = array(
				'setting'  => $setting,
				'selector' => $selector,
				'attribute' => $attribute,
			);

			if ( ! empty( $replacements ) ) {
				$manipulator['replacements'] = $replacements;
			}

			$this->manipulators['attributes'][] = $manipulator;
		}

		/**
		 * This will update an icon elements based on icon choices.
		 *
		 * @param string $setting the setting ID
		 * @param string $selector the selector
		 *
		 * @return void
		 */
		public function set_icon( $setting, $selector ) {
			$manipulator = array(
				'setting'  => $setting,
				'selector' => $selector,
			);

			$this->manipulators['icons'][] = $manipulator;
		}

		/**
		 * This will update a class of an element with the value from the settings field.
		 *
		 * @param string $setting the setting ID
		 * @param string $selector the selector
		 * @param array $to_remove optional, classes to remove prior to adding the new one.
		 *
		 * @return void
		 */
		public function set_class( $setting, $selector, $to_remove = array() ) {
			$manipulator = array(
				'setting'  => $setting,
				'selector' => $selector,
			);

			if ( ! empty( $to_remove ) ) {
				$manipulator['to_remove'] = $to_remove;
			}

			$this->manipulators['classes'][] = $manipulator;
		}

		/**
		 * This will trigger the preview on input change to load the latest changes from
		 * all inputs added to the manipulators array.
		 *
		 * @param string $setting the setting ID
		 *
		 * @return void
		 */
		public function trigger_update( $setting ) {
			$this->manipulators['update'][] = array(
				'setting' => $setting
			);
		}

		public function get_price_format() {
			return str_replace( '0.00', '{string}', wc_price( '0' ) );
		}

		/*****************************************
		 * Static methods
		 *****************************************/

		/**
		 * @return bool
		 */
		public static function has_preview() {
			return isset( self::instance()->html ) && ! empty( self::instance()->html );
		}

		/**
		 * @param $module_id
		 *
		 * @return void
		 */
		public static function set_preview( $module_id ) {
			/**
			 * Hook: merchant_module_previe
			 *
			 * @since 1.2
			 */
			apply_filters( 'merchant_module_preview', self::instance(), $module_id );

			$manipulators    = isset( self::instance()->manipulators ) && ! empty( self::instance()->manipulators )
				? self::instance()->manipulators
				: array();
			$script_variable = 'var merchantPreviewManipulators = ' . json_encode( $manipulators );

			wp_add_inline_script( 'merchant-admin-preview', $script_variable );
		}

		/**
		 * @return string
		 */
		public static function get_html() {
			return self::instance()->html;
		}
	}

	Merchant_Admin_Preview::instance();
}