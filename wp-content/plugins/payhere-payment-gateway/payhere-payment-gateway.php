<?php
/**
 * The plugin bootstrap file
 *
 * @wordpress-plugin
 * Plugin Name:       PayHere Payment Gateway
 * Plugin URI:        https://www.payhere.lk
 * Description:       PayHere Payment Gateway allows you to accept payment on your Woocommerce store via Visa, MasterCard, AMEX, eZcash, mCash & Internet banking services.
 * Version:           2.2.6
 * Author:            PayHere (Private) Limited
 * Author URI:        https://www.payhere.lk
 * Text Domain:       payhere
 * Domain Path:       /languages
 *
 * @package    PayHere
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 2.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PAYHERE_VERSION', '2.2.6' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-payhere-activator.php
 */
function activate_payhere() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-payhere-activator.php';
	PayHere_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-payhere-deactivator.php
 */
function deactivate_payhere() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-payhere-deactivator.php';
	PayHere_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_payhere' );
register_deactivation_hook( __FILE__, 'deactivate_payhere' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-payhere.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.0.0
 */
function run_payhere() {
	$plugin = new PayHere();
	$plugin->run();
}
run_payhere();
