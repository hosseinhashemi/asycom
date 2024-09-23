<?php
/*
  # ===========================================
  # 
  # Home Page Hero Section
  # 
  # ===========================================
 */
?>
<?php 
$asycom_hero_btn_txt = get_theme_mod('asycom_hero_btn_txt', __( "Read More", "asycom" ) );
$home_page_title = THEMEOPTIONS['home_page_title'];
$home_page_description = THEMEOPTIONS['home_page_description'];
$home_page_read_more_text = THEMEOPTIONS['home_page_read_more_text'];
$home_page_read_more_link = THEMEOPTIONS['home_page_read_more_link'];
?>
<!--  Hero Section -->
<section class="hero">
    <div class="text-box container">
        <h1 class="title"><?php echo $home_page_title; ?></h1>
        <p class="desc"><?php echo $home_page_description; ?></p>
        <a href="<?php echo $home_page_read_more_link; ?>" class="readmore">
            <span class="text"><?php echo $home_page_read_more_text; ?></span>
        </a>
    </div>
</section>
<!-- / Hero Section -->