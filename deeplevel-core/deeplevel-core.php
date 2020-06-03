<?
/**
 * @package  DeepLevelPlugin
 */


/**
* Plugin Name: DeepLevel Core
* Plugin URI:
* Description: Plugin that adds all things needed by DeepLevel Theme
* Version: 1.0.0
* Author: damir.ivanidze
* Author URI: https://bitbybit.su
* License: GPLv2 or later
* Text Domain: alecaddd-plugin
*/


/*
DeepLevel Core is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

DeepLevel Core is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with DeepLevel Core.
*/

/**
 * If this file is called firectly, abort!!!
 */
defined( 'ABSPATH' ) or die( 'Hey! What are you doing here? You silly human!' );


/**
 * Require once the Composer Autoload
 */
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}



/**
 * The code that runs during plugin activation
 */
function activate_deeplevel_core() {
    DLC\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_deeplevel_core' );


/**
 * The code that runs during plugin deactivation
 */
function deactivate_deeplevel_core() {
    DLC\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_deeplevel_core' );


/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'DLC\\InitPlugin' ) ) {
    DLC\InitPlugin::register_services();
}