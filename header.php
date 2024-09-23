<?php
/*
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php esc_attr(bloginfo('description')); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- Navigation -->
    <nav id="bw-navbar"
        class="navbar navbar-default navbar-custom navbar-fixed-top bw-header-<?php echo esc_attr(get_theme_mod("asycom_header_alignment")); ?>-align"
        style="background-color:<?php echo esc_attr(get_theme_mod("asycom_header_background_color","rgba(255,255,255,0.7)")); ?> ">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="bw-site-brand">

                <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        }else{
                            ?>
                <a class="bw-site-logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php
                            $asycom_site_title = get_bloginfo('name');
                            $asycom_site_desc = get_bloginfo('description');
                            ?>
                    <h1 class="bw-header-site-name"><?php echo esc_html($asycom_site_title); ?> </h1>
                    <p class="bw-site-description"><?php echo esc_html($asycom_site_desc); ?> </p>
                    <?php
                        }
                        ?>
                </a>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php

wp_nav_menu(array(
    'container_class' => 'main-nav-wrapper',
    'menu_class' => ' slimmenu ',
    'container_id' => 'main-menu-1',
    'theme_location' => 'primary',
    'fallback_cb' => false,
    'walker' => asycom_custom_walker()
));

?>

            <!-- /.navbar-collapse -->


        </div>
        <!-- /.container -->
    </nav>