<?php
$asycom_hero_page = get_theme_mod( 'asycom_hero_page' );
if ( $asycom_hero_page ) {
    $asycom_main_hero_title    = esc_html( get_the_title( $asycom_hero_page ) );
    $asycom_hero_sub_title     = wp_kses_post( get_the_excerpt( $asycom_hero_page ) );
} else {
  $asycom_main_hero_title    = __( 'Meet WordPress', "asycom" ) ;
  $asycom_hero_sub_title     = __( 'WordPress is open source software you can use to create a beautiful website, blog, or app.', "asycom" ) ;
}

$asycom_hero_bg = esc_url(get_theme_mod('asycom_hero_bg', get_template_directory_uri() . '/images' . "/bg-01.jpg"));
$asycom_hero_btn_txt = get_theme_mod('asycom_hero_btn_txt', __( "Read More", "asycom" ) );
$asycom_hero_btn_url = get_theme_mod('asycom_hero_btn_url', "#");
?>

<div class="bw-hero" <?php !empty( $asycom_hero_bg ) ? asycom_get_background( $asycom_hero_bg ) : ''; ?>>
    <div class="bw-hero__overlay"></div>
    <div class="bw-hero__content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h1 class="bw-hero__title"><?php echo esc_html($asycom_main_hero_title); ?></h1>
                    <p class="bw-hero__desc"><?php echo esc_html( $asycom_hero_sub_title); ?></p>
                    <a href="<?php echo esc_url($asycom_hero_btn_url); ?>" class="bw-hero__btn"><?php echo esc_html($asycom_hero_btn_txt); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bw-wave-parent">
        <div class="bw-wave"></div>
        <div class="bw-wave"></div>
    </div>
</div>
