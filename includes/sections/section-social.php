<?php
/*
  # ===========================================
  # 
  # Social Section
  # 
  # ===========================================
 */
?>

<?php
$social_title        = THEMEOPTIONS["social_title"];
$social_network_item = THEMEOPTIONS["social_network_item"];
$social_slogans      = THEMEOPTIONS["social_slogans"];

?>
<!--  Social Section -->
<section class="follow-us">
    <div class="top">
        <div class="container">

            <?php if( !empty( $social_slogans ) ) : ?>
            <?php foreach ( $social_slogans as $item ) { ?>
            <?php 
        $item_name = $item['social_slogan_item_text'];
        $item_image = $item['social_slogan_item_image'];
        ?>
            <div class="card">
                <div class="icon">
                    <img src="<?php echo $item_image['url'];?>" alt="<?php echo $item_image['alt'];?>">
                </div>
                <div class="title"><?php echo $item_name;?></div>
            </div>

            <?php } ?>
            <?php endif; ?>

        </div>
    </div>
    <div class="main">
        <div class="text-box container">
            <div class="title"><?php echo $social_title; ?></div>
            <div class="social">

                <?php if( !empty( $social_network_item ) && get_language_shortcode() != 'en' ) : ?>
                <?php foreach ( $social_network_item as $item ) { ?>
                <?php 
                $item_name = $item['social_network_item_name'];
                $item_link = $item['social_network_item_link'];
                $item_image = $item['social_network_item_icon'];
                ?>
                <a href="<?php echo $item_link;?>" title="Follow Hafez On <?php echo $item_name;?>">
                    <img src="<?php echo $item_image['url'];?>" alt="<?php echo $item_image['url'];?>">
                </a>
                <?php } ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- / Social Section -->