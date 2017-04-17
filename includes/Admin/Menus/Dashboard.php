<?php if ( ! defined( 'ABSPATH' ) ) exit;

final class NF_Admin_Menus_Dashboard extends NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';

    public $menu_slug = 'nf-dashboard';

    public $priority = 13;

    public function __construct()
    {
        parent::__construct();
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

        // TODO: Move to a template file.
        ?>
        <div class="wrap">
            <div id="ninja-forms-dashboard"></div>
        </div>
        <script id="tmpl-nf-dashboard" type="text/template">
            <h1>Ninja Forms Dashboard</h1>
        </script>
        <?php
    }

} // End Class NF_Admin_Menus_Dashboard
