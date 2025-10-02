<?php

add_action('customize_register','theme22_customize_register');
function theme22_customize_register( $wp_customize ) {



  $wp_customize->add_section( 'theme22_colors' , array(
      'title'      => 'Colors',
      'priority'   => 20,
  ) );

  $wp_customize->add_setting( 'main_color_display' , array(
      'default'     => '#5e007a',
      'transport'   => 'refresh',
  ) );


  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color_display', array(
      'label' => 'Main color:',
      'section' => 'theme22_colors',
      'settings' => 'main_color_display',
    ),
  ) );

  $wp_customize->add_setting( 'homebanerText_color_display' , array(
      'default'     => '#000000',
      'transport'   => 'refresh',
  ) );


  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homebanerText_color_display', array(
      'label' => 'Homepage banner text color:',
      'section' => 'theme22_colors',
      'settings' => 'homebanerText_color_display',
    ),
  ) );


  $wp_customize->add_setting( 'accent_color_display' , array(
      'default'     => '#000000',
      'transport'   => 'refresh',
  ) );


  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color_display', array(
      'label' => 'Accent color:',
      'section' => 'theme22_colors',
      'settings' => 'accent_color_display',
    ),
  ) );



  $wp_customize->add_setting( 'background_color_display' , array(
      'default'     => '#000000',
      'transport'   => 'refresh',
  ) );


  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color_display', array(
      'label' => 'Background color:',
      'section' => 'theme22_colors',
      'settings' => 'background_color_display',
    ),
  ) );


###
  $wp_customize->add_section( 'speed_button' , array(
      'title'      => 'Instant.Page',
      'priority'   => 20,
  ) );

  $wp_customize->add_setting( 'speed_button_display' , array(
      'default'     => true,
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'speed_button_display', array(
  'label' => 'Instant.page Setting',
  'section' => 'speed_button',
  'settings' => 'speed_button_display',
  'type' => 'radio',
  'choices' => array(
    'on' => 'On',
    'off' => 'Off',
  ),
) );


//custom logo

  $wp_customize->add_section( 'custom_logo' , array(
      'title'      => 'Custom Logo',
      'priority'   => 20,
  ) );

    $wp_customize->add_setting( 'custom_logo_display', array(
        //'default' => __( '', 'theme22' ),
        'sanitize_callback' => 'esc_url',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo_display', array(
        'label'    => __( 'Upload Logo (replaces text)', 'theme22' ),
        'section'  => 'custom_logo',
        'settings' => 'custom_logo_display',
    ) ) );


}

## add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
			 body { background-color: <?php echo get_theme_mod('background_color_display', '#ffffff'); ?>!important;}
             a, .nav-link { color: <?php echo get_theme_mod('main_color_display', '#5e007a'); ?>; }
             .bg-body-tertiary { background-color: <?php echo get_theme_mod('main_color_display', '#5e007a'); ?>!important;}
             .home h1, .home .bg-body-tertiary { color: <?php echo get_theme_mod('homebanerText_color_display', '#ffffff'); ?>; }
             .accent { background-color: <?php echo get_theme_mod('accent_color_display', '#dd9933'); ?>!important; }
         </style>
    <?php
}

?>
