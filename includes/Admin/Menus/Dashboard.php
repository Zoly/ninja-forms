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
            <nav>
                <ul>
                    <li class="widgets">Forms</li>
                    <li class="apps">Apps</li>
                    <li class="memberships">Membership</li>
                </ul>
            </nav>
            <div class="content"></div>
        </script>
        <script id="tmpl-nf-content" type="text/template">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cupiditate ducimus fugit illo itaque maxime nihil perferendis praesentium voluptates. Aperiam culpa delectus distinctio illo ipsum officia, officiis pariatur quasi.</p>
        </script>
        <script id="tmpl-nf-widget-forms" type="text/template">
            [FORMS WIDGET]
        </script>
        <script id="tmpl-nf-widgets" type="text/template">
            <div class="widget-forms"></div>
        </script>
        <script id="tmpl-nf-apps" type="text/template">
            [APPS HERE]
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipisci aut dolor doloribus ducimus expedita fuga itaque maiores mollitia neque nostrum, nulla odit praesentium quaerat reiciendis repellat sint velit veniam!</p>
        </script>
        <script id="tmpl-nf-memberships" type="text/template">
            [MEMBERSHIPS HERE]
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dolore illum molestiae quis reprehenderit sequi. Commodi consequatur doloremque itaque obcaecati odit officia optio. Autem ducimus excepturi iusto minima molestias provident.</p>
        </script>
        <?php
    }

} // End Class NF_Admin_Menus_Dashboard
