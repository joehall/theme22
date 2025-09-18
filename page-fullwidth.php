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
    <article class="col">
      <?php get_template_part( 'template-parts/content', 'page' ); ?>
    </article>
  </div>

<?php

get_footer();
