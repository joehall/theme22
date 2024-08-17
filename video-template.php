<?php 
/**
* Template Name: Video Class Page
*
* @package WordPress
* @subpackage theme22
*
*/


get_header(); ?>
<div class="container">
  <div class="video-bg">
	<div class="row">
		<div class="col">
			<video width="1000" height="563" controls>
				<source src="https://hallanalysis-htmlforseo.s3.amazonaws.com/videos/Hi+Stranger.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video> 
		</div>
		<div class="col">
			<div class="list-group" style="height:563px;overflow:scroll;">
				<a href="#" class="list-group-item list-group-item-action active" aria-current="true">The current link item</a>
				<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
				<a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
								<a href="#" class="list-group-item list-group-item-action">A second link item</a>
				<a href="#" class="list-group-item list-group-item-action">A third link item</a>
				<a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
			</div>
		</div>
     </div>
  </div>
</div>
  <div id="content" class="row">
    <div class="col">
		
<h1><?php the_title(); ?></h1>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

  </div>
  

<?php 

get_footer();
?>
