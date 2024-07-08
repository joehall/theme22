<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme22
 */

get_header(); ?>

  <div class="row">
    <div class="col-sm-8">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1 property="name"><?php the_title(); ?></h1>
<?php custom_breadcrumbs(); ?>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>

<?php endwhile; ?>



<?php endif; ?>		
		
    </div>
<div class="col-sm-4">
<?php get_sidebar(); ?>
</div>
  </div>

<?php

get_footer();
