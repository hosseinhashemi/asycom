<?php

$wp_customize->add_setting('asycom_hide_social_section', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('asycom_hide_social_section', array(
    'type' => 'checkbox',
    'section' => 'asycom_social_options', 
    'label' => __('Hide Social Networks Section?','asycom'),
    'description' => __('The Social Networks section will disappear if you enable this option','asycom')
));


/* Social Networks - Background  */
$wp_customize->add_setting('asycom_social_bg', array('sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
                $wp_customize, 'asycom_social_bg', array(
            'label' => __('Upload a backgound', 'asycom'),
            'section' => 'asycom_social_options',
            'settings' => 'asycom_social_bg'
                )
        )
);

/* Social Networks - Background Color */
$wp_customize->add_setting('asycom_social_bg_color', array('default' => 'rgb(84,104,103)', 'sanitize_callback' => 'sanitize_hex_color'));
$wp_customize->add_control(
        new WP_Customize_Color_Control(
                $wp_customize, 'asycom_social_bg_color', array(
            'label' => __('Backgound color', 'asycom'),
            'section' => 'asycom_social_options',
            'settings' => 'asycom_social_bg_color',
                ))
);



/* Social - Main title */
$wp_customize->add_setting('asycom_main_social_title', array(
    'default' => __('Get In Touch', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_main_social_title', array(
    'label' => __('Social Section Main Title', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'text',
    'description' => __('Main Title of Social section', 'asycom')
        )
);



/* Social - sub title */
$wp_customize->add_setting('asycom_social_sub_title', array(
    'default' => __( 'Follow Us on Social Networks', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_social_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'text',
    'description' => __('Sub Title of Social section', 'asycom')
        )
);





$wp_customize->add_setting('asycom_social_cf_shortcode', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Latest_Post_Control( $wp_customize, 'asycom_social_cf_shortcode', array(
    'label' => __('Enter your Contact Form 7 shortcode ID', 'asycom'),
    'section' => 'asycom_social_options',
    'settings' => 'asycom_social_cf_shortcode',
    'type' => 'latest_post_dropdown'
) ) );





/*
=====================================
 * 
 * Social Item 1
 * 
 ====================================
 */


/* Social - Item 1 Link/URL */
$wp_customize->add_setting('asycom_social_item_url_1', array(
    'default' => 'http://www.facebook.com/Bardiaweb',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('asycom_social_item_url_1', array(
    'label' => __('Social Link(URL) 1', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'url'
        )
);


/* Social - Item 1 Logo */
$wp_customize->add_setting('asycom_social_item_logo_1', array('default' => get_template_directory_uri() . '/images' ."/icons/" . "facebook.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'asycom_social_item_logo_1', array(
    'label' => __('Upload The Social Network Logo 1', 'asycom'),
    'section' => 'asycom_social_options',
    'settings' => 'asycom_social_item_logo_1'
        )
        )
);




/* Social - Item 2 Link/URL */
$wp_customize->add_setting('asycom_social_item_url_2', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('asycom_social_item_url_2', array(
    'label' => __('Social Link(URL) 2', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'url'
        )
);


/* Social - Item 2 Logo */
$wp_customize->add_setting('asycom_social_item_logo_2', array('default' => get_template_directory_uri() . '/images' ."/icons/" . "twitter.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'asycom_social_item_logo_2', array(
    'label' => __('Upload The Social Network Logo 2', 'asycom'),
    'section' => 'asycom_social_options',
    'settings' => 'asycom_social_item_logo_2'
        )
        )
);





/* Social - Item 3 Link/URL */
$wp_customize->add_setting('asycom_social_item_url_3', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('asycom_social_item_url_3', array(
    'label' => __('Social Link(URL) 3', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'url'
        )
);


/* Social - Item 3 Logo */
$wp_customize->add_setting('asycom_social_item_logo_3', array('default' => get_template_directory_uri() . '/images' ."/icons/" . "youtube.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'asycom_social_item_logo_3', array(
    'label' => __('Upload The Social Network Logo 3', 'asycom'),
    'section' => 'asycom_social_options',
    'settings' => 'asycom_social_item_logo_3'
        )
        )
);






/* Social - Item 4 Link/URL */
$wp_customize->add_setting('asycom_social_item_url_4', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('asycom_social_item_url_4', array(
    'label' => __('Social Link(URL) 4', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'url'
        )
);


/* Social - Item 4 Logo */
$wp_customize->add_setting('asycom_social_item_logo_4', array(
    'default' => "",
    'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'asycom_social_item_logo_4', array(
    'label' => __('Upload The Social Network Logo 4', 'asycom'),
    'section' => 'asycom_social_options',
    'settings' => 'asycom_social_item_logo_4'
        )
        )
);





/* Social - Item 5 Link/URL */
$wp_customize->add_setting('asycom_social_item_url_5', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('asycom_social_item_url_5', array(
    'label' => __('Social Link(URL) 5', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'url'
        )
);


/* Social - Item 5 Logo */
$wp_customize->add_setting('asycom_social_item_logo_5', array(
    'default' => "",
    'sanitize_callback' => 'esc_url_raw'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'asycom_social_item_logo_5', array(
    'label' => __('Upload The Social Network Logo 5', 'asycom'),
    'section' => 'asycom_social_options',
    'settings' => 'asycom_social_item_logo_5'
        )
        )
);



/* Social - Item 6 Link/URL */
$wp_customize->add_setting('asycom_social_item_url_6', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('asycom_social_item_url_6', array(
    'label' => __('Social Link(URL) 6', 'asycom'),
    'section' => 'asycom_social_options',
    'type' => 'url'
        )
);


/* Social - Item 6 Logo */
$wp_customize->add_setting('asycom_social_item_logo_6', array(
    'default' => "",
    'sanitize_callback' => 'esc_url_raw'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'asycom_social_item_logo_6', array(
    'label' => __('Upload The Social Network Logo 6', 'asycom'),
    'section' => 'asycom_social_options',
    'settings' => 'asycom_social_item_logo_6'
        )
        )
);

