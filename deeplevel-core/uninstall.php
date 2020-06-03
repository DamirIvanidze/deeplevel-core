<?
/**
 * @package  DeepLevelPlugin
 */


/**
 * If uninstall.php is not called by WordPress, die
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}


$option_name = 'deeplevel_core_settings';

delete_option( $option_name );