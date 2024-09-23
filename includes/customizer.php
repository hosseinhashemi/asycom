<?php

function asycom_customize_register($wp_customize) {

    $wp_customize->add_panel('asycom_main_options', array(
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Theme options', 'asycom'),
        'description' => esc_html__('Panel to update services items', 'asycom'), // Include html tags such as <p>.
        'priority' => 10 // Mixed with top-level-section hierarchy.
    ));


    /* ================/
     * General Options
      /  ================ */
    $wp_customize->add_section('asycom_general_options', array(
        'title' => esc_html__('General Options', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));

    require_once( get_template_directory() . '/includes/customize-section/customize-general.php' );




    /* ================/
     * Header Section 
      /  ================ */
    $wp_customize->add_section('asycom_header_options', array(
        'title' => esc_html__('Header', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));

    require_once( get_template_directory() . '/includes/customize-section/customize-header.php' );





    /* ================/
     * Hero Section 
      /  ================ */
    $wp_customize->add_section('asycom_hero_options', array(
        'title' => esc_html__('Hero Section', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));

    require_once( get_template_directory() . '/includes/customize-section/customize-hero.php' );




    /* ================/
     * Services Section 
      /  ================ */
    $wp_customize->add_section('asycom_services_options', array(
        'title' => esc_html__('Services', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));

    require_once( get_template_directory() . '/includes/customize-section/customize-services.php' );





    /* ================/
     * About us Section 
      /  ================ */
    $wp_customize->add_section('asycom_about_options', array(
        'title' => esc_html__('About Us', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-about.php' );





    /* ================/
     *  Latest Post
      /  ================ */
    $wp_customize->add_section('asycom_blog_options', array(
        'title' => esc_html__('Latest Posts', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-blog.php' );


    /* ================/
     *  Latest Post
      /  ================ */
    $wp_customize->add_section('asycom_portfolio_options', array(
        'title' => esc_html__('Portfolio', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-portfolio.php' );


    /* ================/
     *  Testimonials
      /  ================ */
    $wp_customize->add_section('asycom_testimonial_options', array(
        'title' => esc_html__('Testimonials', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-testimonials.php' );




    /* ================/
     *  Call To Action
      /  ================ */
    $wp_customize->add_section('asycom_cta_options', array(
        'title' => esc_html__('Call To Action', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-cta.php' );



    /* ================/
     *  Our Team
      /  ================ */
    $wp_customize->add_section('asycom_team_options', array(
        'title' => esc_html__('Our Team', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-ourteam.php' );



    /* ================ /
     *  Our Clients      /
      /  ================ */
    $wp_customize->add_section('asycom_client_options', array(
        'title' => esc_html__('Clients', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-client.php' );


    /* ================ /
     *  New Team      /
      /  ================ */
    $wp_customize->add_section('asycom_social_options', array(
        'title' => esc_html__('Social Networks', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-social.php' );





    /* ================/
     * Sidebars Section 
      /  ================ */
    $wp_customize->add_section('asycom_sidebar_options', array(
        'title' => esc_html__('Sidebars', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));

    require_once( get_template_directory() . '/includes/customize-section/customize-sidebar.php' );



    /* ================/
     * footer Section 
      /  ================ */
    $wp_customize->add_section('asycom_footer_options', array(
        'title' => esc_html__('Footer', 'asycom'),
        'priority' => 30,
        'panel' => 'asycom_main_options'
    ));

    require_once( get_template_directory() . '/includes/customize-section/customize-footer.php' );
}

add_action('customize_register', 'asycom_customize_register');





/* * **************************************************************
 * 
 *              Custom Controls
 * 
 * ************************************************************** */
if (class_exists('WP_Customize_Control')) {

    class Asycom_Alpha_Color_Control extends WP_Customize_Control {

        /**
         * Official control name.
         */
        public $type = 'alpha-color';

        /**
         * Add support for palettes to be passed in.
         *
         * Supported palette values are true, false, or an array of RGBa and Hex colors.
         */
        public $palette;

        /**
         * Add support for showing the opacity value on the slider handle.
         */
        public $show_opacity;

        /**
         * Enqueue scripts and styles.
         *
         * Ideally these would get registered and given proper paths before this control object
         * gets initialized, then we could simply enqueue them here, but for completeness as a
         * stand alone class we'll register and enqueue them here.
         */
        public function enqueue() {
            wp_enqueue_script(
                    'asycom-alpha-color-picker',
                    get_template_directory_uri() . '/includes/alpha-color-picker/alpha-color-picker.js',
                    array('jquery', 'wp-color-picker'),
                    '1.0.0',
                    true
            );
            wp_enqueue_style(
                    'asycom-alpha-color-picker',
                    get_template_directory_uri() . '/includes/alpha-color-picker/alpha-color-picker.css',
                    array('wp-color-picker'),
                    '1.0.0'
            );
        }

        /**
         * Render the control.
         */
        public function render_content() {

            // Process the palette
            if (is_array($this->palette)) {
                $palette = implode('|', $this->palette);
            } else {
                // Default to true.
                $palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
            }

            // Support passing show_opacity as string or boolean. Default to true.
            $show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';

            // Begin the output. 
            ?>
            <label>
                <?php
                // Output the label and description if they were passed in.
                if (isset($this->label) && '' !== $this->label) {
                    echo '<span class="customize-control-title">' . esc_html(sanitize_text_field($this->label)) . '</span>';
                }
                if (isset($this->description) && '' !== $this->description) {
                    echo '<span class="description customize-control-description">' . esc_html(sanitize_text_field($this->description)) . '</span>';
                }
                ?>
                <input class="alpha-color-control" type="text" data-show-opacity="<?php echo esc_attr($show_opacity); ?>" data-palette="<?php echo esc_attr($palette); ?>" data-default-color="<?php echo esc_attr($this->settings['default']->default); ?>" <?php $this->link(); ?>  />
            </label>
            <?php
        }

    }

    function asycom_sanitize_rgba($color) {
        if (empty($color) || is_array($color))
            return 'rgba(0,0,0,0)';

        // If string does not start with 'rgba', then treat as hex
        // sanitize the hex color and finally convert hex to rgba
        if (false === strpos($color, 'rgba')) {
            return sanitize_hex_color($color);
        }

        // By now we know the string is formatted as an rgba color so we need to further sanitize it.
        $color = str_replace(' ', '', $color);
        sscanf($color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha);
        return 'rgba(' . $red . ',' . $green . ',' . $blue . ',' . $alpha . ')';
    }

}



/* Customizer Preview JS */
add_action('customize_preview_init', 'asycom_customize_preview_js');

function asycom_customize_preview_js() {
    wp_enqueue_script('asycom-customizer-preview', get_template_directory_uri() . '/assets/js/customizer-preview-js.js', array('jquery', 'customize-preview'), '0.1.0', true);
}
