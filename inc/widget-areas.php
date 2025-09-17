<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function main_widgets_init() {

	register_sidebar( array(
		'name'          => 'Main sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div class="container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Main Footer',
		'id'            => 'footer',
		'before_widget' => '<div class="col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'main_widgets_init' );
?>
