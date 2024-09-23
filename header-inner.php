<?php
/*
  # ===========================================
  # header-inner.php
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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="inner-page-header">
        <div class="top">
            <div class="container">
                <div class="left">
                    <a href="#" class="location">
                        <span class="text">1446 Lonsdale Ave, North Vancouver, BC V7M 2J1</span>
                    </a>
                </div>
                <div class="right">
                    <a href="tel:18004587890" class="tel">
                        <span class="text">1800 458 7890</span>
                    </a>
                    <span class="divider"></span>
                    <a href="mailto:Office@sarafyhafez.ca" class="email">
                        <span class="text">Office@sarafyhafez.ca</span>
                    </a>
                    <span class="divider"></span>
                    
                </div>
            </div>
        </div>
        <div class="main container">
            <!-- <a href="#" class="logo">
                <img src="assets/images/logo/logo-en.png" alt="" width="230">
            </a> -->
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
        <div class="page-title">
            <div class="bg-image">
                <?php
                if ( is_archive() ) {
                    $archive_header_image = THEMEOPTIONS["archive_header_image"]; ?>
                <img src="<?php echo $archive_header_image['url'] ?>"
                    alt="<?php echo $archive_header_image['alt'] ?>" />
                <?php
                } else {
                    asycom_img_tag_with_alt();
                }  ?>
            </div>
            <div class="container">
                <h1 class="title">
                    <?php echo asycom_innerpage_title(); ?></h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo get_home_url(); ?>" class="home" aria-label="Home Link"></a>
                    </li>
                    <span class="divider"></span>
                    <li>
                        <span><?php echo asycom_innerpage_title(); ?></span>
                    </li>
                </ol>
            </div>
        </div>
        <!-- / page-title -->