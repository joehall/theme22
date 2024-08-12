<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
  </head>
  <body itemscope="" itemtype="https://schema.org/WebPage" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
   <div class="container">
    <div class="row">
		<div class="col">
			<a class="visually-hidden-focusable" href="#content">Skip to main content</a>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
		<div class="navbar-brand">
			<?php if ( get_theme_mod( 'custom_logo_display' ) ): ?>
				<a href="<?php echo esc_url( home_url( '/' )); ?>">
					<img src="<?php echo esc_url(get_theme_mod( 'custom_logo_display' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                </a>
            <?php else : ?>
                <a class="site-title" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>	
		</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul role="menubar" id="%1$s" class="nav justify-content-end %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
    </div>
</nav>
</div>
</div>
