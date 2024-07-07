<?php

include 'inc/widget-areas.php';
include 'inc/wp_bootstrap_navwalker.php';

register_nav_menu('main-menu', 'Main menu');




// Register style sheets and scripts.
add_action( 'wp_enqueue_scripts', 'register_theme_styles' );
add_action( 'wp_enqueue_scripts', 'register_theme_scripts' );


function register_theme_styles() {
    wp_register_style( 'bootstrapstylesheet', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrapstylesheet' );
}


function register_theme_scripts() {
	$args = array('strategy'  => 'defer','in_footer'  => true);
    wp_enqueue_script( 'bootstrapstylescripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', $args);
    ##wp_enqueue_style( 'bootstrapstylescripts' );
}




?>
