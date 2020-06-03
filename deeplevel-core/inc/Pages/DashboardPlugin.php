<?
/**
 * @package  DeepLevelPlugin
 */

namespace DLC\Pages;

use \DLC\Base\BaseControllerPlugin; // store variables
use \DLC\Api\SettingsApiPlugin; // add some admin pages and subpages in wp-admin menu

class DashboardPlugin extends BaseControllerPlugin
{
    public $settings; // for SettingsApiPlugin Class
    public $pages = array(); // array of admin pages
    public $subpages = array(); // array of admin subpages

    public function register()
    {
        $this->settings = new SettingsApiPlugin(); // initialize SettingsApiPlugin Class

        $this->setPages(); // add info about admin page into array

        $this->settings->addPages( $this->pages )->withSubPage( 'General' )->addSubPages( $this->subpages )->register();
    }

    public function setPages()
    {
        $this->pages = array(
            array(
                'page_title' => 'DeepLevel Core',
                'menu_title' => 'DeepLevel Core',
                'capability' => 'manage_options',
                'menu_slug' => 'deeplevel_core',
                'callback' => array( $this, 'adminDashboardTemplate' ),
                'icon_url' => 'dashicons-editor-customchar',
                'position' => 110
            )
        );
    }
}