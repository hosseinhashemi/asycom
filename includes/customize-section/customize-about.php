<?php

$wp_customize->add_setting('asycom_hide_about_section', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('asycom_hide_about_section', array(
    'type' => 'checkbox',
    'section' => 'asycom_about_options', // Add a default or your own section
    'label' => __('Hide About Us Section?','asycom'),
    'description' => __('The About Us section will disappear if you enable this option','asycom')
));

$wp_customize->add_setting('asycom_about_page', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_about_page', array(
    'label' => __('Select your About Us page', 'asycom'),
    'section' => 'asycom_about_options',
    'settings' => 'asycom_about_page',
) ) );


/* About Us - Main title */
$wp_customize->add_setting('asycom_main_about_title', array(
    'default' => __('ABOUT US', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
        )
);
$wp_customize->add_control('asycom_main_about_title', array(
    'label' => __('Main Title', 'asycom'),
    'section' => 'asycom_about_options',
    'type' => 'text',
    'description' => __('Main Title of About Us section', 'asycom')
        )
);


/* About Us - sub title */
$wp_customize->add_setting('asycom_about_sub_title', array(
    'default' => __( 'Few words about us and our crew', 'asycom' ), 
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_about_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_about_options',
    'type' => 'text',
    'description' => __('Sub Title of About Us section', 'asycom')
        )
);


/* About Us - Background  */
$wp_customize->add_setting('asycom_about_bg', array(
    'default' => get_template_directory_uri() . '/images' . '/bg-04.jpg',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
                $wp_customize, 'asycom_about_bg', array(
            'label' => __('Upload a backgound', 'asycom'),
            'section' => 'asycom_about_options',
            'settings' => 'asycom_about_bg'
                )
        )
);

/* About Us - Background Color overlay */
$wp_customize->add_setting('asycom_about_bg_color', array(
    'default' => 'rgb(0, 0, 0)', 
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Color_Control(
                $wp_customize, 'asycom_about_bg_color', array(
            'label' => __('About Us Backgound color overlay', 'asycom'),
            'section' => 'asycom_about_options',
            'settings' => 'asycom_about_bg_color',
                ))
);





/* About Us -  desc */
$wp_customize->add_setting('asycom_about_desc', array(
    'default' => __( 'Explore the history of the classic Lorem Ipsum passage and generate your own text using any number of characters, words, sentences or paragraphs. Commonly used as placeholder text in the graphic and print industrie', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control('asycom_about_desc', array(
    'label' => __('Service Item 1 Description', 'asycom'),
    'section' => 'asycom_about_options',
    'type' => 'textarea'
        )
);




/* About Us - Image  */
$wp_customize->add_setting('asycom_about_img', array(
    'default' => get_template_directory_uri() . '/images' . '/bardiaweb-logo-white.png', 
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'postMessage'
    ));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
                $wp_customize, 'asycom_about_img', array(
            'label' => __('Upload an image', 'asycom'),
            'section' => 'asycom_about_options',
            'settings' => 'asycom_about_img'
                )
        )
);


/* About Us - skill 1 name  */
$wp_customize->add_setting('asycom_about_skill_title_1', array(
    'default' => __( 'HAPPY CUSTOMERS', 'asycom' ), 
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));

$wp_customize->add_control('asycom_about_skill_title_1', array(
    'label' => __('Skill title 1', 'asycom'),
    'section' => 'asycom_about_options',
    'type' => 'text',
    'description' => __('Write the Skill title like Photshop or HTML or Happy customers', 'asycom')
        )
);


$wp_customize->add_setting('asycom_about_skill_percent_1', array(
    'default' => __( '100', 'asycom' ), 
    'sanitize_callback' => 'sanitize_text_field'));

$wp_customize->add_control('asycom_about_skill_percent_1', array(
    'label' => __('Skill percent 1', 'asycom'),
    'section' => 'asycom_about_options',
    'input_attrs' => array('min' => 0, 'max' => 100, 'step' => 1),
    'type' => 'number',
    'description' => __('Enter the Skill percent like 100% or 75%. You should Enter your number between 0 to 100', 'asycom')
        )
);


/* About Us - skill 2 name */
$wp_customize->add_setting('asycom_about_skill_title_2', array(
    'default' => __( 'SUCCESSFULL PROJECTS', 'asycom'), 
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));

$wp_customize->add_control('asycom_about_skill_title_2', array(
    'label' => __('Skill title 2', 'asycom'),
    'section' => 'asycom_about_options',
    'type' => 'text',
    'description' => __('Write the Skill title like Photshop or HTML or Happy customers', 'asycom')
        )
);


$wp_customize->add_setting('asycom_about_skill_percent_2', array(
    'default' => __( '90', 'asycom' ), 
    'sanitize_callback' => 'sanitize_text_field'));

$wp_customize->add_control('asycom_about_skill_percent_2', array(
    'label' => __('Skill percent 2', 'asycom'),
    'section' => 'asycom_about_options',
    'input_attrs' => array('min' => 0, 'max' => 100, 'step' => 1),
    'type' => 'number',
    'description' => __('Enter the Skill percent like 100% or 75%. You should Enter your number between 0 to 100', 'asycom')
        )
);



/* About Us - skill 3 name */
$wp_customize->add_setting('asycom_about_skill_title_3', array(
    'default' => __( 'DESIGN SKILL', 'asycom' ), 
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));

$wp_customize->add_control('asycom_about_skill_title_3', array(
    'label' => __('Skill title 3', 'asycom'),
    'section' => 'asycom_about_options',
    'type' => 'text',
    'description' => __('Write the Skill title like Photshop or HTML or Happy customers', 'asycom')
        )
);


$wp_customize->add_setting('asycom_about_skill_percent_3', array(
    'default' => __( '85', 'asycom'), 
    'sanitize_callback' => 'sanitize_text_field'));

$wp_customize->add_control('asycom_about_skill_percent_3', array(
    'label' => __('Skill percent 3', 'asycom'),
    'section' => 'asycom_about_options',
    'input_attrs' => array('min' => 0, 'max' => 100, 'step' => 1),
    'type' => 'number',
    'description' => __('Enter the Skill percent like 100% or 75%. You should Enter your number between 0 to 100', 'asycom')
        )
);





/* About Us - skill 4 name */
$wp_customize->add_setting('asycom_about_skill_title_4', array(
    'default' => __( 'SEO', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
    ));

$wp_customize->add_control('asycom_about_skill_title_4', array(
    'label' => __('Skill title 4', 'asycom'),
    'section' => 'asycom_about_options',
    'type' => 'text',
    'description' => __('Write the Skill title like Photshop or HTML or Happy customers', 'asycom')
        )
);


$wp_customize->add_setting('asycom_about_skill_percent_4', array(
    'default' => __( '95', 'asycom' ), 
    'sanitize_callback' => 'sanitize_text_field'));

$wp_customize->add_control('asycom_about_skill_percent_4', array(
    'label' => __('Skill percent 4', 'asycom'),
    'section' => 'asycom_about_options',
    'input_attrs' => array('min' => 0, 'max' => 100, 'step' => 1),
    'type' => 'number',
    'description' => __('Enter the Skill percent like 100% or 75%. You should Enter your number between 0 to 100', 'asycom')
        )
);
