<?php
/*
  # ===========================================
  # author.php
  #
  # The Archive page template file for show Author posts.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>




<!-- Page Header -->
<header class="bw-intro-header" <?php esc_attr( asycom_header_bg() ); ?> >
    <div class="bw-bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">



                <div class="bw-site-heading">

                    <?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>

                    <div class="bw-author-information">

                        <div class="bw-author-avatar">
                            <?php echo get_avatar( esc_html( get_the_author_meta('user_email') ) ); ?>
                        </div>
                        <div class="bw-author-name">
                            <span><?php
                                if ( esc_html(get_the_author_meta('first_name')) ) {
                                    esc_html_e('About', 'asycom');
                                }
                                ?></span> 

                            

                                <span><?php echo esc_html( get_the_author_meta('first_name') ); ?></span> 
                           


                            <?php if ( esc_html( get_the_author_meta('last_name') ) ) { ?>
                                <span><?php echo esc_html(get_the_author_meta('last_name')); ?></span> 
                            <?php } ?>
                        </div>


                        <?php if ( esc_html( get_the_author_meta('description') ) ) { ?>
                            <div class="bw-author-description">
                                <?php echo esc_html( get_the_author_meta('description') ); ?>
                            </div>
                        <?php } ?>

                    </div><!-- author-description -->
                </div>
            </div>
        </div>
    </div>
</header>




<!-- Main Content -->
<div class="container">
    <div class="row">

        <div class="col-md-8 ">


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

        <div class="col-md-3 col-md-offset-1">
            <?php
            get_sidebar();
            ?>
        </div>

    </div>
</div>

<hr>

<?php
/* Load footer.php  */
get_footer();
?>


