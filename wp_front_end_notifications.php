<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.linkedin.com/in/mustafa-shaaban22/
 * @since             1.0.0
 * @package           Wp_front_end_notifications
 *
 * @wordpress-plugin
 * Plugin Name:       WP Front-End Notifications
 * Plugin URI:        https://github.com/MustafaShaaban/wp_front_end_notifications
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Mustafa Shaaban
 * Author URI:        https://www.linkedin.com/in/mustafa-shaaban22/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp_front_end_notifications
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_FRONT_END_NOTIFICATIONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp_front_end_notifications-activator.php
 */
function activate_wp_front_end_notifications() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp_front_end_notifications-activator.php';
	Wp_front_end_notifications_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp_front_end_notifications-deactivator.php
 */
function deactivate_wp_front_end_notifications() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp_front_end_notifications-deactivator.php';
	Wp_front_end_notifications_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_front_end_notifications' );
register_deactivation_hook( __FILE__, 'deactivate_wp_front_end_notifications' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp_front_end_notifications.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_front_end_notifications() {

	$plugin = new Wp_front_end_notifications();
	$plugin->run();

}
run_wp_front_end_notifications();
