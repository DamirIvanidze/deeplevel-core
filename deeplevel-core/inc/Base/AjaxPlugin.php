<?
/**
 * @package  DeepLevelPlugin
 */

namespace DLC\Base;

class AjaxPlugin {

    public function register()
    {
        add_action( 'wp_ajax_edit_setting_plugin', array( $this, 'edit_setting_plugin') );
    }

    public function edit_setting_plugin()
    {
        $error_verify_nonce = 'Data sent from a third-party page!';
        $error_authorized = 'You are not authorized!';

        $nonce = isset( $_POST['nonce'] ) ? $_POST['nonce'] : '';

        if (!wp_verify_nonce($nonce, 'edit_setting_plugin_nonce')) wp_send_json_error(array('message' => $error_verify_nonce));
        if (!is_user_logged_in()) wp_send_json_error(array('message' => $error_authorized));

        $input_name = isset( $_POST['input_name'] ) ? $_POST['input_name'] : '';
        $input_val = isset( $_POST['input_name'] ) ? $_POST['input_val'] : '';
        $output = get_option( 'deeplevel_core_settings' );


        $output[$input_name] = $input_val;
        update_option( 'deeplevel_core_settings', $output );

        wp_send_json_success(array('message' => 'Saved.'));
    }
}