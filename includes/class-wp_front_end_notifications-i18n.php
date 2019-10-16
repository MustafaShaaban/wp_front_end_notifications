<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/mustafa-shaaban22/
 * @since      1.0.0
 *
 * @package    Wp_front_end_notifications
 * @subpackage Wp_front_end_notifications/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_front_end_notifications
 * @subpackage Wp_front_end_notifications/includes
 * @author     Mustafa Shaaban <mustafashaaban22@gmail.com>
 */
class Wp_front_end_notifications_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp_front_end_notifications',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
