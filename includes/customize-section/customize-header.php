<?php

/* Header */
$wp_customize->add_setting('asycom_header_alignment', array(
    'default' => 'left',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
        )
);



$wp_customize->add_control('asycom_header_alignment', array(
    'type' => 'radio',
    'section' => 'asycom_header_options', // Add a default or your own section
    'label' => __('Select Header Logo / Navigation Alignment and header background color', 'asycom'),
    'description' => __('Header Alignment', 'asycom'),
    'choices' => array(
        'left' => __('Left', 'asycom'),
        'center' => __('Center', 'asycom'),
        'right' => __('Right', 'asycom'),
    ),
));



// Alpha Color Picker Test Setting
$wp_customize->add_setting(
        'asycom_header_background_color',
        array(
            'default' => 'rgba(255,255,255,0.7)',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'asycom_sanitize_rgba',
            'transport' => 'postMessage'
        )
);

// Alpha Color Picker Test Control
$wp_customize->add_control(
        new Asycom_Alpha_Color_Control(
                $wp_customize,
                'asycom_header_background_color',
                array(
            'label' => __('Header Background Color', 'asycom'),
            'description' => __('Write the Skill title like Photshop or HTML or Happy customers', 'asycom'),
            'section' => 'asycom_header_options',
            'settings' => 'asycom_header_background_color',
            'palette' => array(
                '#3FADD7',
                'rgba(0,0,0,0.5)',
                '#666666',
                '#F5f5f5',
                '#333333',
                'rgba(255,255,255,0.5)',
                '#2B4267'
            )
                )
        )
);



/* Navigation - Main Color Normal State  */
$wp_customize->add_setting('asycom_header_nav_color', array(
    'default' => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Color_Control(
                $wp_customize, 'asycom_header_nav_color', array(
            'label' => __("Menu items' color (Normal State)", 'asycom'),
            'section' => 'asycom_header_options',
            'settings' => 'asycom_header_nav_color',
                ))
);


/* Navigation - Hover Color Normal State  */
$wp_customize->add_setting('asycom_header_nav_hover_color', array(
    'default' => '#e91e63',
    'sanitize_callback' => 'sanitize_hex_color'
    ));
$wp_customize->add_control(
        new WP_Customize_Color_Control(
                $wp_customize, 'asycom_header_nav__hover_color', array(
            'label' => __("Menu items' color on Hover State)", 'asycom'),
            'section' => 'asycom_header_options',
            'settings' => 'asycom_header_nav__hover_color',
                ))
);
