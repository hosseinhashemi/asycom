<?php
/*
  # ===========================================
  # search.php
  #
  # The Home page template file for search result.
  # ===========================================
 */
?>

<?php
global $wp_query;
  $wp_query->set_404();
  status_header( 404 );
  get_template_part( 404 ); exit();
?>

<?php
/* Load header.php  */
get_header();
?>





<!-- Page Header -->
<header class="bw-intro-header" <?php esc_attr( asycom_header_bg() ); ?> >
    <div class="bw-bg-overlay"></div>
    <div class="bw-bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="bw-site-heading">
                    
                    <h1 class="bw-page-title"><?php 
                    /* translators: %s: the entered text for search */
                    printf( esc_html__( 'Search Results for: %s', 'asycom' ), esc_html(get_search_query()) );
                    ?></h1>
                    
                    <?php the_archive_description( '<span class="bw-subheading">', '</span>' ); ?>
                    
                </div>
            </div>
        </div>
    </div>
</header>


<?php 
$ac_sidebar_archive_layout = esc_html(get_theme_mod('asycom_global_archive_sidebar','right'));

$ac_sidebar_archive_layout_content_col = " col-md-8 ";

if($ac_sidebar_archive_layout == 'none'){
    $ac_sidebar_archive_layout_content_col = " col-md-offset-2";
}
?>





<!-- Main Content -->
<div class="container">
    <div class="row">

        
        <?php  if(esc_html($ac_sidebar_archive_layout) == "left"){ ?>     
                    <div class=" col-md-4">
                        <div class="bw-sidebar">                         
                           <?php get_sidebar(); ?>
                        </div>
                    </div>
                    
                    <?php } ?>
        
        
        <div class="col-md-8 <?php echo esc_attr($ac_sidebar_archive_layout_content_col); ?>">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()) ?>

                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part('content', 'none') ?>
            <?php endif; ?>

            

            <?php
            asycom_pagination();
            ?>

        </div>
        
        
        <?php  if(esc_html($ac_sidebar_archive_layout) == "right"){  ?>
                    
                    <div class=" col-md-4">
                        <div class="bw-sidebar">                         
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


