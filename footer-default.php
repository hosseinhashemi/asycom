<?php
/*
  # ===========================================
  # footer.php
  #
  # footer contents.
  # ===========================================
 */
$asycom_footer_bg_color = esc_html(get_theme_mod('asycom_footer_bg_color', "#111111"));
$asycom_copyright = esc_html(get_theme_mod('asycom_copyright', __( "Built using WordPress and Asycom Theme.", "asycom") ) );
?>  


<!-- Footer -->
<footer class="bw-footer" style="background-color: <?php echo esc_attr($asycom_footer_bg_color); ?>">

    <div class="bw-footer-widget">

        <div class="container">
            <div class="row">

                <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-1">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <?php } ?>
                
                
                <?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-2">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <?php } ?>
                
                
                <?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-3">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <?php } ?>
                
                
                <?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-4">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
                <?php } ?>
                
                
                

                

                </div><!--row -->
                </di><!--container -->

                </div>

                <div class = "container">
                <div class = "row">
                <div class = "col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <p class = "bw-copyright text-muted"><?php echo esc_html($asycom_copyright); ?></p>
                
            </div>
        </div>
    </div>
</footer>

    
    <?php wp_footer(); ?>


</body>
