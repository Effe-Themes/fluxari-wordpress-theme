<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage fluxari
 * @since fluxari 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fluxari_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Fluxari_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Fluxari Pro', 'fluxari' ),
		'button_text'      => __( 'Upgrade Pro', 'fluxari' ),
		'url'              => esc_url( FLUXARI_BUY_NOW ),
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'fluxari_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function fluxari_custom_control_scripts() {
	wp_enqueue_script( 'fluxari-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'fluxari_custom_control_scripts' );