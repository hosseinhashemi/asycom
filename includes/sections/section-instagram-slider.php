<?php
/*
  # ===========================================
  # 
  # Instagram Slider Section
  # 
  # ===========================================
 */
?>

<?php 

$instagram_slider_title  = THEMEOPTIONS["instagram_slider_title"];
$instagram_slider_desc   = THEMEOPTIONS["instagram_slider_desc"];
$instagram_slider_frame  = THEMEOPTIONS["instagram_slider_frame"];
$instagram_slider_items = THEMEOPTIONS["instagram_slider_items"];

?>
<!--  Instagram Slider Section -->
<section class="latest-instagram">
    <div class="container">
        <div class="text-box">
            <h2 class="title"><?php echo $instagram_slider_title; ?></h2>
            <p class="desc"><?php echo $instagram_slider_desc; ?></p>
        </div>
        <div class="splide slider-box">

            <?php if ( is_array( $instagram_slider_frame ) ) : ?>
            <img class="mobile-vector" src="<?php echo $instagram_slider_frame["url"]; ?>"
                alt="<?php echo $instagram_slider_frame['alt']; ?>">
            <?php endif; ?>

            <div class="splide__track">
                <ul class="splide__list">

                    <?php if( is_array( $instagram_slider_items ) ) : ?>
                    <?php foreach ( $instagram_slider_items as $item ) { ?>

                    <li class="splide__slide">
                        <a href="https://www.instagram.com/sarafy_hafez">
                            <img src="<?php echo $item["instagram_slider_item_image"]["url"]; ?>"
                                alt="<?php echo $item["instagram_slider_item_image"]['alt']; ?>">
                        </a>
                    </li>

                    <?php } ?>
                    <?php endif; ?>


                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / Instagram Slider Section -->