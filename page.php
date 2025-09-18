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
    <article class="col-sm-8">
      <?php get_template_part( 'template-parts/content', 'page' ); ?>
    </article>
<?php get_sidebar(); ?>
  </div>

<?php

get_footer();
