<?php

$about_us_title    = '';
$about_us_subtitle = '';
$about_us_desc     = '';
$asycom_about_page = get_theme_mod( 'asycom_about_page' );
if ( $asycom_about_page ) {
    $about_us_title    = esc_html( get_the_title( $asycom_about_page ) );
    $about_us_subtitle = wp_kses_post( get_the_excerpt( $asycom_about_page ) );
}

$asycom_about_bg = get_theme_mod('asycom_about_bg', get_template_directory_uri() . '/images' . '/bg-04.jpg');

$about_us_img_alt_val ="";
$about_us_img = get_theme_mod('asycom_about_img', get_template_directory_uri() . '/images' . '/bardiaweb-logo-white.png');
$about_us_img_alt = $about_us_title;
if($about_us_img_alt){
    $about_us_img_alt_val = $about_us_img_alt;
}


$asycom_about_bg_color = get_theme_mod('asycom_about_bg_color', "rgb(0, 0, 0)");

$asycom_about_skill_title_1 = get_theme_mod('asycom_about_skill_title_1', __( "HAPPY CUSTOMERS", "asycom") );
$asycom_about_skill_title_2 = get_theme_mod('asycom_about_skill_title_2', __( "SUCCESSFULL PROJECTS", "asycom") );
$asycom_about_skill_title_3 = get_theme_mod('asycom_about_skill_title_3', __( "DESIGN SKILL", "asycom") );
$asycom_about_skill_title_4 = get_theme_mod('asycom_about_skill_title_4', __( "SEO", "asycom") );
$asycom_about_skill_percent_1 = get_theme_mod('asycom_about_skill_percent_1', __( "100", "asycom") );
$asycom_about_skill_percent_2 = get_theme_mod('asycom_about_skill_percent_2', __( "90", "asycom") );
$asycom_about_skill_percent_3 = get_theme_mod('asycom_about_skill_percent_3', __( "85", "asycom") );
$asycom_about_skill_percent_4 = get_theme_mod('asycom_about_skill_percent_4', __( "95", "asycom") );
?>


<!--  About Us -->
<section id="bw-about-us" class="bw-section" <?php echo esc_attr( asycom_get_background( $asycom_about_bg ) ); ?> >
    <div class="bw-about-us__overlay" style="background-color: <?php echo esc_attr($asycom_about_bg_color) ?>;"></div>

    <div class="bw-about-us__holder">

        <div class="bw-section__header">
            
           
        </div>
        <!--/bw-section__header-->

        <div class="container">

            <div class="row">
                <div class="col-md-10 col-md-offset-1 ">
                    <div class="col-md-12 ">
                        <div class="bw-about-us__img">
                            <img src="<?php echo esc_url($about_us_img); ?>" class="img-responsive" alt="<?php echo esc_attr($about_us_img_alt_val); ?>"/>
                        </div>
                        <h2 class="bw-section__title"><?php echo esc_html($about_us_title); ?></h2>
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <div class="bw-about-us__desc">
                            <?php echo esc_html($about_us_subtitle); ?>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container-fluid-->

        <div class="container">
            <div class="bw-skills">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="row">

                            <div class="col-md-3 col-sm-3 bw-about-us__skill--1">                 
                                <div id="circle-1" data-percent="<?php echo absint($asycom_about_skill_percent_1); ?>" class="bw-about-us__skill  percircle animate slow"> </div>
                                <h5 class="bw-about-us__skill-title"><?php echo esc_html($asycom_about_skill_title_1); ?></h5>
                            </div>

                            <div class="col-md-3 col-sm-3 bw-about-us__skill--2">                 
                                <div id="circle-2" data-percent="<?php echo absint($asycom_about_skill_percent_2); ?>" class="bw-about-us__skill  percircle animate"> </div>
                                <h5 class="bw-about-us__skill-title"><?php echo esc_html($asycom_about_skill_title_2); ?></h5>
                            </div>

                            <div class="col-md-3 col-sm-3 bw-about-us__skill--3">                 
                                <div id="circle-3" data-percent="<?php echo absint($asycom_about_skill_percent_3); ?>" class="bw-about-us__skill  percircle animate"> </div>
                                <h5 class="bw-about-us__skill-title "><?php echo esc_html($asycom_about_skill_title_3); ?></h5>
                            </div>

                            <div class="col-md-3 col-sm-3 bw-about-us__skill--4">                 
                                <div id="circle-4" data-percent="<?php echo absint($asycom_about_skill_percent_4); ?>" class="bw-about-us__skill  percircle animate"> </div>
                                <h5 class=" bw-about-us__skill-title"><?php echo esc_html($asycom_about_skill_title_4); ?></h5>
                            </div>



                        </div>
                        <!--/ Row-->

                    </div>
                </div>
                <!-- / row -->
            </div>
            <!-- / skills -->

        </div>
        <!-- /container-fluid-->


    </div>
    <!-- / bw-about-us__holder-->

</section>
<!-- / About us -->

