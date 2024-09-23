<?php

$wp_customize->add_setting( 'asycom_hide_blog_section', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'asycom_hide_blog_section', array(
  'type' => 'checkbox',
  'section' => 'asycom_blog_options', // Add a default or your own section
  'label' => __( 'Hide Blog Section?','asycom' ),
  'description' => __( 'The Blog section will disappear if you enable this option' ,'asycom')
) );

/* Latest Post - Main title */
$wp_customize->add_setting('asycom_main_blog_title', array(
    'default' => __('LATEST POSTS', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_main_blog_title', array(
    'label' => __('Main Title', 'asycom'),
    'section' => 'asycom_blog_options',
    'type' => 'text',
    'description' => __('Main Title of Latest Post section', 'asycom')
        )
);


/* Latest Post - sub title */
$wp_customize->add_setting('asycom_blog_sub_title', array(
    'default' => __( 'Read More About Our Company', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
        )
);
$wp_customize->add_control('asycom_blog_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_blog_options',
    'type' => 'text',
    'description' => __('Sub Title of Latest Post section', 'asycom')
        )
);




$wp_customize->add_setting('asycom_blog_item_count', array(
    'default' => __( '4', 'asycom' ),
    'sanitize_callback' => 'absint'
        )
);
$wp_customize->add_control(
        'asycom_blog_item_count', array(
    'label' => __('How Many Post should be show?', 'asycom'),
    'section' => 'asycom_blog_options',
    'settings' => 'asycom_blog_item_count',
    'type' => 'number'
        )
);



/* Blog Us - Background  */
$wp_customize->add_setting('asycom_blog_bg', array(
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
                $wp_customize, 'asycom_blog_bg', array(
            'label' => __('Upload a backgound for blog section', 'asycom'),
            'section' => 'asycom_blog_options',
            'settings' => 'asycom_blog_bg'
                )
        )
);



/* Latest Post - btn text */
$wp_customize->add_setting('asycom_blog_btn_text', array(
    'default' => __( 'VIEW ALL POSTS', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_blog_btn_text', array(
    'label' => __('View All post button text.', 'asycom'),
    'section' => 'asycom_blog_options',
    'type' => 'text'
        )
);


/* Latest Post - BTN URL */
$wp_customize->add_setting('asycom_blog_btn_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_blog_btn_url', array(
    'label' => __('View All post button URL', 'asycom'),
    'section' => 'asycom_blog_options',
    'type' => 'text'
        )
);

