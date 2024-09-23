<?php

$wp_customize->add_setting('asycom_hide_services_section', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('asycom_hide_services_section', array(
    'type' => 'checkbox',
    'section' => 'asycom_services_options', // Add a default or your own section
    'label' => __('Hide Services Section?', 'asycom'),
    'description' => __('The Services section will disappear if you enable this option', 'asycom')
));


/* Services - Main title */
$wp_customize->add_setting('asycom_main_services_title', array(
    'default' => __('SERVICES', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_main_services_title', array(
    'label' => __('Main Title', 'asycom'),
    'section' => 'asycom_services_options',
    'type' => 'text',
    'description' => __('Main Title of Services section', 'asycom')
        )
);


/* Services - sub title */
$wp_customize->add_setting('asycom_services_sub_title', array(
    'default' => __( 'WE ARE PROUD OF WHAT WE HAVE DONE AND CURIOUS OF WHAT CAN BE DONE', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_services_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_services_options',
    'type' => 'text',
    'description' => __('Sub Title of Services section', 'asycom')
        )
);


$wp_customize->add_setting('asycom_services_page_1', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_services_page_1', array(
    'label' => __('Select a page as Service item 1', 'asycom'),
    'section' => 'asycom_services_options',
    'settings' => 'asycom_services_page_1',
) ) );

$wp_customize->add_setting('asycom_services_page_2', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_services_page_2', array(
    'label' => __('Select a page as Service item 2', 'asycom'),
    'section' => 'asycom_services_options',
    'settings' => 'asycom_services_page_2',
) ) );


$wp_customize->add_setting('asycom_services_page_3', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_services_page_3', array(
    'label' => __('Select a page as Service item 3', 'asycom'),
    'section' => 'asycom_services_options',
    'settings' => 'asycom_services_page_3',
) ) );





