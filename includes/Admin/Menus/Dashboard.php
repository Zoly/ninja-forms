<?php if ( ! defined( 'ABSPATH' ) ) exit;

final class NF_Admin_Menus_Dashboard extends NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';

    public $menu_slug = 'nf-dashboard';

    public $priority = 13;

    public function __construct()
    {
        parent::__construct();
        add_action( 'wp_ajax_nf_get_forms', array( $this, 'get_forms' ) );
        add_action( 'wp_ajax_nf_get_new_form_templates', array( $this, 'get_new_form_templates' ) );
    }

    public function get_page_title()
    {
        return __( 'Dashboard', 'ninja-forms' );
    }

    public function get_capability()
    {
        return apply_filters( 'ninja_forms_admin_dashboard_capabilities', $this->capability );
    }

    public function display()
    {
        wp_enqueue_script( 'backbone-radio', Ninja_Forms::$url . 'assets/js/lib/backbone.radio.min.js', array( 'jquery', 'backbone' ) );
        wp_enqueue_script( 'backbone-marionette-3', Ninja_Forms::$url . 'assets/js/lib/backbone.marionette3.min.js', array( 'jquery', 'backbone' ) );
        wp_enqueue_script( 'nf-dashboard', Ninja_Forms::$url . 'assets/js/min/dashboard.min.js', array( 'backbone-radio', 'backbone-marionette-3' ) );
        wp_enqueue_style( 'nf-dashboard', Ninja_Forms::$url . 'assets/css/dashboard.min.css' );
        Ninja_Forms::template( 'admin-menu-dashboard.html.php' );
        
    }
    
    public function get_forms() {
        $db_forms_controller = new NF_Database_FormsController();
        $forms_json = $db_forms_controller->getFormsData();
        echo( $forms_json );
        die();
    }

    public function get_new_form_templates() {
        $templates = Ninja_Forms()->config( 'NewFormTemplates' );
        die( json_encode( $templates ) );
    }

} // End Class NF_Admin_Menus_Dashboard
