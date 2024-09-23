<?php
/*
  # ===========================================
  # home.php
  #
  # The Home page template file for show posts.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>




<!-- Page Header -->

<header class="bw-intro-header" <?php asycom_header_bg(); ?> >
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="bw-site-heading">
                    <h1><?php esc_html_e("BLOG", 'asycom'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>



<?php
$ac_sidebar_bloglist_layout = get_theme_mod('asycom_global_bloglist_sidebar', 'right');

$ac_sidebar_bloglist_layout_content_col = " col-md-8 ";

if ($ac_sidebar_bloglist_layout == 'none') {
    $ac_sidebar_bloglist_layout_content_col = " col-md-offset-2";
}
?>



<!-- Main Content -->
<div class="container">
    <div class="row">

        
        
        <?php  if(esc_html($ac_sidebar_bloglist_layout) == "left"){ ?>     
                    <div class=" col-md-4">
                        <div class="ac-sidebar">                         
                           <?php get_sidebar(); ?>
                        </div>
                    </div>
                    
                    <?php } ?>
        
        
        
        <div class="col-md-8  <?php echo esc_attr($ac_sidebar_bloglist_layout_content_col); ?> ">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()) ?>
                    <div class="bw-wp-link-page"><?php wp_link_pages(); ?></div> 

                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part('content', 'none') ?>
            <?php endif; ?>



            <?php
            asycom_pagination();
            ?>

        </div>
        
        
        
        <?php  if($ac_sidebar_bloglist_layout == "right"){  ?>
                    
                    <div class=" col-md-4">
                        <div class="ac-sidebar">                         
                           <?php get_sidebar(); ?>
                        </div>
                    </div>
                    
                    <?php } ?>



    </div>
</div>

<hr>

<?php
/* Load footer.php  */
get_footer();
?>


