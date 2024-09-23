<?php

/*
  # ===========================================
  # home-pagetemplate.php
  # Template Name: Home Page Hafez 2023 By ThemePrix
  # The front page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header('hero');
?>

<?php


?>

<?php

    get_template_part( 'includes/sections/section', 'hero' );
    get_template_part( 'includes/sections/section', 'services' );
    get_template_part( 'includes/sections/section', 'video' );
   
    get_template_part( 'includes/sections/section', 'faq' );
    
    if( get_language_shortcode() == 'en') {
        get_template_part( 'includes/sections/section', 'rate' );
    }
    
    get_template_part( 'includes/sections/section', 'reviews' );
   
   get_template_part( 'includes/sections/section', 'social' );
   
    //get_template_part( 'includes/sections/section', 'blog' );
    get_template_part( 'includes/sections/section', 'clients' );


?>

<?php

/* Load footer.php  */
get_footer();