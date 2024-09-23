<?php

$wp_customize->add_setting( 'asycom_hide_cta_section', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'asycom_hide_cta_section', array(
  'type' => 'checkbox',
  'section' => 'asycom_cta_options', // Add a default or your own section
  'label' => __( 'Hide Call to Action Section?','asycom' ),
  'description' => __( 'The Call to Action section will disappear if you enable this option' ,'asycom')
) );


/* Call To action - Page  */
$wp_customize->add_setting('asycom_cta_page', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_cta_page', array(
    'label' => __('Select a page as Call To Action. We use the page title. page excerpt and permalink', 'asycom'),
    'section' => 'asycom_cta_options',
    'settings' => 'asycom_cta_page',
) ) );


/* Call To Action - Button text */
$wp_customize->add_setting('asycom_cta_btn_text', array(
    'default' => __( 'Learn More', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_cta_btn_text', array(
    'label' => __('Call to Action Button Text', 'asycom'),
    'section' => 'asycom_cta_options',
    'type' => 'text'
        )
);


/* Call To action - Background  */
$wp_customize->add_setting('asycom_cta_bg', array(
    'default' => get_template_directory_uri() . '/images' . '/bg-02.jpg', 
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
                $wp_customize, 'asycom_cta_bg', array(
            'label' => __('Upload a backgound', 'asycom'),
            'section' => 'asycom_cta_options',
            'settings' => 'asycom_cta_bg'
                )
        )
);

/* Call to Action - Background Color overlay */
$wp_customize->add_setting('asycom_cta_over_bg_color', array(
    'default' => 'rgb(36, 3, 67)', 
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Color_Control(
                $wp_customize, 'asycom_cta_over_bg_color', array(
            'label' => __('About Us Backgound color overlay', 'asycom'),
            'section' => 'asycom_cta_options',
            'settings' => 'asycom_cta_over_bg_color',
                ))
);






