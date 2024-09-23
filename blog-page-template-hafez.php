<?php

/**
  # ===========================================
  # blog-page-template-hafez.php
  # Template Name: Main Blog Hafez 2023 By ThemePrix
  # The front page template file.
  # ===========================================
 */
?>
<?php 
global $wp_query;
  $wp_query->set_404();
  status_header( 404 );
  get_template_part( 404 ); 
exit();
?>

<?php
/* Load header.php  */
get_header('inner');
?>

<?php
$asycom_blog_item_count = 9;
?>

<div class="page-content container">
    <div class="main">
        <div class="card-wrapper">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $args = array(
                    'posts_per_page' => absint($asycom_blog_item_count),
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()):
                while ($the_query->have_posts()) : $the_query->the_post();
                $asycom_image_medium_blog = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                $asycom_image_alt = "";
                $post_date_month_name = get_the_date( 'M' ); 
                $post_date_day_number = get_the_date( 'd' ); 
                ?>

            <div class="card-blog type-2">
                <div class="image-box">
                    <?php
                    $asycom_image_medium_large = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                    if (has_post_thumbnail()) { 
                        $asycom_image_id = get_post_thumbnail_id();
                        $asycom_image_alt = get_post_meta($asycom_image_id, '_wp_attachment_image_alt', TRUE);
                    ?>
                    <img src="<?php echo esc_url($asycom_image_medium_large[0]); ?>" class="thumbnail"
                        alt="<?php echo esc_attr($asycom_image_alt); ?>">
                    <?php } ?>

                    <time class="date-modified" datetime="">
                        <span class="day"><?php echo $post_date_day_number; ?></span>
                        <span class="month"><?php echo $post_date_month_name; ?></span>
                    </time>
                </div>
                <div class="text-box">
                    <h3 class="title"><?php echo esc_html(get_the_title()); ?></h3>
                    <p class="excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
                    <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="read-more">Read More</a>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>


        </div>
        <?php 
        $pagination =  paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $the_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'array',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( '<', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( '>', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );


        if (is_array($pagination)) {

            echo '<div class="pagination">';

            foreach ($pagination as $page) {

                if (strpos($page, 'current')) {
                    echo '<span class="page current">' . $page  . '</span>';
                } else {
                    echo '<span class="page">' .  $page  . '</span>';
                }
            }

            echo '</div>';
        }
        ?>
        <?php //asycom_pagination(); ?>
    </div>
    <div>
        <aside class="sidebar-blog">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>
<?php
    
    get_template_part( 'includes/sections/section', 'faq' );
    get_template_part( 'includes/sections/section', 'reviews' );
?>

<?php

/* Load footer.php  */
get_footer();