<?php

$wp_customize->add_setting( 'asycom_hide_client_section', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'asycom_hide_client_section', array(
  'type' => 'checkbox',
  'section' => 'asycom_client_options', // Add a default or your own section
  'label' => __( 'Hide client Section?','asycom' ),
  'description' => __( 'The Client section will disappear if you enable this option' ,'asycom')
) );

/* Client - Main title */
$wp_customize->add_setting('asycom_main_client_title', array(
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_main_client_title', array(
    'section' => 'asycom_client_options',
    'type' => 'text',
    'description' => __('Main Title of Client section', 'asycom')
        )
);



/* Client - sub title */
$wp_customize->add_setting('asycom_client_sub_title', array(
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_client_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_client_options',
    'type' => 'text',
    'description' => __('Sub Title of Client section', 'asycom')
        )
);




/*
=====================================
 * 
 * Client Item 1
 * 
 ====================================
 */
for( $i=1; $i <= 6; $i++ ) {
    $setting_id = 'asycom_client_page_' . $i;
    $wp_customize->add_setting( $setting_id , array(
        'default' => '',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, $setting_id, array(
        // translators: %d Display label of client items.
        'label' => sprintf( __( 'Select a page as Client item %d', 'asycom' ), $i ),
        'section' => 'asycom_client_options',
        'settings' => $setting_id,
    ) ) );
    $setting_id = null;
}




