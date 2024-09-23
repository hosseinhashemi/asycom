<?php
/**
  # ===========================================
  # page.php
  #
  # The page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header("inner");
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="corporate-payment">
    <div class="container">
        <h2 class="title"><?php echo get_the_title(); ?></h2>
        <div class="wp-content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php else: ?>

<section class="corporate-payment">
    <div class="container">
        <div class="wp-content">
            <?php esc_html_e('Oops! Seems somethings is wrong ...' , 'asycom') ?>
        </div>
    </div>
</section>

<?php endif; ?>


<?php
/* Load footer.php  */
get_footer();
?>