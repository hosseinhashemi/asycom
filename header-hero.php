<?php
/**
  # ===========================================
  # header.php
  #
  # The theme header.
  # ===========================================
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php esc_attr(bloginfo('charset')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php esc_attr(bloginfo('description')); ?>">
    <title>Hafez • Main Page</title>

    <?php wp_head(); ?>
</head>

<?php 
$contact_our_location_value  = THEMEOPTIONS["contact_our_location_value"];
$contact_office_number_value = THEMEOPTIONS["contact_office_number_value"];
$contact_email_address_value = THEMEOPTIONS["contact_email_address_value"];
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="main-page-header">
        <div class="top">
            <div class="container">
                <div class="left">
                    <a href="#" class="location">
                        <span class="text"><?php echo $contact_our_location_value; ?></span>
                    </a>
                </div>
                <div class="right">
                    <a href="tel:<?php echo $contact_office_number_value; ?>" class="tel">
                        <span class="text"><?php echo $contact_office_number_value; ?></span>
                    </a>
                    <span class="divider"></span>
                    <a href="mailto:<?php echo $contact_email_address_value; ?>" class="email">
                        <span class="text"><?php echo $contact_email_address_value; ?></span>
                    </a>
                    <span class="divider"></span>
                    <?php //do_action('wpml_add_language_selector'); ?>
                    <?php //echo do_shortcode('[wpml_language_switcher type="footer" flags=1 native=0 translated=1][/wpml_language_switcher]') ?>

                </div>
            </div>
        </div>
        <div class="main container">
            <?php
            $custom_logo_image_id = get_theme_mod( 'custom_logo' );
            $custom_logo_image = wp_get_attachment_image_src( $custom_logo_image_id , 'full' );
            $custom_logo_alt = get_post_meta($custom_logo_image_id, '_wp_attachment_image_alt', TRUE);
            ?>

            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php echo $custom_logo_image[0]; ?>" alt="<?php echo $custom_logo_alt; ?>" width="230">
            </a>

            <?php
            wp_nav_menu(array(
                // 'container_class' => 'main-menu',
                'menu_class' => ' main-menu ',
                'container_id' => 'main-menu-1',
                'theme_location' => 'primary',
                'fallback_cb' => false,
                // 'walker' => asycom_custom_walker()
            ));
            ?>

            <button class="main-menu-toggle"></button>
        </div>
    </header>
    <main class="main-wrapper">