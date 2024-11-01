<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *

 * @link              http://trepidation.co.uk
 * @since             1.0.0
 * @package           trepi_mobile_head
 *

 * @wordpress-plugin

 * Plugin Name:       Trepidation Advanced Mobile Navbar Plugin
 * Plugin URI:        http://trepidation.co.uk/free-plugins
 * Description:       A plugin by trepidation.co.uk for creating an advanced mobile navbar.
 * Version:           1.1.7
 * Author:            Colin Gell
 * Author URI:        http://trepidation.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Mobile-Head-for-Wordpress
 * Domain Path:       /languages

 */



// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {

	die;

}



/**

 * The code that runs during plugin activation.

 * This action is documented in includes/class-trepi-mobile-head-activator.php

 */

function activate_trepi_mobile_head() {

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-trepi-mobile-head-activator.php';

	trepi_mobile_head_Activator::activate();

}



/**

 * The code that runs during plugin deactivation.

 * This action is documented in includes/class-trepi-mobile-head-deactivator.php

 */

function deactivate_trepi_mobile_head() {

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-trepi-mobile-head-deactivator.php';

	trepi_mobile_head_Deactivator::deactivate();

}



register_activation_hook( __FILE__, 'activate_trepi_mobile_head' );

register_deactivation_hook( __FILE__, 'deactivate_trepi_mobile_head' );



/**

 * The core plugin class that is used to define internationalization,

 * admin-specific hooks, and public-facing site hooks.

 */

require plugin_dir_path( __FILE__ ) . 'includes/class-trepi-mobile-head.php';



/**

 * Begins execution of the plugin.

 *

 * Since everything within the plugin is registered via hooks,

 * then kicking off the plugin from this point in the file does

 * not affect the page life cycle.

 *

 * @since    1.0.0

 */

function run_trepi_mobile_head() {

	$plugin = new trepi_mobile_head();

	$plugin->run();

}
run_trepi_mobile_head();