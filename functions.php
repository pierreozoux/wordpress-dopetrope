<?php
  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  
  add_theme_support( 'post-thumbnails' );
?>