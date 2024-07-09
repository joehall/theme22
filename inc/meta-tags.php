<?php

function meta_description() {
    global $post;
    if ( is_singular() ) {
		
        $postwotags = strip_tags( $post->post_content );
        $postwobrks = str_replace( array("\n", "\r", "\t"), ' ', $postwotags );
        $metadescription = mb_substr( $postwobrks, 0, 300, 'utf8' );
        echo '<meta name="description" content="'.$metadescription.'" />' . "\n";
    }
    if ( is_home() ) {
        echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
    }
    if ( is_category() ) {
        $des_cat = strip_tags(category_description());
        echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
    }
}
add_action( 'wp_head', 'meta_description');

function canonical_tag() {

echo '<link rel="canonical" href="'.esc_url( wp_get_canonical_url() ).'" />';

}
add_action( 'wp_head', 'canonical_tag');



add_filter( 'wp_robots', function( $robots ) {
	$robots['unavailable_after'] = false; //"2028-11-30";
	$robots['noindex'] = false;
	$robots['nofollow'] = false;
	$robots['max-image-preview'] = false;
	$robots['noarchive'] = false;
	$robots['nosnippet'] = false;
	$robots['max-snippet'] = false; //"-1";
	$robots['max-image-preview'] = false; //"large";
	$robots['max-video-preview'] = false; //"-1";
	$robots['notranslate'] = false;
	$robots['noimageindex'] = false;
	
	return $robots;
} );

add_theme_support( 'title-tag' );

remove_action( 'wp_head', 'wp_generator' );

?>
