<?php
/**
 * Paystack for Give | Helpers File.
 * 
 * @package WordPress
 * @subpackage Paystack for Give
 * @since 1.0.0
 */

namespace Paystack\GiveWP\Includes;

// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Helpers {
    /**
     * Get Secret Key.
     * 
     * @since  1.0.0
     * @access public
     *
     * @return string
     */
    public static function get_secret_key() {
        $key = give_get_option( 'paystack_live_secret_key' );
        
        // Get Secret Key for test mode.
        if ( give_is_test_mode() ) {
            $key = give_get_option( 'paystack_test_secret_key' );
        }

        return $key;
    }

    /**
     * Get Public Key.
     * 
     * @since  1.0.0
     * @access public
     *
     * @return string
     */
    public static function get_public_key() {
        $key = give_get_option( 'paystack_live_public_key' );
        
        // Get Public Key for test mode.
        if ( give_is_test_mode() ) {
            $key = give_get_option( 'paystack_test_public_key' );
        }
        
        return $key;
    }
}