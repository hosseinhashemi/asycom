<?php

/* Blog List Sidebar Layout */
$wp_customize->add_setting('asycom_global_bloglist_sidebar', array(
    'default' => 'right',
    'sanitize_callback' => 'sanitize_text_field'
        )
);



$wp_customize->add_control('asycom_global_bloglist_sidebar', array(
    'type' => 'radio',
    'section' => 'asycom_sidebar_options', 
    'label' => __('Select blog list sidebar layout','asycom'),
    'description' => __('blog list Sidebar','asycom'),
    'choices' => array(
        'left' => __('Left Sidebar','asycom'),
        'none' => __('None - Full width','asycom'),
        'right' => __('Right Sidebar','asycom'),
    ),
));


/* Page Sidebar Layout */
$wp_customize->add_setting('asycom_global_page_sidebar', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field'
        )
);



$wp_customize->add_control('asycom_global_page_sidebar', array(
    'type' => 'radio',
    'section' => 'asycom_sidebar_options', 
    'label' => __('Select page sidebar layout','asycom'),
    'description' => __('Page Sidebar','asycom'),
    'choices' => array(
        'left' => __('Left Sidebar','asycom'),
        'none' => __('None - Full width','asycom'),
        'right' => __('Right Sidebar','asycom'),
    ),
));




/* Post Sidebar Layout */
$wp_customize->add_setting('asycom_global_post_sidebar', array(
    'default' => 'right',
    'sanitize_callback' => 'sanitize_text_field'
        )
);



$wp_customize->add_control('asycom_global_post_sidebar', array(
    'type' => 'radio',
    'section' => 'asycom_sidebar_options', 
    'label' => __('Single post sidebar layout','asycom'),
    'description' => __('Single Post Sidebar','asycom'),
    'choices' => array(
        'left' => __('Left Sidebar','asycom'),
        'none' => __('None - Full width','asycom'),
        'right' => __('Right Sidebar','asycom'),
    ),
));




/* Archive Sidebar Layout */
$wp_customize->add_setting('asycom_global_archive_sidebar', array(
    'default' => 'right',
    'sanitize_callback' => 'sanitize_text_field'
        )
);



$wp_customize->add_control('asycom_global_archive_sidebar', array(
    'type' => 'radio',
    'section' => 'asycom_sidebar_options', 
    'label' => __('Archive post sidebar layout','asycom'),
    'description' => __('Archive Sidebar','asycom'),
    'choices' => array(
        'left' => __('Left Sidebar','asycom'),
        'none' => __('None','asycom'),
        'right' => __('Right Sidebar','asycom'),
    ),
));