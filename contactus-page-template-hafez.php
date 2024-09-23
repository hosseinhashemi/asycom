<?php

/**
  # ================================================================
  # contactus-page-template-hafez.php
  # Template Name: Contact Us Hafez 2023 By ThemePrix
  # The front page template file.
  # ================================================================
 */
?>


<?php
/* Load header.php  */
get_header('inner');
?>

<?php
$contact_our_location_text      = THEMEOPTIONS["contact_our_location_text"];
$contact_our_location_value     = THEMEOPTIONS["contact_our_location_value"];
$contact_office_number_text     = THEMEOPTIONS["contact_office_number_text"];
$contact_office_number_value    = THEMEOPTIONS["contact_office_number_value"];
$contact_email_address_text     = THEMEOPTIONS["contact_email_address_text"];
$contact_email_address_value    = THEMEOPTIONS["contact_email_address_value"];
$contact_whatsapp_numbers_text  = THEMEOPTIONS["contact_whatsapp_numbers_text"];
$contact_whatsapp_numbers_value = get_field("contact_whatsapp_numbers_value", "options", false);
$contact_form_title             = THEMEOPTIONS["contact_form_title"];
$contact_map_title              = THEMEOPTIONS["contact_map_title"];

?>


<section class="contact-us container">
    <div class="card location">
        <div class="title">
            <div class="icon"></div>
            <span class="text"><?php echo $contact_our_location_text; ?></span>
        </div>
        <address class="cantent">
            <a href="https://goo.gl/maps/B9Rt6Fy2MK8ZfRP76"><?php echo $contact_our_location_value ; ?></a>
        </address>
    </div>
    <div class="card office-numbers">
        <div class="title">
            <div class="icon"></div>
            <span class="text"><?php echo $contact_office_number_text; ?></span>
        </div>
        <div class="content">
            <a href="tel:<?php echo $contact_office_number_value; ?>"><?php echo $contact_office_number_value; ?></a>
        </div>
    </div>
    <div class="card email">
        <div class="title">
            <div class="icon"></div>
            <span class="text"><?php echo $contact_email_address_text; ?></span>
        </div>
        <div class="content">
            <a href="mailto:<?php echo $contact_email_address_value; ?>"><?php echo $contact_email_address_value; ?></a>
        </div>
    </div>
    <div class="card whatsapp">
        <div class="title">
            <div class="icon"></div>
            <span class="text"><?php echo $contact_whatsapp_numbers_text; ?></span>
        </div>
        <div class="content">
            <?php echo $contact_whatsapp_numbers_value; ?>
        </div>
    </div>
</section>
<section class="contact-us-form-wrapper container">
    <div class="form-box">
        <h2 class="section-title"><?php echo $contact_form_title; ?></h2>
        <!-- Add Contact Form Here -->
        <?php echo do_shortcode('[contact-form-7 id="f8cce2a" title="Contact form 1"]'); ?>
    </div>
    <div class="map-box">
        <h2 class="section-title"><?php echo $contact_map_title; ?></h2>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2600.60408514137!2d-123.072116!3d49.321781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486703878b98537%3A0xc75cfdf2497700d7!2s1446%20Lonsdale%20Ave%2C%20North%20Vancouver%2C%20BC%20V7M%202J1%2C%20Canada!5e0!3m2!1sen!2sus!4v1690048820732!5m2!1sen!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="true" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" draggable="false"></iframe>
        </div>
    </div>
</section>



<?php
    get_template_part( 'includes/sections/section', 'experience' );
?>



<?php
    get_template_part( 'includes/sections/section', 'instagram-slider' );
    get_template_part( 'includes/sections/section', 'reviews' );
    get_template_part( 'includes/sections/section', 'faq' );
?>

<?php

/* Load footer.php  */
get_footer();