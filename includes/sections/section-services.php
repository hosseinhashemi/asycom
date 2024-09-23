<?php
/*
  # ===========================================
  # 
  # Services Section
  # 
  # ===========================================
 */
?>

<?php
$our_services_title       = THEMEOPTIONS['our_services_title'];
$our_services_description = THEMEOPTIONS['our_services_description'];
$our_services_items       = THEMEOPTIONS['our_services_items'];
?>
<!--  Services Section -->
<section class="services">
    <div class="container">
        <div class="title-wrapper">
            <h2 class="main"><?php echo $our_services_title ?></h2>
            <p class="desc"><?php echo $our_services_description ?></p>
        </div>
        <ul class="card-wrapper">
            <?php if( !empty( $our_services_items ) ): ?>
            <?php foreach( $our_services_items as $item) { ?>
            <?php 
	$item_title = $item['our_service_item_title'];
	if ( $item_title != "Individual payments" && $item_title != "Crypto Currency") :
                
                $item_link = $item['our_service_item_page_link'];
                $item_image_id = $item['our_service_item_logo']['id'];
                $item_image_alt = get_post_meta($item_image_id, '_wp_attachment_image_alt', TRUE);
                $item_image = wp_get_attachment_image_src($item_image_id, 'full');
            ?>
            <li>
                <a href="<?php echo $item_link; ?>" class="card">
                    <div class="icon">
                        <img alt="<?php echo $item_image_alt; ?>" src="<?php echo $item_image[0]; ?>" />
                    </div>
                    <div class="title"><?php echo $item['our_service_item_title']; ?></div>
                </a>
            </li>
			<?php endif; ?>
            <?php } ?>
            <?php endif; ?>

        </ul>
    </div>
</section>
<!-- / Services Section -->