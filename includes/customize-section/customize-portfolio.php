<?php

$wp_customize->add_setting( 'asycom_hide_portfolio_section', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'asycom_hide_portfolio_section', array(
  'type' => 'checkbox',
  'section' => 'asycom_portfolio_options', // Add a default or your own section
  'label' => __( 'Hide Blog Section?','asycom' ),
  'description' => __( 'The Blog section will disappear if you enable this option' ,'asycom')
) );


/* PORTFOLIO - Main title */
$wp_customize->add_setting('asycom_main_portfolio_title', array(
    'default' => __('PORTFOLIO', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_main_portfolio_title', array(
    'label' => __('Main Title', 'asycom'),
    'section' => 'asycom_portfolio_options',
    'type' => 'text',
    'description' => __('Main Title of PORTFOLIO section', 'asycom')
        )
);



/* Portfolio - sub title */
$wp_customize->add_setting('asycom_portfolio_sub_title', array(
    'default' => __( 'Check our latests works', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
        )
);
$wp_customize->add_control('asycom_portfolio_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_portfolio_options',
    'type' => 'text',
    'description' => __('Sub Title of PORTFOLIO section', 'asycom')
        )
);



$wp_customize->add_setting('asycom_portfolio_cat', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control( new ASYCOM_Taxonomy_Dropdown_Custom_Control( $wp_customize, 'asycom_portfolio_cat', array(
    'label' => __('Select a Portfolio category as your portfolios', 'asycom'),
    'section' => 'asycom_portfolio_options',
    'settings' => 'asycom_portfolio_cat'
) ) );




$wp_customize->add_setting('asycom_portfolio_item_count', array(
    'default' => '4',
    'sanitize_callback' => 'absint'
        )
);
$wp_customize->add_control(
        'asycom_portfolio_item_count', array(
    'label' => __('How Many Post should be show?', 'asycom'),
    'section' => 'asycom_portfolio_options',
    'settings' => 'asycom_portfolio_item_count',
    'type' => 'number'
        )
);





/* Blog Us - Background  */
$wp_customize->add_setting('asycom_portfolio_bg', array( 
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
                $wp_customize, 'asycom_portfolio_bg', array(
            'label' => __('Upload a backgound for blog section', 'asycom'),
            'section' => 'asycom_portfolio_options',
            'settings' => 'asycom_portfolio_bg'
                )
        )
);



/* PORTFOLIO - btn text */
$wp_customize->add_setting('asycom_portfolio_btn_text', array(
    'default' => __( 'VIEW ALL POSTS', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_portfolio_btn_text', array(
    'label' => __('View All Portfolio button text.', 'asycom'),
    'section' => 'asycom_portfolio_options',
    'type' => 'text'
        )
);


/* PORTFOLIO - BTN URL */
$wp_customize->add_setting('asycom_portfolio_btn_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_portfolio_btn_url', array(
    'label' => __('View All Portfolio button URL', 'asycom'),
    'section' => 'asycom_portfolio_options',
    'type' => 'text'
        )
);







