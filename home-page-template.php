<?php

/*
  # ===========================================
  # home-pagetemplate.php
  # Template Name: Home Page
  # The front page template file.
  # ===========================================
 */
?>


<?php

/* Load header.php  */
get_header();
?>



<?php
if (!esc_html(get_theme_mod('asycom_hide_hero_section'))) {
    
        get_template_part( 'includes/home-page-sections/section', 'hero' );
}
?>


<?php

if (!get_theme_mod('asycom_hide_services_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'services' );
}
?>


<?php

if (!get_theme_mod('asycom_hide_about_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'about' );
}
?>


<?php

if (!get_theme_mod('asycom_hide_portfolio_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'portfolio' );
}
?>

<?php

if (!get_theme_mod('asycom_hide_cta_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'cta' );
}
?>


<?php

if (!get_theme_mod('asycom_hide_portfolio_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'blog' );
}
?>


<?php

if (!get_theme_mod('asycom_hide_testimonial_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'testimonials' );
}
?>





<?php

if (!get_theme_mod('asycom_hide_team_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'ourteam' );
}
?>


<?php

if (!get_theme_mod('asycom_hide_client_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'clients' );
}
?>


<?php

if (!get_theme_mod('asycom_hide_social_section')) {
    
    get_template_part( 'includes/home-page-sections/section', 'social' );
}
?>





<?php

/* Load footer.php  */
get_footer();


