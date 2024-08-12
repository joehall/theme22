<?php

add_action('customize_register','theme22_customize_register');
function theme22_customize_register( $wp_customize ) {
	
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

?>
