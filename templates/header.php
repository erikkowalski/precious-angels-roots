<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
 <div class="grad">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"  href="<?php echo esc_url(home_url('/')); ?>"><img  src="<?php bloginfo('template_url'); ?>/assets/img/logo-sm.gif"></a>
    </div>
<p class="visible-sm header-number"> phone (401)-780-8885</p>
    <nav class="collapse navbar-collapse" role="navigation">

      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
  </div>
</header>
