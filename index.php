<?php get_header(); ?>

  <div id="content" class="row">
    <article class="col-sm-8">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<?php the_excerpt(); ?>

<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>

<?php endwhile; ?>

<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>

<?php else: ?>

<p>No posts found. :(</p>

<?php endif; ?>

    </article>

<?php get_sidebar(); ?>

  </div>


<?php

get_footer();
?>
