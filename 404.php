<?php
/*
  # ===========================================
  # 404.php
  #
  # The page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header('hero');
?>



        <header class="bw-intro-header" style="margin:50px 0">
            <div class="bw-bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="bw-post-heading">
                            <h1><?php esc_html_e( '404 - Oops! That page can&rsquo;t be found.', 'asycom' ); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>


<?php 
$ac_sidebar_page_layout = esc_html( get_theme_mod('asycom_global_page_sidebar','none') );

$ac_sidebar_page_layout_content_col = " col-md-8 ";

if($ac_sidebar_page_layout == 'none'){
    $ac_sidebar_page_layout_content_col = " col-md-offset-2";
}
?>

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    
               <?php  if($ac_sidebar_page_layout == "left"){ ?>     
                    <div class=" col-md-4">
                        <div class="bw-sidebar">                         
                           <?php get_sidebar(); ?>
                        </div>
                    </div>
                    
                    <?php } ?>
                    
                    <div class="col-md-8 <?php echo esc_attr($ac_sidebar_page_layout_content_col); ?> ">
                        <div class="alert alert-warning text-center bw-404-content">
                            <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search.', 'asycom' ); ?>
                            <div class="bw-404-search-form">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                        
                        
                        
                        
                    </div><!-- col -->
               
                    <?php  if($ac_sidebar_page_layout == "right"){  ?>
                    
                    <div class=" col-md-4">
                        <div class="bw-sidebar">                         
                           <?php get_sidebar(); ?>
                        </div>
                    </div>
                    
                    <?php } ?>
                    
                </div> <!-- row -->
            </div><!-- container -->
        </article>




<?php
/* Load footer.php  */
get_footer();
?>


