<?php
// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define plugin version in SemVer format.
if ( ! defined( 'PAYSTACK_FOR_GIVE_VERSION' ) ) {
	define( 'PAYSTACK_FOR_GIVE_VERSION', '1.3.0' );
}

// Define plugin root File.
if ( ! defined( 'PAYSTACK_FOR_GIVE_PLUGIN_FILE' ) ) {
	define( 'PAYSTACK_FOR_GIVE_PLUGIN_FILE', dirname( dirname( __FILE__ ) ) . '/paystack-give.php' );
}

// Define plugin basename.
if ( ! defined( 'PAYSTACK_FOR_GIVE_PLUGIN_BASENAME' ) ) {
	define( 'PAYSTACK_FOR_GIVE_PLUGIN_BASENAME', plugin_basename( PAYSTACK_FOR_GIVE_PLUGIN_FILE ) );
}

// Define plugin directory Path.
if ( ! defined( 'PAYSTACK_FOR_GIVE_PLUGIN_DIR' ) ) {
	define( 'PAYSTACK_FOR_GIVE_PLUGIN_DIR', plugin_dir_path( PAYSTACK_FOR_GIVE_PLUGIN_FILE ) );
}

// Define plugin directory URL.
if ( ! defined( 'PAYSTACK_FOR_GIVE_PLUGIN_URL' ) ) {
	define( 'PAYSTACK_FOR_GIVE_PLUGIN_URL', plugin_dir_url( PAYSTACK_FOR_GIVE_PLUGIN_FILE ) );
}