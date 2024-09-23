<?php
/*
  # ===========================================
  # Single.php
  #
  # The Single post template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
if(is_single()){
	global $wp_query;
  $wp_query->set_404();
  status_header( 404 );
  get_template_part( 404 ); 
	exit();
}
get_header("inner");

?>


<?php
$post_date_month_name = get_the_date( 'M' ); 
$post_date_day_number = get_the_date( 'd' ); 

$author_name = THEMEOPTIONS["author_name"];
$author_description = THEMEOPTIONS["author_description"];
$author_image = THEMEOPTIONS["author_image"];

?>
<div class="page-content container">
    <div class="main">
        <div class="thumbnail">
            <?php
                    $asycom_image_medium_full = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    if (has_post_thumbnail()) { 
                        $asycom_image_id = get_post_thumbnail_id();
                        $asycom_image_alt = get_post_meta($asycom_image_id, '_wp_attachment_image_alt', TRUE);
                    ?>
            <img src="<?php echo esc_url($asycom_image_medium_full[0]); ?>"
                alt="<?php echo esc_attr($asycom_image_alt); ?>">
            <?php } ?>
            <time class="date-modified" datetime="">
                <span class="day"><?php echo $post_date_day_number; ?></span>
                <span class="month"><?php echo $post_date_month_name; ?></span>
            </time>
        </div>

        <?php asycom_category_list(array("tags"=> true,"cats"=> true)); ?>

        <div class="wp-content">
            <h2><?php echo get_the_title(); ?></h2>
            <?php the_content(); ?>
        </div>

        <!-- author-box -->
        <div class="author-box">
            <div class="image-box">

                <img src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>">
            </div>
            <div class="text-box">
                <address class="name"><?php echo $author_name; ?></address>
                <p class="desc"><?php echo $author_description; ?></p>
            </div>
            <div class="social">
                <div class="date"><?php the_date( 'd M Y' ) ?></div>
                <ul>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.275" height="20.121"
                                viewBox="0 0 24.275 20.121">
                                <path id="Icon-tweeter"
                                    d="M24.158,13.615a9.807,9.807,0,0,1-2.862.8,5.077,5.077,0,0,0,2.191-2.81,9.881,9.881,0,0,1-3.163,1.231,4.924,4.924,0,0,0-3.634-1.6,5.031,5.031,0,0,0-4.981,5.079,5.185,5.185,0,0,0,.131,1.158A14.051,14.051,0,0,1,1.572,12.162a5.158,5.158,0,0,0,1.542,6.785A4.9,4.9,0,0,1,.857,18.31v.064a5.063,5.063,0,0,0,3.994,4.982,4.9,4.9,0,0,1-1.311.177,4.707,4.707,0,0,1-.938-.093,5.005,5.005,0,0,0,4.652,3.529,9.859,9.859,0,0,1-6.185,2.173,9.615,9.615,0,0,1-1.186-.071,13.871,13.871,0,0,0,7.634,2.283c9.16,0,14.17-7.74,14.17-14.451,0-.22-.006-.442-.013-.658A10.236,10.236,0,0,0,24.158,13.615Z"
                                    transform="translate(0.117 -11.234)" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.917" height="18.917"
                                viewBox="0 0 18.917 18.917">
                                <path id="Icon-Instagram"
                                    d="M11.589,6A5.6,5.6,0,0,0,6,11.589v7.739a5.6,5.6,0,0,0,5.589,5.589h7.739a5.6,5.6,0,0,0,5.589-5.589V11.589A5.6,5.6,0,0,0,19.328,6Zm9.029,3.44a.86.86,0,1,1-.86.86A.862.862,0,0,1,20.618,9.44Zm-5.159,1.29a4.729,4.729,0,1,1-4.729,4.729A4.732,4.732,0,0,1,15.459,10.729Zm0,.86a3.869,3.869,0,1,0,3.869,3.869A3.875,3.875,0,0,0,15.459,11.589Z"
                                    transform="translate(-6 -6)" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.123" height="17.123"
                                viewBox="0 0 17.123 17.123">
                                <path id="Icon-whatsaap"
                                    d="M10.561,2A8.561,8.561,0,0,0,3.1,14.764L2.014,18.65a.372.372,0,0,0,.358.473.383.383,0,0,0,.089-.011l4.056-1A8.561,8.561,0,1,0,10.561,2Zm4.307,11.582a2.263,2.263,0,0,1-1.484,1.032A3.055,3.055,0,0,1,12,14.528a12.881,12.881,0,0,1-1.253-.457,9.755,9.755,0,0,1-3.755-3.277,4.194,4.194,0,0,1-.9-2.245,2.421,2.421,0,0,1,.769-1.811.812.812,0,0,1,.586-.272c.147,0,.293,0,.421.008s.316-.051.495.373.623,1.5.677,1.612a.4.4,0,0,1,.019.38,1.463,1.463,0,0,1-.22.362c-.11.127-.231.283-.33.38s-.224.226-.1.443a6.54,6.54,0,0,0,1.223,1.5,6.026,6.026,0,0,0,1.767,1.077c.22.109.348.09.476-.054s.549-.634.7-.851.293-.181.495-.109,1.282.6,1.5.706.366.163.421.253A1.789,1.789,0,0,1,14.868,13.582Z"
                                    transform="translate(-2 -2)" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /author-box -->
    </div>
    <div>
        <aside class="sidebar-blog">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>



<?php
/* Load footer.php  */
get_footer();
?>