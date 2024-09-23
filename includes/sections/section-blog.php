<?php
/**
  # ===========================================
  # 
  # Blog Section
  # 
  # ===========================================
 */
?>

<!--  Blog Section -->
<section class="blog-posts">
    <div class="title-wrapper conatiner">
        <h2 class="main">Blog and News</h2>
        <p class="desc">latest News and Artical</p>
    </div>
    <div class="splide container">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                $args = array(
                    'posts_per_page' => absint(7),
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()):

                    while ($the_query->have_posts()) : $the_query->the_post();
                    $post_date_month_name = get_the_date( 'M' ); 
                    $post_date_day_number = get_the_date( 'd' ); 
                    
                        $asycom_image_medium_large = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        $asycom_image_alt = "";
                        if (has_post_thumbnail()) { 
                                    $asycom_image_id = get_post_thumbnail_id();
                                    $asycom_image_alt = get_post_meta($asycom_image_id, '_wp_attachment_image_alt', TRUE);
                        }
                                    ?>
                <li class="splide__slide">
                    <div class="card-blog type-1">
                        <div class="image-box">
                            <img src="<?php echo esc_url($asycom_image_medium_large[0]); ?>" class="thumbnail"
                                alt="<?php echo esc_attr($asycom_image_alt); ?>">
                            <time class="date-modified" datetime="">
                                <span class="day"><?php echo $post_date_day_number; ?></span>
                                <span class="month"><?php echo $post_date_month_name; ?></span>


                            </time>
                        </div>
                        <div class="text-box">
                            <nav class="categories"> <?php  asycom_categories( get_the_ID() ); ?></nav>
                            <a href="<?php echo esc_html(get_the_permalink()); ?>">
                                <h3 class="title"><?php the_title() ?></h3>
                                <p class="excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
                                <div class="bottom">
                                    <span class="read-more">Read More
                            </a>
                        </div>
                        </a>
                    </div>
        </div>
        </li>

        <?php
                    endwhile;

                endif;
                ?>

        </ul>
    </div>
    </div>
</section>
<!-- / Blog Section -->