<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://complex.org.za
 * @since             1.0.0
 * @package           Property_Projects
 *
 * @wordpress-plugin
 * Plugin Name:       Property Projects
 * Plugin URI:        https://github.com/anthonyhorne/property-project
 * Description:       Manage property projects for community or property schemes.  Simple light-weight workflow.
 * Version:           1.0.0
 * Author:            Anthony Horne
 * Author URI:        https://complex.org.za
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       property-projects
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
define( 'PROPERTY_PROJECTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-property-projects-activator.php
 */
function activate_property_projects() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-property-projects-activator.php';
	Property_Projects_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-property-projects-deactivator.php
 */
function deactivate_property_projects() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-property-projects-deactivator.php';
	Property_Projects_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_property_projects' );
register_deactivation_hook( __FILE__, 'deactivate_property_projects' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-property-projects.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_property_projects() {

	$plugin = new Property_Projects();
	$plugin->run();

}
run_property_projects();
