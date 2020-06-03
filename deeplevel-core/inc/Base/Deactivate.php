<?
/**
 * @package  DeepLevelPlugin
 */

namespace DLC\Base;

class Deactivate {
	public static function deactivate() {
		flush_rewrite_rules();
	}
}