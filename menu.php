<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white px-0">
  <div class="container">
    <a class="navbar-brand" href="<?php echo get_site_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/LOGO_BV_27ANOS.gif" class="img-fluid" alt="" id="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
      aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
    ?>
  </div>
</nav>