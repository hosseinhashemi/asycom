<?php
/*
  # ==================================================================
  # full-width-template.php
  # Template Name: Asycom Full Width Template
  # Full Width Template For Page Builders Like Elementor and WP Bakery.
  # ===================================================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="container-fluid bw_full-width">
                <div class="row">

                        <?php the_content(); ?>
                        
                        <?php if(comments_open()){ ?>
                        <div>
                            <?php comments_template(); ?>
                        </div>
                        <?php } ?>


                </div> <!-- row -->
            </div><!-- container -->

    <?php endwhile; ?>

<?php endif; ?>
<hr>



<?php
/* Load footer.php  */
get_footer();
?>


