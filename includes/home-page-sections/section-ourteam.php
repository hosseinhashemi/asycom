<?php
$asycom_main_team_title = get_theme_mod('asycom_main_team_title', __( "OUR TEAM", "asycom" ) );
$asycom_team_sub_title = get_theme_mod('asycom_team_sub_title', __( "Get Familiar With Our Team", "asycom" ) );


$asycom_team_item_pos_1 = get_theme_mod('asycom_team_item_pos_1', __( "CEO", "asycom" ) );
$asycom_team_item_pos_2 = get_theme_mod('asycom_team_item_pos_2', __( "DEVELOPER", "asycom" ) );
$asycom_team_item_pos_3 = get_theme_mod('asycom_team_item_pos_3', __( "DESIGNER", "asycom" ) );
$asycom_team_item_pos_4 = get_theme_mod('asycom_team_item_pos_4', __( "SUPPORT", "asycom" ) );



?>
<!-- Our Team Section-->
<section id="bw-our-team" class="bw-section ">             


    <div class="bw-section__header">
        <h2 class="bw-section__title"><?php echo esc_html($asycom_main_team_title); ?></h2>
        <p class="bw-section__description"><?php echo esc_html($asycom_team_sub_title); ?></p>
    </div>

    <?php

    $asycom_ourteam_pages = array();

    for ( $i = 1; $i <= 4; $i++ ) {

        $current_item = get_theme_mod( 'asycom_ourteam_page_' . $i, false );
        if ( $current_item ) {
            $asycom_ourteam_pages[] = $current_item;
        }
        $current_item = null;
    }
    
    if ( ! empty( $asycom_ourteam_pages ) ) :
    ?>

    <div class="container">

        <div class="row">

        <?php
        
        $args = array(
            'post_type' => 'page',
            'post__in' => (array) $asycom_ourteam_pages,
            'posts_per_page' => 4,
            'orderby' => 'post__in',
        );

        // Run The Loop.
        $query = new WP_Query($args);
        $i = 1;
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
            
            <div class="col-sm-3 col-xs-6">
                <div class="bw-team-item  bw-team-item--<?php echo esc_attr($i); ?> ">
                    <a href="<?php echo esc_url(get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
                        <div class="bw-team-item__img">
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php echo esc_attr( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ); ?>" />
                        </div>

                        <div class="bw-team-item__overlay">
                            <div class="bw-team-item__name"><?php echo esc_html( get_the_title() ); ?></div>
                            <div class="bw-team-item__pos"><?php echo esc_html( get_theme_mod('asycom_team_item_pos_' . $i ) ); ?></div>
                        </div>
                    </a>
                </div>
                <!--/bw-team-item--> 
            </div>
            <!--/col-sm-3-->

         <?php
                $i++;
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        </div>
        <!-- /row-->
    </div>
    <!--/ container-->
<?php
endif;
?>
   
</section>
<!-- / Our Team Section-->