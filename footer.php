<?php
/*
  # ===========================================
  # footer.php
  #
  # footer contents.
  # ===========================================
 */
?>
<?php
$social_network_item = THEMEOPTIONS['social_network_item'];
$contact_bar_items = THEMEOPTIONS['contact_bar_items'];
$instagram_slider_items = THEMEOPTIONS["instagram_slider_items"];
?>

</main>
<footer>
    <div class="contact-us">
        <div class="container">

            <?php if( !empty( $contact_bar_items ) ) : ?>
            <?php foreach ( $contact_bar_items as $item ) { ?>
            <div class="card">

                <div class="title">
                    <div class="icon">
                        <img src="<?php echo $item["contact_bar_image"]["url"]; ?>"
                            alt="<?php echo $item["contact_bar_image"]["alt"]; ?>">
                    </div>
                    <span class="text"><?php echo $item["contact_bar_title"]; ?> </span>
                </div>


                <div class="call-numbers">
                    <?php foreach ( $item["contact_bar_item_values"] as $value ) { ?>

                    <a
                        href="<?php echo $value["contact_bar_item_single_link"]; ?>"><?php echo $value["contact_bar_item_single_value"]; ?></a>

                    <?php } ?>
                </div>

            </div>


            <?php } ?>
            <?php endif; ?>



        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="left">


                <?php
            $custom_logo_image_id = get_theme_mod( 'custom_logo' );
            $custom_logo_image = wp_get_attachment_image_src( $custom_logo_image_id , 'full' );
            $custom_logo_alt = get_post_meta($custom_logo_image_id, '_wp_attachment_image_alt', TRUE);
            ?>

                <a href="<?php echo get_home_url(); ?>" class="logo" aria-label="Home Url">
                    <img src="<?php echo $custom_logo_image[0]; ?>" alt="<?php echo $custom_logo_alt; ?>" width="180">
                </a>

                <div class="social-wrapper">
                    <div class="title">Follow us on social media</div>
                    <div class="social">
                        <?php if( !empty( $social_network_item ) ) : ?>
                        <?php foreach ( $social_network_item as $item ) { ?>
                        <?php 
                $item_name = $item['social_network_item_name'];
                $item_link = $item['social_network_item_link'];
                $item_image = $item['social_network_item_icon'];
                ?>
                        <a href="<?php echo $item_link;?>" title="Follow Hafez On <?php echo $item_name;?>">
                            <img src="<?php echo $item_image['url'];?>" alt="<?php echo $item_image['url'];?>">
                        </a>
                        <?php } ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <div class="footer-menu">
                <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-1">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <?php } ?>
            </div>
            <div class="instagram">
                <div class="title">Instagram</div>
                <ul>

                    <?php if( is_array( $instagram_slider_items ) ) : ?>
                    <?php foreach ( $instagram_slider_items as $item ) { ?>

                    <li>
                        <a href="https://www.instagram.com/sarafy_hafez">
                            <img src="<?php echo $item["instagram_slider_item_image"]["url"]; ?>"
                                alt="<?php echo $item["instagram_slider_item_image"]['alt']; ?>">
                            <span class="text">See More</span>
                        </a>
                    </li>

                    <?php } ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <small>Copyright © <?php echo date("Y"); ?> Hafez Company. All Rights Reserved. Website Design By <a
                    href="https://themeprix.com/" rel="follow" title="Website Design In Canada">ThemePrix</a></small>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>


</body>

</html>