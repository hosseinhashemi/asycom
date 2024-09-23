<?php
/*
  # ===========================================
  # index.php
  #
  # The main template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>


<!-- Page Header -->
<header class="bw-intro-header" <?php asycom_header_bg(); ?> >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
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
                <?php get_template_part('content', 'right') ?>
            <?php endif; ?>

            

            <?php
            asycom_pagination();
            ?>

        </div>

        <div class="col-md-2 col-lg-4">
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


