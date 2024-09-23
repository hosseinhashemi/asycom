<?php
/*
  # ===========================================
  # content.php
  #
  # The standard content template.
  # ===========================================
 */

$asycom_blog_hide_cats    = wp_validate_boolean(get_theme_mod('asycom_blog_hide_cats', false));
$asycom_blog_hide_tags    = wp_validate_boolean(get_theme_mod('asycom_blog_hide_tags', false));
$asycom_blog_hide_excerpt = wp_validate_boolean(get_theme_mod('asycom_blog_hide_excerpt', false));

$post_date_month_name = get_the_date( 'M' ); 
$post_date_day_number = get_the_date( 'd' );
if (has_post_thumbnail()) {
    $asysom_post_image_url = get_the_post_thumbnail_url(get_the_ID(),'large');
    $asycom_image_id       = get_post_thumbnail_id();
    $asycom_image_alt      = get_post_meta($asycom_image_id, '_wp_attachment_image_alt', TRUE);
}
?>

<div class="card-blog type-1">
    <div class="image-box">
        <?php if (has_post_thumbnail()) { ?>
        <img src="<?php echo esc_url($asysom_post_image_url); ?>" class="thumbnail"
            alt="<?php echo esc_attr($asycom_image_alt); ?>">
        <?php } ?>
        <time class="date-modified" datetime="">
            <span class="day"><?php echo $post_date_day_number; ?></span>
            <span class="month"><?php echo $post_date_month_name; ?></span>
        </time>
    </div>
    <div class="text-box">
        <!-- <a href="#" class="category">Travel</a> -->
        <?php asycom_category_list(); ?>
        <h3 class="title"><?php echo esc_html( get_the_title() ); ?></h3>
        <p class="excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
        <div class="bottom">
            <a href="<?php esc_url(the_permalink()); ?>" class="read-more">Read More</a>
        </div>
    </div>
</div>