<!DOCTYPE HTML>
<!--
  Dopetrope by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script type='text/javascript' > 
      window.theme_path = "<?php bloginfo('template_directory'); ?>"; 
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.dropotron.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/skel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/skel-layers.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skel.css" />
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-desktop.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body class="homepage">

    <!-- Header -->
      <div id="header-wrapper">
        <div id="header">
          
          <!-- Logo -->
            <h1><a href="index.html">Dopetrope</a></h1>
          
          <!-- Nav -->
          <?php wp_nav_menu( array( 'container_id' => 'nav', 'theme_location' => 'header-menu' ) ); ?>