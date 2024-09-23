<?php


$wp_customize->add_setting('asycom_hide_team_section', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('asycom_hide_team_section', array(
    'type' => 'checkbox',
    'section' => 'asycom_team_options', // Add a default or your own section
    'label' => __('Hide Our Team Section?','asycom'),
    'description' => __('The Our Team section will disappear if you enable this option','asycom')
));


/* Our Team - Main title */
$wp_customize->add_setting('asycom_main_team_title', array(
    'default' => __('Our Team', 'asycom'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_main_team_title', array(
    'label' => __('Our Team Section Main Title', 'asycom'),
    'section' => 'asycom_team_options',
    'type' => 'text',
    'description' => __('Main Title of Our Team section', 'asycom')
        )
);



/* Our Team - sub title */
$wp_customize->add_setting('asycom_team_sub_title', array(
    'default' => __( 'Get Familiar With Our Team', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_team_sub_title', array(
    'label' => __('Sub Title', 'asycom'),
    'section' => 'asycom_team_options',
    'type' => 'text',
    'description' => __('Sub Title of Our Team section', 'asycom')
        )
);




/* Our Team - Item 1 */
$wp_customize->add_setting('asycom_ourteam_page_1', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_ourteam_page_1', array(
    'label' => __('Select a page as Team Member 1', 'asycom'),
    'section' => 'asycom_team_options',
    'settings' => 'asycom_ourteam_page_1',
) ) );
/* Our Team - Item 1 Position */
$wp_customize->add_setting('asycom_team_item_pos_1', array(
    'default' => __( 'CEO', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_team_item_pos_1', array(
    'label' => __('Team Member 1 Position', 'asycom'),
    'section' => 'asycom_team_options',
    'type' => 'text'
        )
);


/* Our Team - Item 2 */
$wp_customize->add_setting('asycom_ourteam_page_2', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_ourteam_page_2', array(
    'label' => __('Select a page as Team Member 2', 'asycom'),
    'section' => 'asycom_team_options',
    'settings' => 'asycom_ourteam_page_2',
) ) );


/* Our Team - Item 2 Position */
$wp_customize->add_setting('asycom_team_item_pos_2', array(
    'default' => __( 'DEVELOPER', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_team_item_pos_2', array(
    'label' => __('Team Member 2 Position ', 'asycom'),
    'section' => 'asycom_team_options',
    'type' => 'text'
        )
);



/* Our Team - Item 3 */
$wp_customize->add_setting('asycom_ourteam_page_3', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_ourteam_page_3', array(
    'label' => __('Select a page as Team Member 3', 'asycom'),
    'section' => 'asycom_team_options',
    'settings' => 'asycom_ourteam_page_3',
) ) );

/* Our Team - Item 3 Position */
$wp_customize->add_setting('asycom_team_item_pos_3', array(
    'default' => __( 'DESIGNER', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_team_item_pos_3', array(
    'label' => __('Team Member 3 Position', 'asycom'),
    'section' => 'asycom_team_options',
    'type' => 'text'
        )
);




/* Our Team - Item 3 */
$wp_customize->add_setting('asycom_ourteam_page_4', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control( new ASYCOM_WP_Customize_Page_Control( $wp_customize, 'asycom_ourteam_page_4', array(
    'label' => __('Select a page as Team Member 4', 'asycom'),
    'section' => 'asycom_team_options',
    'settings' => 'asycom_ourteam_page_4',
) ) );

/* Our Team - Item 3 Position */
$wp_customize->add_setting('asycom_team_item_pos_4', array(
    'default' => __( 'DESIGNER', 'asycom' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
));
$wp_customize->add_control('asycom_team_item_pos_4', array(
    'label' => __('Team Member 4 Position', 'asycom'),
    'section' => 'asycom_team_options',
    'type' => 'text'
        )
);
