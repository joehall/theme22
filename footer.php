</main>
<footer class="footer container">
	<div class="row">
		<?php if ( is_active_sidebar( 'footer' ) ) : dynamic_sidebar( 'footer' );  endif; ?>
	</div>
</footer>




    <?php wp_footer(); ?>

    <?php if( get_theme_mod( 'speed_button_display', 'on' ) == 'on' ) : ?>
    <script src="//instant.page/5.2.0" type="module" integrity="sha384-jnZyxPjiipYXnSU0ygqeac2q7CVYMbh84q0uHVRRxEtvFPiQYbXWUorga2aqZJ0z"></script>
    <?php endif ?>

  </body>
</html>
