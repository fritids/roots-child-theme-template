<?php

/* 
    Grabbing certain styles and scripts from roots folder so that we don't have to duplicate the files into our child themes directory -
    Of the files included with roots, the only ones we should need in our child theme directory are css/app.css and js/main.js
    If you want to further modify functionality of roots, just copy template files into child theme directory and they will trump the originals. 
*/

function roots_child_scripts() {
  wp_enqueue_style('roots_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css', false, null);

  if (current_theme_supports('bootstrap-responsive')) {
    wp_enqueue_style('roots_bootstrap_responsive_style', get_template_directory_uri() . '/css/bootstrap-responsive.css', array('roots_bootstrap_style'), null);
  }

  // If you're not using Bootstrap, include H5BP's main.css:
  // wp_enqueue_style('roots_style', get_template_directory_uri() . '/css/main.css', false, null);

  wp_enqueue_style('roots_child_app_style', get_stylesheet_directory_uri() . '/css/app.css', false, null);

  if (is_child_theme()) {
    wp_enqueue_style('roots_child_main_style', get_stylesheet_uri());

    // add some web fonts here if you'd like
    // wp_enqueue_style('gfont_monoton', 'http://fonts.googleapis.com/css?family=Droid+Sans', false, null);
  }

  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', get_template_directory_uri() . '/js/plugins.js', false, null, false);
  wp_register_script('roots_child_main', get_stylesheet_directory_uri() . '/js/main.js', false, null, false);
  
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_child_main');
}

add_action('wp_enqueue_scripts', 'roots_child_scripts', 100);
