<?php
/**
 * Aheto Starter Kit
 *
 * @package      Aheto_Kit
 * @copyright    Copyright (C) 2018, UpQocde - support@upqode.com
 * @link         https://upqode.com
 * @since        1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Aheto Starter Kit
 * Version:           1.0.0
 * Plugin URI:        https://upqode.com/aheto/
 * Description:       A radical new plugin for WordPress!
 * Author:            Upqode
 * Author URI:        https://upqode.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aheto_kit
 * Domain Path:       /i18n/languages
 */

defined( 'ABSPATH' ) || exit;

include dirname( __FILE__ ) . '/vendor/autoload.php';

add_action( 'plugins_loaded', 'aheto_kit_check_parent_plugin' );
/**
 * Check if Aheto plugin activated or not.
 */
function aheto_kit_check_parent_plugin() {
	if ( ! function_exists( 'aheto' ) ) {
		add_action( 'admin_init', 'aheto_kit_auto_deactivate' );
		add_action( 'admin_notices', 'aheto_kit_plugin_not_activated' );
		return;
	}

	add_action( 'aheto_register_elements', 'aheto_kit_register_elements' );
}

/**
 * Auto-deactivate plugin if requirement not meet.
 */
function aheto_kit_auto_deactivate() {
	deactivate_plugins( plugin_basename( __FILE__ ) );
	if ( isset( $_GET['activate'] ) ) {
		unset( $_GET['activate'] );
	}
}

/**
 * Plugin not activated.
 */
function aheto_kit_plugin_not_activated() {
	?>
	<div class="notice notice-error">
		<p>Aheto plugin not activated. Deactivating starter kit.</p>
	</div>
	<?php
}

/**
 * Register new shortcodes.
 *
 * @param array $elements Array of register elements.
 *
 * @return array
 */
function aheto_kit_register_elements( $elements ) {
	$elements['sample'] = [
		'title' => esc_html__( 'Starter Kit Sample', 'aheto' ),
		'class' => '\\Aheto_Kit\\Sample',
	];

	return $elements;
}
