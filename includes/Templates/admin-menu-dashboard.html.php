<!--
  Application Root Element
  --------------------------------------------->
<div class="wrap">
    <div id="ninja-forms-dashboard"></div>
</div>

<!--
  Notices
  --------------------------------------------->
<!-- Auth Notice -->
<script id="tmpl-nf-auth-notice" type="text/template">
    [AUTH GOES HERE]
    <div id="auth-notice"></div>
</script>

<!--
  Navigation
  --------------------------------------------->
<script id="tmpl-nf-dashboard" type="text/template">
    <header class="topbar">
        <div class="app-title">
            <strong>Ninja Forms Dashboard</strong>
        </div>
    </header>
    <div class="notices"></div>
    <nav class="sections">
        <ul>
            <li class="widgets">Forms</li>
            <li class="apps">Apps</li>
            <li class="memberships">Membership</li>
        </ul>
    </nav>
    <main class="content"></main>
</script>

<!--
  Widgets Section
  --------------------------------------------->
<script id="tmpl-nf-widgets" type="text/template">
    <div class="widget widget-forms"></div>
</script>

<!--
  Widget - Forms
  --------------------------------------------->
<script id="tmpl-nf-widget-forms" type="text/template">
    <header>
        <div class="action">
            <button class="add"><?php _e( 'Add New', 'ninja-forms' ); ?></button>
            <button class="cancel"><?php _e( 'Cancel', 'ninja-forms' ); ?></button>
        </div>
        <div class="filter"></div>
    </header>
    <main class="content"></main>
    <footer>
        <div class="action2">
            <button class="more"><?php _e( 'More', 'ninja-forms' ); ?></button>
            <button class="less"><?php _e( 'Less', 'ninja-forms' ); ?></button>
        </div>
    </footer>
</script>
<script id="tmpl-nf-widget-forms-filter" type="text/template">
    <input type="text" placeholder="<?php _e( 'Search Forms', 'ninja-forms' ); ?>">
</script>
<script id="tmpl-nf-forms-template" type="text/template">
    <div class="template">
        <a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">
            <strong class="title">{{{ data.title }}}</strong>
            <div class="desc">{{{ data.desc }}}</div>
        </a>
    </div>
</script>
<script id="tmpl-nf-widget-forms-table" type="text/template">
    <table>
        <thead>
            <tr>
                <th><?php _e( 'Title', 'ninja-forms' ); ?></th>
                <th><?php _e( 'Shortcode', 'ninja-forms' ); ?></th>
                <th><?php _e( 'Date Created', 'ninja-forms' ); ?></th>
            </tr>
        </thead>
        <tbody class="content">

        </tbody>
    </table>
</script>
<script id="tmpl-nf-widget-forms-table-empty" type="text/template">
    <td colspan="3">Loading forms...</td>
</script>
<script id="tmpl-nf-widget-forms-table-row" type="text/template">
    <td>
        <span class="title">
            <a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">{{{ data.title }}}</a>
        </span>
        <ul>
            <li><a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">Edit</a></li>
            <li><a href="#">Delete</a></li>
            <li><a href="#">Duplicate</a></li>
            <li><a href="<?php print( get_home_url() ); ?>/?nf_preview_form={{{ data.id }}}">Preview Form</a></li>
            <li><a href="edit.php?post_status=all&post_type=nf_sub&form_id={{{ data.id }}}">View Submissions</a></li>
        </ul>
    </td>
    <td>{{{ data.shortcode }}}</td>
    <td>{{{ data.created_at }}}</td>
</script>


<!--
  Apps Section
  --------------------------------------------->
<script id="tmpl-nf-apps" type="text/template">
    <!-- TODO: Create static template -->
    [APPS HERE]
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipisci aut dolor doloribus ducimus expedita fuga itaque maiores mollitia neque nostrum, nulla odit praesentium quaerat reiciendis repellat sint velit veniam!</p>
</script>

<!--
  Memberships Section
  --------------------------------------------->
<script id="tmpl-nf-memberships" type="text/template">
    <!-- TODO: Create static template -->
    [MEMBERSHIPS HERE]
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dolore illum molestiae quis reprehenderit sequi. Commodi consequatur doloremque itaque obcaecati odit officia optio. Autem ducimus excepturi iusto minima molestias provident.</p>
</script>

<!--
  Misc.
  --------------------------------------------->

<!-- Content Template -->
<script id="tmpl-nf-content" type="text/template">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cupiditate ducimus fugit illo itaque maxime nihil perferendis praesentium voluptates. Aperiam culpa delectus distinctio illo ipsum officia, officiis pariatur quasi.</p>
</script>