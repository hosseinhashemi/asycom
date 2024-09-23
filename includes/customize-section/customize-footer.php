<?php

/* Footer Background */
$wp_customize->add_setting('asycom_footer_bg_color', array(
    'default' => '#111111', 
    'sanitize_callback' => 'sanitize_hex_color'
    ));

$wp_customize->add_control(
        new WP_Customize_Color_Control(
                $wp_customize, 'asycom_footer_bg_color', array(
            'label' => __('Footer Backgound color', 'asycom'),
            'section' => 'asycom_footer_options',
            'settings' => 'asycom_footer_bg_color',
                ))
);



/* About Us - Main title */
$wp_customize->add_setting('asycom_copyright', array(
    'default' => __('Built using WordPress and Asycom Theme.', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field'
        )
);
$wp_customize->add_control('asycom_copyright', array(
    'label' => __('Copyright text', 'asycom'),
    'section' => 'asycom_footer_options',
    'type' => 'text',
    'description' => __('Main Title of About Us section', 'asycom')
        )
);
