<?php

/* Blog List Sidebar Layout */
$wp_customize->add_setting('asycom_global_bloglist_thumbnail', array(
    'default' => 'cover',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field'
        )
);


$wp_customize->add_control('asycom_global_bloglist_thumbnail', array(
    'type' => 'radio',
    'section' => 'asycom_general_options', 
    'label' => __('Blog list thumbnail style','asycom'),
    'description' => __('Select Blog list thumbnail style','asycom'),
    'choices' => array(
        'cover' => __('Cover','asycom'),
        'contain' => __('Contain','asycom'),
    ),
));



/*Disable blog list Excerpt*/
$wp_customize->add_setting('asycom_blog_hide_excerpt', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('asycom_blog_hide_excerpt', array(
    'type' => 'checkbox',
    'section' => 'asycom_general_options', // Add a default or your own section
    'label' => __('Hide blog item Excerpt?','asycom'),
    'description' => __('By enabling this option the post Eecerpt will be disappeared','asycom')
));


/*Disable blog list cats*/
$wp_customize->add_setting('asycom_blog_hide_cats', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',

));

$wp_customize->add_control('asycom_blog_hide_cats', array(
    'type' => 'checkbox',
    'section' => 'asycom_general_options', // Add a default or your own section
    'label' => __('Hide blog item cats?','asycom'),
    'description' => __('By enabling this option the post cats will be disappeared','asycom')
));




/*Disable blog list Tags*/
$wp_customize->add_setting('asycom_blog_hide_tags', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',

));

$wp_customize->add_control('asycom_blog_hide_tags', array(
    'type' => 'checkbox',
    'section' => 'asycom_general_options', // Add a default or your own section
    'label' => __('Hide blog item tags?','asycom'),
    'description' => __('By enabling this option the post tags will be disappeared','asycom')
));





