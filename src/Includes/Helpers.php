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

    /**
     * Get Endpoint URL.
     * 
     * @since  1.0.0
     * @access public
     *
     * @return string
     */
    public static function get_endpoint_url() {
        return 'https://api.paystack.co';
    }

    /**
     * Get Request Headers.
     * 
     * @since  1.0.0
     * @access public
     *
     * @return array
     */
    public static function get_request_headers() {
        $secret_key = self::get_secret_key();

        return [
            'Authorization' => "Bearer {$secret_key}",
            'Cache-Control' => 'no-cache',
        ];
    }

    /**
     * Get Supported Channels.
     * 
     * @since  1.0.0
     * @access public
     *
     * @return array
     */
    public static function get_supported_channels() {
        $channels = [
            'card',
            'bank',
            'ussd',
            'qr',
            'mobile_money',
            'bank_transfer',
        ];

        return apply_filters( 'paystack_for_give_supported_channels', $channels );
    }
}