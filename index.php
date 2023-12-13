<?php get_header(); ?>

  <div class="row">
    <div class="col-sm-8">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<p class="lead">
  This is a lead paragraph. It stands out from regular paragraphs.
</p>

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
		
    </div>
<div class="col-sm-4">
<?php get_sidebar(); ?>
</div>
  </div>
  

<?php 

get_footer();
?>
