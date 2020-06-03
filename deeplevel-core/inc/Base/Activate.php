<?
/**
 * @package  DeepLevelPlugin
 */

namespace DLC\Base;

class Activate {
	public static function activate() {
		flush_rewrite_rules();

        $default = array();

        if( ! get_option( 'deeplevel_core_settings') ){
            update_option( 'deeplevel_core_settings', $default);
        }
	}
}