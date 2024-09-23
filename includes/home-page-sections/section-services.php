<!--  Servises -->
<section id="bw-services" class="bw-section">


    <div class="bw-section__header">
        <h2 class="bw-section__title"><?php echo esc_html(get_theme_mod('asycom_main_services_title', __( "SERVICES", "asycom" ) ) ); ?></h2>
        <p class="bw-section__description"><?php echo esc_html(get_theme_mod('asycom_services_sub_title',  __( "WE ARE PROUD OF WHAT WE HAVE DONE AND CURIOUS OF WHAT CAN BE DONE", "asycom") )); ?></p>
    </div>

    <?php
    $asycom_services_pages = array();

    for ($i = 1; $i <= 3; $i++) {

        $current_item = get_theme_mod('asycom_services_page_' . $i, false);
        if ($current_item) {
            $asycom_services_pages[] = $current_item;
        }
        $current_item = null;
    }


    if ( ! empty( $asycom_services_pages ) ) :
    ?>    
      <div class="container">
        <div class="row">
            <div class="col-md-12">
        <?php
        $args = array(
            'post_type' => 'page',
            'post__in' => (array) $asycom_services_pages,
            'posts_per_page' => 3,
            'orderby' => 'post__in',
        );

        // Run The Loop.
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            $i = 0;
            while ($query->have_posts()) : $query->the_post();
            $i++;
            ?>


                    <div class="col-md-4 col-sm-4">
                        <!-- / service item -->
                        <div class="bw-service delay-03s bw-service-<?Php echo $i; ?>">

                            <div class="bw-service__icon-holder">
                                <?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'bw-service__image' ) ); ?>
                            </div>

                            <h4 class="bw-service__heading"><?php echo esc_html( get_the_title() ); ?></h4>
                            <p class="bw-service__description">                             
                                <?php the_excerpt(); ?>
                            </p>

                            <div class="bw-service__link-container">
                                <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="bw-service__link"><?php echo esc_html_e( 'Read More', 'asycom' ); ?></a>
                            </div>

                        </div>
                        <!-- / service item -->
                    </div>
                    <!-- / col-md-4 -->

            <?php

            endwhile;
        endif;
        wp_reset_postdata();
        ?>
            </div>
                    <!-- / col-md-10 -->
        </div>
        <!-- / row-->

    </div>
    <!-- / container-->                   
<?php                    
    endif;
?>

</section>
<!-- /Servises -->