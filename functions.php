<?php

/* load CSS */
function simpleblock_scripts() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array(), '0.9' );
}
add_action( 'wp_enqueue_scripts', 'simpleblock_scripts' );

/* register menus */
function simpleblock_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'simpleblock_register_menu' );

