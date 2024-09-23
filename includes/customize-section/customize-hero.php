<?php
//Hide hero Section
$wp_customize->add_setting('asycom_hide_hero_section', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('asycom_hide_hero_section', array(
    'type' => 'checkbox',
    'section' => 'asycom_hero_options', // Add a default or your own section
    'label' => __('Hide Hero Section?', 'asycom'),
    'description' => __('The Hero section will disappear if you enable this option', 'asycom')
));

//Set a page to show Title and excerpt as page title and short description.
$wp_customize->add_setting('asycom_hero_page', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_hero_page', array(
    'label' => __('Select a page as Home page Hero section', 'asycom'),
    'section' => 'asycom_hero_options',
    'settings' => 'asycom_hero_page',
) ) );

/* Hero - Background  */
$wp_customize->add_setting('asycom_hero_bg', array(
    'default' => get_template_directory_uri() . '/images' . '/bg-01.jpg',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
                $wp_customize, 'asycom_hero_bg', array(
            'label' => __('Upload a backgound', 'asycom'),
            'section' => 'asycom_hero_options',
            'settings' => 'asycom_hero_bg'
                )
        )
);

/* Hero - Button Text */
$wp_customize->add_setting('asycom_hero_btn_txt', array(
    'default' => __( 'Read More', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_hero_btn_txt', array(
    'label' => __('Button Text', 'asycom'),
    'section' => 'asycom_hero_options',
    'type' => 'text',
    'description' => __('Hero section button Text', 'asycom')
        )
);


/* Hero - Button Link/URL */
$wp_customize->add_setting('asycom_hero_btn_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_hero_btn_url', array(
    'label' => __('Hero section button Link(URL)', 'asycom'),
    'section' => 'asycom_hero_options',
    'type' => 'url'
        )
);
