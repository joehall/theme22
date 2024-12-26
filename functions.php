<?php

include 'inc/widget-areas.php';
include 'inc/wp_bootstrap_navwalker.php';
include 'inc/breadcrumbs.php';
include 'inc/customizer.php';

register_nav_menu('main-menu', 'Main menu');


add_theme_support( 'post-thumbnails' );

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

}


add_filter ('get_the_excerpt','lead_filter_excerpt');

function lead_filter_excerpt ($post_excerpt) {
  $post_excerpt = '<p class="lead">' . $post_excerpt . '</p>';
  return $post_excerpt;
  }

 add_filter( 'the_author_posts_link', function( $link )
{
    return str_replace( 'rel="author"', 'rel="author" itemprop="author" itemscope itemtype="https://schema.org/Person"', $link );
});


?>
