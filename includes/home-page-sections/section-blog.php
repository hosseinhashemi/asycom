<?php
$asycom_main_blog_title = get_theme_mod('asycom_main_blog_title', __("LATEST POSTS", "asycom" ) );
$asycom_blog_sub_title = get_theme_mod('asycom_blog_sub_title', __( "Read More About Our Company", "asycom" ) );
$asycom_blog_item_count = absint(get_theme_mod('asycom_blog_item_count', 4));
$asycom_blog_btn_text = get_theme_mod('asycom_blog_btn_text', __("VIEW ALL POSTS", "asycom" ) );
$asycom_blog_btn_url = esc_url(get_theme_mod('asycom_blog_btn_url', "#"));

$asycom_blog_bg = esc_url( get_theme_mod( 'asycom_blog_bg' ) );

$asycom_blog_hide_cats = wp_validate_boolean(get_theme_mod('asycom_blog_hide_cats', false));
$asycom_blog_hide_tags = wp_validate_boolean(get_theme_mod('asycom_blog_hide_tags', false));
$asycom_blog_hide_excerpt = wp_validate_boolean(get_theme_mod('asycom_blog_hide_excerpt', false));

?>

<!-- Blog Section-->
<section id="bw-blog" class="bw-section" <?php asycom_get_background( $asycom_blog_bg ); ?> >             


    <div class="bw-section__header">
        <h2 class="bw-section__title"><?php echo esc_html($asycom_main_blog_title); ?></h2>
        <p class="bw-section__description"><?php echo esc_html($asycom_blog_sub_title); ?></p>
    </div>
    <div class="container">



        <div class="row">

            <div class="bw-masonry-blog-grid" >



                <?php
                $args = array(
                    'posts_per_page' => absint($asycom_blog_item_count),
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()):

                    while ($the_query->have_posts()) : $the_query->the_post();

                        $asycom_image_medium_blog = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        $asycom_image_alt = "";
                        ?>

                        <div class=" bw-post-item-selector bw-grid-sizer">
                            <div class="bw-post-item">
                                <?php if (has_post_thumbnail()) { 
                                    $asycom_image_id = get_post_thumbnail_id();
                                    $asycom_image_alt = get_post_meta($asycom_image_id, '_wp_attachment_image_alt', TRUE);
                                    
                                    ?>
                                    <div class="bw-post-item__image">
                                        <a href="<?php echo esc_url(get_the_permalink()); ?>">
                                            <img src="<?php echo esc_url($asycom_image_medium_blog[0]); ?>" class="img-responsive" alt="<?php echo esc_attr($asycom_image_alt); ?>" />
                                        </a>
                                    </div>
                                <?php } ?>                                

                                <div class="bw-post-item__text">

                                    <h5 class="bw-post-item__title"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html(get_the_title()); ?></a></h5>
                                    
                                    <?php if(!$asycom_blog_hide_excerpt) {?>
                                    
                                    <p class="bw-post-item__expert">
                                        <?php echo esc_html(get_the_excerpt()); ?>
                                    </p>
                                    
                                    <?php } ?>
                                    
                                    <?php asycom_post_meta(array(
                                        "tags" => !$asycom_blog_hide_tags,
                                        "cats" => !$asycom_blog_hide_cats
                                        )); ?>
                                </div>

                            </div>
                            <!--/bw-post-item-->
                        </div>


                        <?php
                    endwhile;

                endif;
                ?>











            </div>
            <!--/col-md-10-->

        </div>
        <!--/row-->

        <div class="bw-section__bottom">
            <a href="<?php echo esc_url($asycom_blog_btn_url); ?>" class="bw-hero__btn action-btn bw-hero__btn--blog"><?php echo esc_html($asycom_blog_btn_text); ?></a>
        </div>

    </div>
    <!--/container--> 

</section>
<!-- / Blog Section-->