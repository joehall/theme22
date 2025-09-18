<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content', 'head' ); ?>
<?php the_content(); ?>
<?php get_template_part( 'template-parts/content', 'footer' ); ?>
<?php endwhile; ?>
<?php endif; ?>
