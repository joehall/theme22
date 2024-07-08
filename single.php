<?php get_header(); ?>

  <div id="content" class="row">
    <div class="col-sm-8">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="blog-post" itemscope itemtype="https://schema.org/BlogPosting" itemid="<?php the_permalink(); ?>">
<header>
	<h1 property="name" class="display-5 link-body-emphasis mb-1"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author_posts_link(); ?></p>
	<?php the_excerpt(); ?>
</header>	
<section itemprop="articleBody">
<?php the_content(); ?>
</section>
<footer>
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
</footer>
<?php else: ?>

<p>No posts found. :(</p>
</article>
<?php endif; ?>		
		
    </div>
<div class="col-sm-4">
<?php get_sidebar(); ?>
</div>
  </div>
  

<?php 

get_footer();
?>
