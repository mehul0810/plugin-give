<?php
/**
 * Paystack for Give | Admin Filters File.
 * 
 * @package WordPress
 * @subpackage Paystack for Give
 * @since 1.0.0
 */

namespace Paystack\GiveWP\Admin;

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
        add_filter( 'give_get_sections_gateways', [ $this, 'register_sections' ] );
        add_filter( 'give_get_settings_gateways', [ $this, 'register_settings' ] );
    }

    /**
     * Register Admin Section.
     *
     * @param array $sections List of sections.
     *
     * @since  1.0.0
     * @access public
     *
     * @return array
     */
    public function register_sections( $sections ) {
        $sections['paystack'] = esc_html__( 'Paystack', 'paystack-give' );

        return $sections;
    }

    /**
     * Register Admin Settings.
     *
     * @param array $settings List of settings.
     *
     * @since  1.0.0
     * @access public
     *
     * @return array
     */
    public function register_settings( $settings ) {
        $current_section = give_get_current_setting_section();

        switch ( $current_section ) {
            case 'paystack':
                $settings = [
                    [
                        'type' => 'title',
                        'id'   => 'give_title_gateway_settings_paystack',
                    ],
                    [
                        'name' => esc_html__( 'Paystack', 'paystack-give' ),
                        'desc' => '',
                        'type' => 'give_title',
                        'id'   => 'give_title_paystack',
                    ],
                    [
                        'name'        => esc_html__( 'Test Secret Key', 'paystack-give' ),
                        'desc'        => esc_html__( 'Enter your Paystack Test Secret Key', 'paystack-give' ),
                        'id'          => 'paystack_test_secret_key',
                        'type'        => 'text',
                        'row_classes' => 'give-paystack-test-secret-key',
                    ],
                    [
                        'name'        => esc_html__( 'Test Public Key', 'paystack-give' ),
                        'desc'        => esc_html__( 'Enter your Paystack Test Public Key', 'paystack-give' ),
                        'id'          => 'paystack_test_public_key',
                        'type'        => 'text',
                        'row_classes' => 'give-paystack-test-public-key',
                    ],
                    [
                        'name'        => esc_html__( 'Live Secret Key', 'paystack-give' ),
                        'desc'        => esc_html__( 'Enter your Paystack Live Secret Key', 'paystack-give' ),
                        'id'          => 'paystack_live_secret_key',
                        'type'        => 'text',
                        'row_classes' => 'give-paystack-live-secret-key',
                    ],
                    [
                        'name'        => esc_html__( 'Live Public Key', 'paystack-give' ),
                        'desc'        => esc_html__( 'Enter your Paystack Live Public Key', 'paystack-give' ),
                        'id'          => 'paystack_live_public_key',
                        'type'        => 'text',
                        'row_classes' => 'give-paystack-live-public-key',
                    ],
                    [
                        'name'    => esc_html__( 'Billing Details', 'paystack-give' ),
                        'desc'    => esc_html__( 'This will enable you to collect donor details. This is not required by Paystack (except email) but you might need to collect all information for record purposes', 'paystack-give' ),
                        'id'      => 'paystack_billing_details',
                        'type'    => 'radio_inline',
                        'default' => 'disabled',
                        'options' => [
                            'enabled'  => esc_html__( 'Enabled', 'paystack-give' ),
                            'disabled' => esc_html__( 'Disabled', 'paystack-give' ),
                        ],
                    ],
                    [
                        'type' => 'sectionend',
                        'id'   => 'give_title_gateway_settings_paystack',
                    ]
                ];
                break;
        }
        
        return $settings;
    }
}