<?
/**
 * @package  DeepLevelPlugin
 */

namespace DLC\Base;

class EnqueuePlugin extends BaseControllerPlugin {

    public function register()
    {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue') );
    }

    public function enqueue()
    {
        wp_enqueue_style( 'admin-style', $this->plugin_url . 'assets/css/admin.style.min.css?'.date('ymdHis'), array(), null, 'all' );

        wp_enqueue_script( 'admin-script', $this->plugin_url . 'assets/js/admin.script.min.js?'.date('ymdHis'), array(), null, true );
        wp_localize_script('admin-script', 'ajax_var', admin_url('admin-ajax.php'));
    }
}