<?php

/*
  # ===========================================
  # services-page-template-hafez.php
  # Template Name: Services Page(Parent) Hafez 2023 By ThemePrix
  # The front page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header('inner');
?>

<?php
$our_services_title       = THEMEOPTIONS['our_services_title'];
$our_services_btn_text    = THEMEOPTIONS['our_services_btn_text'];
$our_services_description = THEMEOPTIONS['our_services_description'];
$our_services_items       = THEMEOPTIONS['our_services_items'];
?>



<section class="services-inner">
    <div class="container card-wrapper">

        <?php if( !empty( $our_services_items ) ): ?>
        <?php foreach( $our_services_items as $item) { ?>
        <?php 
        
                $item_title = $item['our_service_item_title'];
                $item_link = $item['our_service_item_page_link'];
                $item_image_id = $item['our_service_item_logo']['id'];
                $item_image_alt = get_post_meta($item_image_id, '_wp_attachment_image_alt', TRUE);
                $item_image = wp_get_attachment_image_src($item_image_id, 'full');
                if($item['our_service_item_title'] == "Individual payments" || $item['our_service_item_title'] == "Crypto Currency") {
                    continue;
                }
            ?>

        <div class="card">
            <div class="image-box">

                <img alt="<?php echo $item_image_alt; ?>" src="<?php echo $item_image[0]; ?>" />

            </div>
            <div class="text-box">
                <h2 class="title"><?php echo $item['our_service_item_title']; ?></h2>
                <p class="desc"><?php echo $item['our_service_item_desc']; ?></p>
                <a href="<?php echo $item_link; ?>" class="read-more"><?php echo $our_services_btn_text; ?></a>
            </div>
        </div>

        <?php } ?>
        <?php endif; ?>

    </div>
</section>
<?php
    get_template_part( 'includes/sections/section', 'reviews' );
    get_template_part( 'includes/sections/section', 'faq' );
?>

<?php

/* Load footer.php  */
get_footer();