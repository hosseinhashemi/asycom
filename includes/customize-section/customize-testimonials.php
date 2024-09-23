<?php

$wp_customize->add_setting('asycom_hide_testimonial_section', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('asycom_hide_testimonial_section', array(
    'type' => 'checkbox',
    'section' => 'asycom_testimonial_options', // Add a default or your own section
    'label' => __('Hide Testimonial Section?', 'asycom'),
    'description' => __('The Testimonial section will disappear if you enable this option', 'asycom')
));


/* Testimonilal - Main title */
$wp_customize->add_setting('asycom_main_testimonial_title', array(
    'default' => __('TESTIMONIALS', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_main_testimonial_title', array(
    'label' => __('Main Title', 'asycom'),
    'section' => 'asycom_testimonial_options',
    'type' => 'text',
    'description' => __('Main Title of Testimonilal section', 'asycom')
        )
);



/* Testimonilal - sub title */
$wp_customize->add_setting('asycom_testimonial_sub_title', array(
    'default' => __( 'Read More About Our Company', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_testimonial_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_testimonial_options',
    'type' => 'text',
    'description' => __('Sub Title of Testimonilal section', 'asycom')
        )
);



$wp_customize->add_setting('asycom_testimonials_page_1', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_testimonials_page_1', array(
    'label' => __('Select a page as testimonial item 1', 'asycom'),
    'section' => 'asycom_testimonial_options',
    'settings' => 'asycom_testimonials_page_1',
) ) );


$wp_customize->add_setting('asycom_testimonials_page_2', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_testimonials_page_2', array(
    'label' => __('Select a page as testimonial item 3', 'asycom'),
    'section' => 'asycom_testimonial_options',
    'settings' => 'asycom_testimonials_page_2',
) ) );


$wp_customize->add_setting('asycom_testimonials_page_3', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_testimonials_page_3', array(
    'label' => __('Select a page as testimonial item 3', 'asycom'),
    'section' => 'asycom_testimonial_options',
    'settings' => 'asycom_testimonials_page_3',
) ) );
