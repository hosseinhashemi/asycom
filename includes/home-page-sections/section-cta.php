
<!--action section-->
<?php
$asycom_cta_page          = get_theme_mod( 'asycom_cta_page', false );
if ( $asycom_cta_page ) {
    $asycom_cta_title         = get_the_title( $asycom_cta_page );
    $asycom_cta_sub_title     = get_the_excerpt( $asycom_cta_page );
    $asycom_cta_btn_url       = get_the_permalink( $asycom_cta_page );
}
$asycom_cta_bg            = esc_url(get_theme_mod('asycom_cta_bg', get_template_directory_uri() . '/images' . "/bg-02.jpg"));
$asycom_cta_over_bg_color = esc_html(get_theme_mod('asycom_cta_over_bg_color', 'rgb(36, 3, 67)'));
$asycom_cta_btn_text      = get_theme_mod('asycom_cta_btn_text', __( 'Learn More', "asycom" ) );

?>
<div id="bw-cta" class="bw-call-to-action bw-section" <?php asycom_get_background( $asycom_cta_bg ); ?>   >
    <div class="bw-call-to-action__overlay" style="opacity:0.5;background: <?php echo esc_attr($asycom_cta_over_bg_color); ?>"></div>

    <div class="bw-call-to-action__content">
        <div class="container ">
            <div class="row">
<?php if ( $asycom_cta_page ) : ?>
                <div class="bw-call-to-action__title"><?php echo esc_html($asycom_cta_title); ?></div>
                <div class="bw-call-to-action__description"><?php echo esc_html($asycom_cta_sub_title); ?></div>

                <div class="bw-call-to-action__btn-container">
                    <a href="<?php echo esc_url($asycom_cta_btn_url); ?>" class="bw-call-to-action__btn"><?php echo esc_html($asycom_cta_btn_text); ?></a>
                </div>
<?php endif; ?>
            </div>
            <!-- /row-->
        </div>
    </div>
    <!--/ container-->




</div>
<!-- /action section-->