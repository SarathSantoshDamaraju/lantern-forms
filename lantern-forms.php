<?php
/**
 * Plugin initialization file
 *
 * @package LanternForms
 * @since 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: Lantern Forms
 * Plugin URI:  https://github.com/SarathSantoshDamaraju/lantern-forms.git
 * Description: Lantern Forms is an extendable WordPress form builder with Drag & Drop functionality, chart evaluation and more - with WordPress look and feel.
 * Version:     1.0.0
 * License:     GNU General Public License v2 (or later)
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: lantern-forms
 * Tags:        forms, form builder, surveys, polls, votes, charts, api
 *
 * forked from: https://github.com/awsmug/torro-forms
 */

defined( 'ABSPATH' ) || exit;

/**
 * The main function to return the Lantern Forms instance.
 *
 * Any extension can use this function to access the main plugin object or to simply check
 * whether the plugin is active and running. Example:
 *
 * `if ( function_exists( 'lantern' ) && lantern() ) {
 *     // Do custom extension stuff.
 * }
 * `
 *
 * @since 1.0.0
 *
 * @return Lantern_Forms|null The Lantern Forms instance, or null on failure.
 */
function lantern() {
	if ( ! class_exists( 'Lantern_Forms' ) ) {
		$main_file        = __FILE__;
		$basedir_relative = '';

		$file          = wp_normalize_path( $main_file );
		$mu_plugin_dir = wp_normalize_path( WPMU_PLUGIN_DIR );
		if ( preg_match( '#^' . preg_quote( $mu_plugin_dir, '#' ) . '/#', $file ) && file_exists( $mu_plugin_dir . '/lantern-forms.php' ) ) {
			$basedir_relative = 'lantern-forms/';
		}

		if ( ! class_exists( 'Leaves_And_Love_Plugin_Loader' ) ) {
			$locations = array(
				plugin_dir_path( $main_file ) . $basedir_relative . 'vendor/felixarntz/plugin-lib/plugin-loader.php',
				$mu_plugin_dir . '/plugin-lib/plugin-loader.php',
				dirname( ABSPATH ) . '/vendor/felixarntz/plugin-lib/plugin-loader.php',
				dirname( dirname( ABSPATH ) ) . '/vendor/felixarntz/plugin-lib/plugin-loader.php',
			);
			foreach ( $locations as $location ) {
				if ( file_exists( $location ) ) {
					require_once $location;
					break;
				}
			}
		}

		require_once plugin_dir_path( $main_file ) . $basedir_relative . 'src/lantern-forms.php';

		Leaves_And_Love_Plugin_Loader::load( 'Lantern_Forms', $main_file, $basedir_relative );
	}

	$lantern = Leaves_And_Love_Plugin_Loader::get( 'Lantern_Forms' );
	if ( is_wp_error( $lantern ) ) {
		return null;
	}

	return $lantern;
}

/**
 * Executes a callback after Lantern Forms has been initialized.
 *
 * This function should be used by all Lantern Forms extensions to initialize themselves.
 *
 *
 * @since 1.0.0
 *
 * @param callable $callback Callback to bootstrap the extension.
 */
function lantern_load( $callback ) {
	if ( did_action( 'lantern_loaded' ) || doing_action( 'lantern_loaded' ) ) {
		call_user_func( $callback, lantern() );
		return;
	}

	add_action( 'lantern_loaded', $callback, 10, 1 );
}

lantern();
