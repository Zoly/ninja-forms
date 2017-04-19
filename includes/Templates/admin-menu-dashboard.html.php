<!-- Dashboard Wrap -->
<div class="wrap">
    <div id="ninja-forms-dashboard"></div>
</div>



<!-- Auth Notice -->
<script id="tmpl-nf-auth-notice" type="text/template">
    [AUTH GOES HERE]
    <div id="auth-notice"></div>
</script>

<!-- Navigation Template -->
<script id="tmpl-nf-dashboard" type="text/template">
    <h1>Ninja Forms Dashboard</h1>
    <div class="notices"></div>
    <nav>
        <ul>
            <li class="widgets">Forms</li>
            <li class="apps">Apps</li>
            <li class="memberships">Membership</li>
        </ul>
    </nav>
    <div class="content"></div>
</script>

<!-- Content Template -->
<script id="tmpl-nf-content" type="text/template">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cupiditate ducimus fugit illo itaque maxime nihil perferendis praesentium voluptates. Aperiam culpa delectus distinctio illo ipsum officia, officiis pariatur quasi.</p>
</script>

<!-- Form Widget -->
<script id="tmpl-nf-widget-forms" type="text/template">
    <header>
        <div class="action">
            <button class="add"><?php _e( 'Add New', 'ninja-forms' ); ?></button>
            <button class="cancel"><?php _e( 'Cancel', 'ninja-forms' ); ?></button>
        </div>
        <div class="filter">
            <input type="text" placeholder="<?php _e( 'Search Forms', 'ninja-forms' ); ?>">
        </div>
    </header>
    <main class="content"></main>
    <footer>
        <div class="action2">
            <button class="more"><?php _e( 'More', 'ninja-forms' ); ?></button>
            <button class="less"><?php _e( 'Less', 'ninja-forms' ); ?></button>
        </div>
    </footer>
</script>

<!-- Widget Area Template -->
<script id="tmpl-nf-widgets" type="text/template">
    <div class="widget widget-forms"></div>
</script>

<!-- Forms Template -->
<script id="tmpl-nf-forms-template" type="text/template">
</script>

<!-- Widget Forms Table -->
<script id="tmpl-nf-widget-forms-table" type="text/template">
    <table>
        <thead>
            <tr>
                <th><?php _e( 'Title', 'ninja-forms' ); ?></th>
                <th><?php _e( 'Shortcode', 'ninja-forms' ); ?></th>
                <th><?php _e( 'Date Created', 'ninja-forms' ); ?></th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</script>

<script id="tmpl-nf-widget-forms-table-row" type="text/template">
    <tr>
        <td>{{{ data.title }}}</td>
        <td>{{{ data.shortcode }}}</td>
        <td>{{{ data.date-created }}}</td>
    </tr>
</script>

<!-- Apps Content -->
<script id="tmpl-nf-apps" type="text/template">
    <!-- TODO: Create static template -->
    [APPS HERE]
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipisci aut dolor doloribus ducimus expedita fuga itaque maiores mollitia neque nostrum, nulla odit praesentium quaerat reiciendis repellat sint velit veniam!</p>
</script>

<!-- Membership Content -->
<script id="tmpl-nf-memberships" type="text/template">
    <!-- TODO: Create static template -->
    [MEMBERSHIPS HERE]
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dolore illum molestiae quis reprehenderit sequi. Commodi consequatur doloremque itaque obcaecati odit officia optio. Autem ducimus excepturi iusto minima molestias provident.</p>
</script>
