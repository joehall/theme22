<?php
/**
* Template Name: Full Width Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>

  <div class="row">
    <div class="col">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1 property="name"><?php the_title(); ?></h1>
<?php custom_breadcrumbs(); ?>
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>

<?php endwhile; ?>



<?php endif; ?>		
		
    </div>
  </div>

<?php

get_footer();
