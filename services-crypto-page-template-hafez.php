<?php

/**
  # ================================================================
  # services-crypto-page-template-hafez.php
  # Template Name: Services Page Crypto Hafez 2023 By ThemePrix
  # The front page template file.
  # ================================================================
 */
?>


<?php
/* Load header.php  */
get_header('inner');
?>

<?php
$crypto_buy_title     = THEMEOPTIONS["crypto_buy_title"];
$crypto_buy_desc      = THEMEOPTIONS["crypto_buy_desc"];
$crypto_buy_image     = THEMEOPTIONS["crypto_buy_image"];
$crypto_buy_btn_text  = THEMEOPTIONS["crypto_buy_btn_text"];
$crypto_buy_btn_link  = THEMEOPTIONS["crypto_buy_btn_link"];
$crypto_sell_title    = THEMEOPTIONS["crypto_sell_title"];
$crypto_sell_desc     = THEMEOPTIONS["crypto_sell_desc"];
$crypto_sell_image    = THEMEOPTIONS["crypto_sell_image"];
$crypto_sell_btn_text = THEMEOPTIONS["crypto_sell_btn_text"];
$crypto_sell_btn_link = THEMEOPTIONS["crypto_sell_btn_link"];
$crypto_items         = THEMEOPTIONS["crypto_items"];

// crypto_items
// crypto_item_title
// crypto_item_image


?>


<section class="text-image container">
    <div class="text-box">
        <h2 class="title"><?php echo $crypto_buy_title; ?></h2>
        <p class="desc"><?php echo $crypto_buy_desc; ?></p>
        <a href="<?php echo $crypto_buy_btn_link; ?>" class="readmore"><?php echo $crypto_buy_btn_text; ?></a>
    </div>
    <div class="image-box">
        <img src="<?php echo $crypto_buy_image["url"]; ?>" alt="<?php echo $crypto_buy_image["alt"]; ?>" />
    </div>
</section>

<section class="crypto-boxes">
    <div class="box-wrapper container">
        <?php if( !empty( $crypto_items ) ): ?>
        <?php foreach( $crypto_items as $item) { ?>

        <div class="box">
            <?php  if( is_array( $item["crypto_item_image"]) ) { ?>
            <img src="<?php echo $item["crypto_item_image"]["url"]; ?>"
                alt="<?php echo $item["crypto_item_image"]["alt"]; ?>">
            <?php } ?>
            <p class="desc"><?php echo $item["crypto_item_title"]; ?></p>
        </div>
        <!-- box -->
        <?php } ?>
        <?php endif; ?>

    </div>
</section>

<?php
    get_template_part( 'includes/sections/section', 'experience' );
?>

<section class="text-image container">
    <div class="image-box">
        <img src="<?php echo $crypto_sell_image["url"]; ?>" alt="<?php echo $crypto_sell_image["alt"]; ?>" />
    </div>
    <div class="text-box">
        <h2 class="title"><?php echo $crypto_sell_title; ?></h2>
        <p class="desc"><?php echo $crypto_sell_desc; ?></p>
        <a href="<?php echo $crypto_sell_btn_link; ?>" class="readmore"><?php echo $crypto_sell_btn_text; ?></a>
    </div>

</section>

<?php
    get_template_part( 'includes/sections/section', 'instagram-slider' );
    get_template_part( 'includes/sections/section', 'reviews' );
    get_template_part( 'includes/sections/section', 'faq' );
?>

<?php

/* Load footer.php  */
get_footer();