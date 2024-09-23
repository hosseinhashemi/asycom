<?php
$asycom_main_testimonial_title = esc_html(get_theme_mod('asycom_main_testimonial_title', __( "TESTIMONIALS", "asycom" ) ) );
$asycom_testimonial_sub_title = esc_html(get_theme_mod('asycom_testimonial_sub_title', __( "Read More About Our Company", "asycom" ) ) );
?>

<!-- Testimonials Section-->
<section id="bw-testimonials" class="bw-section bw-bg-inner">


    <div class="bw-section__header">
        <h2 class="bw-section__title"><?php echo esc_html($asycom_main_testimonial_title); ?></h2>
        <p class="bw-section__description"><?php echo esc_html($asycom_testimonial_sub_title); ?></p>
    </div>
<?php

    $asycom_testimonials_pages = array();

    for ($i = 1; $i <= 3; $i++) {

        $current_item = get_theme_mod('asycom_testimonials_page_' . $i, false);
        if ( $current_item ) {
            $asycom_testimonials_pages[] = $current_item;
        }
        $current_item = null;
    }
    if ( ! empty( $asycom_testimonials_pages ) ) :
?>
    <div class="container">

        <div class="row">
            
        <?php
        
        $args = array(
            'post_type' => 'page',
            'post__in' => (array) $asycom_testimonials_pages,
            'posts_per_page' => 3,
            'orderby' => 'post__in',
        );

        // Run The Loop.
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
            ?>

            <div class="col-sm-4">
                <div class="bw-testimonial-item bw-testimonial-item--1 delay-03s">

                    <p class="bw-testimonial-item__text"><?php the_content(); ?></p>
                             
                    <img class="bw-testimonial-item__img img-responsive img-circle" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php echo esc_attr($asycom_testimonial_item_avatar_alt_1); ?>" />
                    
                    <div class="bw-testimonial-item__person">
                        <h6 class="bw-testimonial-item__title"><?php echo esc_html( get_the_title() ); ?></h6>
                    </div>

                </div>
            </div>
            
         <?php
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
<!-- / Testimonials Section-->