

<!-- social-networks-->

<?php
$asycom_main_social_title = esc_html(get_theme_mod('asycom_main_social_title', __( 'Get In Touch', 'asycom' ) ));
$asycom_social_sub_title = esc_html(get_theme_mod('asycom_social_sub_title', __( 'Follow Us On Social Networks', 'asycom' )));
$asycom_social_cf_shortcode = get_theme_mod('asycom_social_cf_shortcode');

$asycom_social_bg = esc_url(get_theme_mod('asycom_social_bg', ""));
$asycom_social_over_bg_color = esc_html(get_theme_mod('asycom_social_over_bg_color', 'rgb(84,104,103)'));


$asycom_social_overlay_css = !empty($asycom_social_over_bg_color) ? 'style="background-color:' . $asycom_social_over_bg_color . '"' : "";


$social_networks = 0;
$arr = array();

$asycom_social_item_url_1 = esc_url(get_theme_mod('asycom_social_item_url_1'));



if (!empty($asycom_social_item_url_1)) {
    $asycom_social_item_logo_1 = esc_url( get_theme_mod( 'asycom_social_item_logo_1' ) );
    
    $asycom_social_array_1 = array('url' => $asycom_social_item_url_1,
        'icon' => $asycom_social_item_logo_1
    );

    array_push($arr, $asycom_social_array_1);

    $social_networks++;
}


$asycom_social_item_url_2 = esc_url(get_theme_mod('asycom_social_item_url_2'));

if (!empty($asycom_social_item_url_2)) {
    $asycom_social_item_logo_2 = esc_url(get_theme_mod('asycom_social_item_logo_2'));

    $asycom_social_array_2 = array('url' => $asycom_social_item_url_2,
        'icon' => $asycom_social_item_logo_2
    );

    array_push($arr, $asycom_social_array_2);

    $social_networks++;
}


$asycom_social_item_url_3 = esc_url(get_theme_mod('asycom_social_item_url_3'));



if (!empty($asycom_social_item_url_3)) {
    $asycom_social_item_logo_3 = esc_url(get_theme_mod('asycom_social_item_logo_3'));
    $asycom_social_array_3 = array('url' => $asycom_social_item_url_3,
        'icon' => $asycom_social_item_logo_3
    );

    array_push($arr, $asycom_social_array_3);
    $social_networks++;
}



$asycom_social_item_url_4 = esc_url(get_theme_mod('asycom_social_item_url_4'));

if (!empty($asycom_social_item_url_4)) {
    $asycom_social_item_logo_4 = esc_url(get_theme_mod('asycom_social_item_logo_4'));

    $asycom_social_array_4 = array('url' => $asycom_social_item_url_4,
        'icon' => $asycom_social_item_logo_4
    );

    array_push($arr, $asycom_social_array_4);

    $social_networks++;
}



$asycom_social_item_url_5 = esc_url(get_theme_mod('asycom_social_item_url_5'));

if (!empty($asycom_social_item_url_5)) {
    $asycom_social_item_logo_5 = esc_url(get_theme_mod('asycom_social_item_logo_5'));

    $asycom_social_array_5 = array('url' => $asycom_social_item_url_5,
        'icon' => $asycom_social_item_logo_5
    );

    array_push($arr, $asycom_social_array_5);

    $social_networks++;
}


$asycom_social_item_url_6 = esc_url(get_theme_mod('asycom_social_item_url_6'));

if (!empty($asycom_social_item_url_6)) {
    $asycom_social_item_logo_6 = esc_url(get_theme_mod('asycom_social_item_logo_6'));

    $asycom_social_array_6 = array('url' => $asycom_social_item_url_6,
        'icon' => $asycom_social_item_logo_6
    );

    array_push($arr, $asycom_social_array_6);

    $social_networks++;
}
?>

<section id="bw-oursocialnetworks" class="bw-section " <?php ! empty($asycom_social_bg) ? asycom_get_background( $asycom_social_bg ) : '' ?> >             




        <div class="bw-section__header">
            <h2 class="bw-section__title"><?php echo esc_html($asycom_main_social_title); ?></h2>
            <p class="bw-section__description"><?php echo esc_html($asycom_social_sub_title); ?></p>
        </div>

        
     
        

        <div class="container">
            
            
            <div class="row">
            
                <div class="bw-contact-form">
                    
                    
                    <?php 

                    if(!empty($asycom_social_cf_shortcode) && is_numeric($asycom_social_cf_shortcode)){
                    echo do_shortcode('[contact-form-7 id="'.(int)$asycom_social_cf_shortcode.'" ]');
                    
                    }
                    ?>
                    
                </div>
                
            </div>
            
            
            
            <div class="row">

                <div class="bw-social__wrapper" >
                    <?php
                    for ($i = 0; $i < $social_networks; $i++) {
                        ?>


                        <div class="bw-social__item">
                            <a class="bw-social__link" href="<?php echo esc_url($arr[$i]["url"]); ?>">
                                <img class="bw-social__img" src="<?php echo esc_url($arr[$i]["icon"]); ?>"  />
                            </a> 
                        </div>



                        <?php
                    }
                    ?>

                </div>







            </div>
            <!-- /row-->
        </div>
        <!--/ container-->

</section>
<!-- / Our Social Networks-->