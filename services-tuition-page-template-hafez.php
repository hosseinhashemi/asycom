<?php

/*
  # ===========================================
  # services-tuition-page-template-hafez.php
  # Template Name: Services Page Tuition Hafez 2023 By ThemePrix
  # The front page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header('inner');
?>

<?php

$tuition_title              = THEMEOPTIONS["tuition_title"];
$tuition_desc               = THEMEOPTIONS["tuition_desc"];
$tuition_image              = THEMEOPTIONS["tuition_image"];
$tuition_button_text        = THEMEOPTIONS["tuition_button_text"];
$tuition_button_link        = THEMEOPTIONS["tuition_button_link"];
$tuition_items              = THEMEOPTIONS["tuition_items"];
$tuition_payment_steps_text = THEMEOPTIONS["tuition_payment_steps_text"];
$tuition_refund_steps_text  = THEMEOPTIONS["tuition_refund_steps_text"];
$tuition_visit_website_text = THEMEOPTIONS["tuition_visit_website_text"];


?>


<section class="tuition">
    <div class="container card-wrapper">


        <?php if( !empty( $tuition_items ) ): ?>
        <?php foreach( $tuition_items as $item) { ?>

        <div class="card">
            <div class="card-logo">
                <?php  if( is_array( $item["tuition_item_logo"]) ) { ?>
                <img src="<?php echo $item["tuition_item_logo"]["url"]; ?>"
                    alt="<?php echo $item["tuition_item_logo"]["alt"]; ?>">
                <?php } ?>
            </div>
            <div class="tabs">
                <ul class="tabs-wrapper">
                    <li data-tab="payment" class="tab active"><?php echo $tuition_payment_steps_text; ?></li>
                    <li data-tab="refund" class="tab"><?php echo $tuition_refund_steps_text; ?></li>
                </ul>
                <div class="contents-wrapper">
                    <div class="content active" data-content="payment">
                        <?php echo $item["tuition_item_payment_steps"]; ?>
                    </div>
                    <div class="content" data-content="refund">
                        <?php echo $item["tuition_item_refund_steps"]; ?>
                    </div>
                </div>
            </div>
            <a rel="nofollow" href="<?php echo $item["tuition_item_university_link"]; ?>"
                class="visit"><?php echo $tuition_visit_website_text; ?></a>
        </div>

        <?php } ?>
        <?php endif; ?>

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