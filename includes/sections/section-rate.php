<?php
/*
  # ===========================================
  # 
  # faq Section
  # 
  # ===========================================
 */
?>
<?php 
$faq_title = THEMEOPTIONS['faq_title'];
$faq_items = THEMEOPTIONS['faq_items' ];
$faq_image = THEMEOPTIONS['faq_image'];
?>
<style>

</style>
<!--  faq Section -->
<section class="exchange-rate" >
    <div class="container">
        <h3 class="exchange-rate__title">Exchange Rates</h3>
        <div class="exchange-rate__wrapper">
            <?php echo do_shortcode("[prix_rates_show_table]"); ?>
        </div>
    </div>
</section>
<!-- / faq Section -->