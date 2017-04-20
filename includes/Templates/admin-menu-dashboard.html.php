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

<!-- Widget Forms Filter -->
<script id="tmpl-nf-widget-forms-filter" type="text/template">
    <input type="text" placeholder="<?php _e( 'Search Forms', 'ninja-forms' ); ?>">
</script>

<!-- Widget Forms Collection -->
<script id="tmpl-nf-widget-forms-layout" type="text/template">
    <header>
        <div><?php _e( 'Title', 'ninja-forms' ); ?></div>
        <div><?php _e( 'Shortcode', 'ninja-forms' ); ?></div>
        <div><?php _e( 'Date Created', 'ninja-forms' ); ?></div>
    </header>
    <main class="content">
        <?php _e( 'Loading Forms...', 'ninja-forms' ); ?>
    </main>
    <footer></footer>
</script>
<script id="tmpl-nf-widget-forms-model" type="text/template">
    <main>
        <div>
            <span class="title">
                <a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">{{{ data.title }}}</a>
            </span>
        </div>
        <div>{{{ data.shortcode }}}</div>
        <div>{{{ data.created_at }}}</div>
    </main>
    <footer>
        <ul>
            <li><a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">Edit</a></li>
            <li><a href="#" class="delete">Delete</a></li>
            <li><a href="#">Duplicate</a></li>
            <li><a href="<?php print( get_home_url() ); ?>/?nf_preview_form={{{ data.id }}}" target="_blank">Preview Form</a></li>
            <li><a href="edit.php?post_status=all&post_type=nf_sub&form_id={{{ data.id }}}" target="_blank">View Submissions</a></li>
        </ul>
    </footer>
</script>
<script id="tmpl-nf-widget-forms-empty" type="text/template">
    <div><?php _e( 'No Forms', 'ninja-forms' ); ?></div>
</script>

<!-- Widget Forms Templates -->
<script id="tmpl-nf-widget-forms-template" type="text/template">
    <div class="template">
        <a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">
            <strong class="title">{{{ data.title }}}</strong>
            <div class="desc">{{{ data.desc }}}</div>
        </a>
    </div>
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