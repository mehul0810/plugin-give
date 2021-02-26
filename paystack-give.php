<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link    https://paystack.com
 * @since   1.0.0
 * @package Paystack_Give
 *
 * @wordpress-plugin
 * Plugin Name:       Paystack Payments for Give
 * Plugin URI:        http://wordpress.org/plugins/paystack-give
 * Description:       Paystack integration for accepting payments via card, bank accounts, USSD and mobile money
 * Version:           1.3.0
 * Author:            Paystack
 * Author URI:        https://paystack.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       paystack-give
 * Domain Path:       /languages
 */

namespace Paystack\GiveWP;

// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load Constants.
require_once __DIR__ . '/config/constants.php';

// Automatically loads files used throughout the plugin.
require_once PAYSTACK_FOR_GIVE_PLUGIN_DIR . 'vendor/autoload.php';

// Initialize the plugin.
$plugin = new Plugin();
$plugin->register();