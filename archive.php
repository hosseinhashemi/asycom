<?php
/**
  # ===========================================
  # Archive.php
  # 
  # The Home page template file for show posts.
  # ===========================================
 **/
?>


<?php

global $wp_query;
  $wp_query->set_404();
  status_header( 404 );
  get_template_part( 404 ); exit();



/* Load header.php  */
get_header('inner');
?>

<div class="page-content container">
    <div class="main">
        <div class="card-wrapper">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', get_post_format()) ?>

            <?php endwhile; ?>

            <?php else : ?>
            <?php get_template_part('content', 'none') ?>
            <?php endif; ?>


        </div>

        <?php asycom_pagination(); ?>
    </div>
    <div>
        <aside class="sidebar-blog">
            <?php get_sidebar(); ?>
        </aside>
    </div>

</div>



















<?php
/* Load footer.php  */
get_footer();
?>