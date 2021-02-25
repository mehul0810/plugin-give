<?php
/**
 * Paystack for Give | Frontend Filters File.
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

class Filters {
    /**
     * Constructor.
     * 
     * @since  1.0.0
     * @access public
     * 
     * @return void
     */
    public function __construct() {
        add_filter( 'give_payment_gateways', [ $this, 'register_gateways' ] );
    }

    /**
     * Register Gateways.
     *
     * @param array $gateways List of registered gateways.
     * 
     * @since  1.0.0
     * @access public
     * 
     * @return array
     */
    public function register_gateways( $gateways ) {
        $gateways['paystack'] = [
            'admin_label'    => esc_html__( 'Paystack', 'paystack-give' ),
            'checkout_label' => esc_html__( 'Paystack', 'paystack-give' ),
        ];

        return $gateways;
    }
}