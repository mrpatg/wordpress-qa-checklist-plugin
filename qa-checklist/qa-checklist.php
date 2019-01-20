<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           QA_Checklist
 *
 * @wordpress-plugin
 * Plugin Name:       QA Checklist Plugin for WordPress
 * Plugin URI:        http://example.com/qa-checklist-uri/
 * Description:       Provides an easy way to document QA todo items across WordPress pages and posts.
 * Version:           1.0.0
 * Author:            Patrick Godbey
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       qa-checklist
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'QA_CHECKLIST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-qa-checklist-activator.php
 */
function activate_qa_checklist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-qa-checklist-activator.php';
	QA_Checklist_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-qa-checklist-deactivator.php
 */
function deactivate_qa_checklist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-qa-checklist-deactivator.php';
	QA_Checklist_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_qa_checklist' );
register_deactivation_hook( __FILE__, 'deactivate_qa_checklist' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-qa-checklist.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_qa_checklist() {

	$plugin = new QA_Checklist();
	$plugin->run();

}
run_qa_checklist();
