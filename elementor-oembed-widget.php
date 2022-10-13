<?php
/**
 * Plugin Name: Elementor oEmbed Widget
 * Description: Auto embed any embbedable content from external URLs into Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-oembed-widget
 *
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */

define( 'ELEMENTOR_URL_PLUGIN_CUSTOM', plugin_dir_url( __FILE__ ) );

function register_blocks_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/oembed-widget.php' );
	$widgets_manager->register( new \Elementor_oEmbed_Widget() );

    require_once( __DIR__ . '/widgets/list-widget.php' );
	$widgets_manager->register( new \Elementor_List_Widget() );

}
add_action( 'elementor/widgets/register', 'register_blocks_widget' );