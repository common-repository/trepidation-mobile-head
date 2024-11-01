<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://trepidation.co.uk
 * @since      1.0.0
 *
 * @package    trepi_mobile_head
 * @subpackage trepi_mobile_head/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    trepi_mobile_head
 * @subpackage trepi_mobile_head/includes
 * @author      Colin Gell <colin@trepidation.co.uk>
 */
class trepi_mobile_head_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'trepi-mobile-head',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
