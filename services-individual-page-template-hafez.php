<?php

/*
  # ===========================================
  # services-individual-page-template-hafez.php
  # Template Name: Services Page Individual Payment Hafez 2023 By ThemePrix
  # The front page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header('inner');
?>

<?php


$individual_payment_title = THEMEOPTIONS["individual_payment_title"];
$individual_payment_desc  = THEMEOPTIONS["individual_payment_desc"];
$individual_payment_image = THEMEOPTIONS["individual_payment_image"];

$individual_payment_items_1 = THEMEOPTIONS["individual_payment_items_1"];

$individual_payment_one_title = THEMEOPTIONS["individual_payment_one_title"];
$individual_payment_one_desc  = THEMEOPTIONS["individual_payment_one_desc"];
$individual_payment_one_image = THEMEOPTIONS["individual_payment_one_image"];

$individual_payment_two_title = THEMEOPTIONS["individual_payment_two_title"];
$individual_payment_two_desc  = THEMEOPTIONS["individual_payment_two_desc"];
$individual_payment_two_image = THEMEOPTIONS["individual_payment_two_image"];

$individual_payment_items_2 = THEMEOPTIONS["individual_payment_items_2"];
$individual_payment_notice_items      = THEMEOPTIONS["individual_payment_notice_items"];
$individual_payment_notice_two_items  = THEMEOPTIONS["individual_payment_notice_two_items"];


?>

<!-- Header -->
<section class="text-image container">
    <div class="text-box">
        <h2 class="title"><?php echo $individual_payment_title; ?></h2>
        <p class="desc"><?php echo $individual_payment_desc; ?></p>
    </div>
    <div class="image-box">
        <img src="<?php echo $individual_payment_image["url"]; ?>"
            alt="<?php echo $individual_payment_image["alt"]; ?>" />
    </div>
</section>
<!-- / Header -->

<section class="ac-normal-content">
    <div class="container">
        <h2 class="title"><?php echo $individual_payment_one_title; ?></h2>
        <div class="wp-content">
            <p><?php echo $individual_payment_one_desc; ?></p>
        </div>
    </div>
</section>

<section class="services-tiles">

    <?php if( !empty( $individual_payment_items_1 ) ): ?>
    <?php foreach( $individual_payment_items_1 as $item) { ?>

    <div class="card">


        <div class="image-box">

            <?php 

            
            if( is_array( $item["individual_payment_item_background"]) ) { ?>
            <img src="<?php echo $item["individual_payment_item_background"]["url"]; ?>"
                alt="<?php echo $item["individual_payment_item_background"]["alt"]; ?>">
            <?php } ?>
        </div>
        
        
        <div class="text-box">
            <div class="icon icon-type--one">
                <?php
                //var_dump($item["individual_payment_item_icon"]);
                $icon_url = wp_get_attachment_image_src( $item["individual_payment_item_icon"], 'full' );
                $icon_alt = get_post_meta($item["individual_payment_item_icon"], '_wp_attachment_image_alt', TRUE);
                 ?>
                <img src="<?php echo $icon_url[0]; ?>"
                    alt="<?php echo $icon_alt; ?>">
               
            </div>

            <h3 class="title"><?php echo $item["individual_payment_item_title"]; ?></h3>
            <p class="desc"><?php echo $item["individual_payment_item_desc"]; ?></p>
        </div>
    </div>

    <?php } ?>
    <?php endif; ?>

</section>




<section class="services-box container">
    <?php if( !empty( $individual_payment_notice_items ) ): ?>
    <?php foreach( $individual_payment_notice_items as $item) { ?>

    <div class="card">
        <div class="icon"></div>
        <div class="text-box">
            <h2 class="title"><?php echo $item["individual_payment_notice_item_title"]; ?></h2>
            <p class="desc"><?php echo $item["individual_payment_notice_item_desc"]; ?></p>
        </div>
    </div>

    <?php } ?>
    <?php endif; ?>

</section>

<!-- TimeTable -->
<?php if( is_array($individual_payment_one_image)) { ?>
<section class="ac-normal-content">
    <div class="container">
        <img class="timetable-image" src="<?php echo $individual_payment_one_image["url"]; ?>"
            alt="<?php echo $individual_payment_one_image["alt"]; ?>" />
    </div>
</section>
<?php } ?>
<!-- / TimeTable -->


<section class="ac-normal-content">
    <div class="container">
        <h2 class="title"><?php echo $individual_payment_two_title; ?></h2>
        <div class="wp-content">
            <p><?php echo $individual_payment_two_desc; ?></p>
        </div>
    </div>
</section>

<!-- Items 2 -->
<section class="services-tiles type--two">

    <?php if( !empty( $individual_payment_items_2 ) ): ?>
    <?php foreach( $individual_payment_items_2 as $item) { ?>

    <div class="card">


        <div class="image-box">
            <?php  if( is_array( $item["individual_payment_item_background"] ) ) { ?>
            <img src="<?php echo $item["individual_payment_item_background"]["url"]; ?>"
                alt="<?php echo $item["individual_payment_item_background"]["alt"]; ?>">
            <?php } ?>
        </div>
        <div class="text-box">
            <div class="icon">
                <?php if( is_array( $item["individual_payment_item_icon"] ) ) { ?>
                <img src="<?php echo $item["individual_payment_item_icon"]["url"]; ?>" alt="<?php echo $item["individual_payment_item_icon"]["alt"]; ?>">
                <?php } ?>
            </div>

            <h3 class="title"><?php echo $item["individual_payment_item_title"]; ?></h3>
            <p class="desc"><?php echo $item["individual_payment_item_desc"]; ?></p>
        </div>
    </div>

    <?php } ?>
    <?php endif; ?>

</section>
<!-- / Items 2 -->




<!-- Notices -->
<section class="services-box container">

    <?php if( !empty( $individual_payment_notice_two_items ) ): ?>
    <?php foreach( $individual_payment_notice_two_items as $item) { ?>

    <div class="card">
        <div class="icon"></div>
        <div class="text-box">
            <h2 class="title"><?php echo $item["individual_payment_notice_item_title"]; ?></h2>
            <p class="desc"><?php echo $item["individual_payment_notice_item_desc"]; ?></p>
        </div>
    </div>

    <?php } ?>
    <?php endif; ?>

</section>

<!-- TimeTable -->
<?php if( is_array($individual_payment_two_image)) { ?>
<section class="ac-normal-content">
    <div class="container">
        <img class="timetable-image" src="<?php echo $individual_payment_two_image["url"]; ?>"
            alt="<?php echo $individual_payment_two_image["alt"]; ?>" />
    </div>
</section>
<?php } ?>
<!-- / TimeTable -->


<?php
    get_template_part( 'includes/sections/section', 'instagram-slider' );
    get_template_part( 'includes/sections/section', 'reviews' );
    get_template_part( 'includes/sections/section', 'faq' );
?>

<?php

/* Load footer.php  */
get_footer();