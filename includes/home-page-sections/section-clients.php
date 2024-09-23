<?php
$asycom_main_client_title = get_theme_mod('asycom_main_client_title');
$asycom_client_sub_title = get_theme_mod('asycom_client_sub_title');

?>
<!-- Our Clients-->
<section id="bw-ourclient" class="bw-section">             


    <?php if($asycom_main_client_title !== '' && $asycom_client_sub_title != ''){ ?>
    
    <div class="bw-section__header">
        <h2 class="bw-section__title"><?php echo esc_html($asycom_main_client_title); ?></h2>
        <p class="bw-section__description"><?php echo esc_html($asycom_client_sub_title); ?></p>
    </div>

    <?php } 

    $asycom_client_pages = array();

    for ( $i = 1; $i <= 6; $i++ ) {

        $current_item = get_theme_mod( 'asycom_client_page_' . $i, false );
        if ( $current_item ) {
            $asycom_client_pages[] = $current_item;
        }
        $current_item = null;
    }
    
    if ( ! empty( $asycom_client_pages ) ) :
    ?>
    
    <div class="container">

        <div class="row">
            
        <?php
        
        $args = array(
            'post_type' => 'page',
            'post__in' => (array) $asycom_client_pages,
            'posts_per_page' => 6,
            'orderby' => 'post__in',
        );

        // Run The Loop.
        $query = new WP_Query($args);
        $i = 1;
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>

            <div class="col-sm-2 col-xs-12">
                <div class="bw-client bw-client--<?php echo esc_attr( $i ); ?>">
                    <a class="bw-client__link" href="<?php echo esc_url(get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
                        <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"  class="bw-client__img" alt="<?php echo esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ); ?>" />
                    </a>
                </div>
                <!--/bw-client-->
            </div>
            <!--col-md-2-->

         <?php
                $i++;
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        </div>
        <!-- /row-->
    </div>
    <!--/ container-->
<?php
endif;
?>
    
</section>
<!-- / Our Client Section-->