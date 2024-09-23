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
<!--  faq Section -->
<section class="faq-wrapper">
	
	<?php if ( get_language_shortcode() != 'en' ) : ?>
	
    <div class="container">
        <div class="image-box">
            <img src="<?php echo $faq_image["url"]; ?>" alt="<?php echo $faq_image["alt"]; ?>">
            <div class="title"><?php echo $faq_title; ?></div>
        </div>
        <dl class="faq">

            <?php if( !empty( $faq_items ) ) : ?>
            <?php foreach ( $faq_items as $key => $item ) { ?>
            <div class="item <?php echo ( $key == 0 ) ? "active" : ""; ?> ">
                <dt class="header"><?php echo $item["faq_items_question"]; ?></dt>
                <dd class="content"><?php echo $item["faq_items_answer"]; ?></dd>
                <div class="toggle"></div>
            </div>
            <?php } ?>
            <?php endif; ?>

        </dl>
    </div>
	
	<?php endif; ?>
</section>
<!-- / faq Section -->