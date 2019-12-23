<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

  $section = ( ! empty( $_GET['section'] ) ) ? $_GET['section'] : 'about';
  $links   = array(
    'quickstart'      => 'Quick Start',
    'documentation'   => 'Documentation',
    'support'         => 'Support',
    'hireus' => 'Hire Us',
    'relnotes'        => 'Release Notes',
  );

  $current_theme = wp_get_theme();
  $theme_name = $current_theme->get('Name');

?>
<div class="wrap about-wrap zy-wrap">

  <h1>Welcome to <?php echo $theme_name . ' Theme'; ?></h1>

  <p class="zytheme-about-text">You are awesome! Thanks for using our theme, <?php echo $theme_name;?> is now installed and ready to use!<Br> Get ready to build something beautiful :)</p>
  <div class="wp-badge zy-badge">v<?php echo PLUGIN_VERSION; ?></div>

  <h2 class="nav-tab-wrapper zy-nav-tab-wrapper wp-clearfix">
    <?php
      foreach( $links as $key => $link ) {

        $activate = ( $section === $key ) ? ' nav-tab-active' : '';

        echo '<a href="'. add_query_arg( array( 'page' => 'zytheme-dashboard', 'section' => $key ), admin_url( 'admin.php' ) ) .'" class="nav-tab'. $activate .'">'. $link .'</a>';

      }
    ?>
  </h2>
