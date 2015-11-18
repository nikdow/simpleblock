<?php

/* load CSS */
function simpleblock_scripts() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array(), '0.9' );
    wp_enqueue_style( 'google', 'https://fonts.googleapis.com/css?family=Quattrocento:400,700', array(), '0.9');
    if ( is_admin_bar_showing() )
        wp_enqueue_style( 'admin-header', get_template_directory_uri() . '/admin-style.css', array(), '0.9' ); 
}
add_action( 'wp_enqueue_scripts', 'simpleblock_scripts' );

/* register menus */
function simpleblock_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ) );
  register_nav_menu('footer-menu', __( 'Footer Menu' ) );
}
add_action( 'init', 'simpleblock_register_menu' );

add_theme_support( 'post-thumbnails' );

