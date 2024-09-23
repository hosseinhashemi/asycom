<?php
$asycom_main_portfolio_title = get_theme_mod('asycom_main_portfolio_title', __( "PORTFOLIO", "asycom" ) );
$asycom_portfolio_sub_title = get_theme_mod('asycom_portfolio_sub_title', __( "Check our latests works", "asycom" ) );
$asycom_portfolio_cat = get_theme_mod('asycom_portfolio_cat');
$asycom_portfolio_item_count = absint(get_theme_mod('asycom_portfolio_item_count', 4));
$asycom_portfolio_btn_text = get_theme_mod('asycom_portfolio_btn_text', __("VIEW ALL POSTS", "asycom" ) );
$asycom_portfolio_btn_url = esc_url(get_theme_mod('asycom_portfolio_btn_url', "#"));

$asycom_portfolio_bg = esc_url(get_theme_mod('asycom_portfolio_bg'));
?>

<!-- Blog Section-->
<section id="bw-portfolio" class="bw-section" <?php asycom_get_background( $asycom_portfolio_bg ); ?> >


    <div class="bw-section__header">
        <h2 class="bw-section__title"><?php echo esc_html($asycom_main_portfolio_title); ?></h2>
        <p class="bw-section__description"><?php echo esc_html($asycom_portfolio_sub_title); ?></p>
    </div>
    <div class="container">



        <div class="row">

            <div class="bw-masonry-blog-grid bw-portfolio bw-portfolio--dark-theme bw-portfolio--hover-effect-zoom-in bw-portfolio--diff" >



                <?php
                $args = array(
                    'posts_per_page' => absint($asycom_portfolio_item_count),
                    'category__in' => absint($asycom_portfolio_cat),
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()):

                    while ($the_query->have_posts()) : $the_query->the_post();
                        $asycom_image_alt = "";
                        $asycom_image_medium_blog = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        ?>

                        <div class=" bw-post-item-selector bw-grid-sizer">


                            <div class="bw-portfolio__item" >
                                <?php
                                if (has_post_thumbnail()) {
                                    $asycom_image_id = get_post_thumbnail_id();
                                    $asycom_image_alt = get_post_meta($asycom_image_id, '_wp_attachment_image_alt', TRUE);
                                    ?>
                                    <img class="bw-portfolio__main-img" alt="<?php echo esc_attr($asycom_image_alt); ?>" src="<?php echo esc_url($asycom_image_medium_blog[0]); ?>">
                                <?php } ?>
                                <div class="bw-portfolio__overlay"></div>
                                <div class="bw-portfolio__inner bw-bg-inner">
                                    <a class="bw-portfolio__link" href="<?php echo esc_url(get_the_permalink()); ?>"></a>
                                    <div class="bw-portfolio__header">
                                        <div class="bw-portfolio__info">

                                        </div>                                           
                                    </div>


                                    <div class="bw-portfolio__body">
                                        <p class="bw-portfolio__description">
                                            <?php echo esc_html(get_the_excerpt()); ?>
                                        </p>
                                    </div>


                                    <div class="bw-portfolio__footer">
                                        <div class="bw-portfolio__name"><?php echo esc_html(get_the_title()); ?></div> 
                                    </div>

                                </div> 
                                <!--/inner-->
                            </div>
                            <!-- /portfolio-item-->
                        </div>
                        <!--grid sizer-->

                        <?php
                    endwhile;

                endif;
                ?>











            </div>
            <!--/col-md-10-->

        </div>
        <!--/row-->

        <div class="bw-section__bottom">
            <a href="<?php echo esc_url($asycom_portfolio_btn_url); ?>" class="bw-hero__btn action-btn bw-hero__btn--portfolio"><?php echo esc_html($asycom_portfolio_btn_text); ?></a>
        </div>

    </div>
    <!--/container--> 

</section>
<!-- / Blog Section-->