<?php
/*
  # ===========================================
  # 
  # Review Section
  # 
  # ===========================================
 */
?>

<?php 

$testimonial_title = THEMEOPTIONS['testimonial_title'];
$testimonial_desc  = THEMEOPTIONS['testimonial_desc'];
$testimonial_items = THEMEOPTIONS['testimonial_items'];
?>
<?php //var_dump(get_language_shortcode());exit(); ?>

<!--  Review Section -->
<section class="review">
    <div class="splide container">
        <div class="title-wrapper">
            <h2 class="main"><?php echo $testimonial_title; ?></h2>
            <p class="desc"><?php echo $testimonial_desc; ?></p>
        </div>
        <div class="splide__track">
            <ul class="splide__list">

                <?php if( !empty( $testimonial_items ) ) : ?>
                <?php foreach ( $testimonial_items as $item ) { ?>

                <li class="splide__slide">
                    <div class="card">
                        <div class="text-box">
                            <div class="name"><?php echo $item["testimonial_item_name"]; ?></div>
                            <q class="desc"><?php echo $item["testimonial_item_desc"]; ?></q>
                            <div class="stars rating-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.414" height="28.199"
                                    viewBox="0 0 29.414 28.199">
                                    <path
                                        d="M26.657,15.5l6.357.916a2.2,2.2,0,0,1,1.222,3.747l-4.594,4.488a2.2,2.2,0,0,0-.63,1.946l1.093,6.329a2.2,2.2,0,0,1-3.186,2.32l-5.688-2.982a2.2,2.2,0,0,0-2.045,0l-5.681,3a2.2,2.2,0,0,1-3.191-2.313l1.078-6.332a2.2,2.2,0,0,0-.634-1.944L6.153,20.2a2.2,2.2,0,0,1,1.214-3.75l6.355-.931a2.2,2.2,0,0,0,1.653-1.2L18.21,8.552a2.2,2.2,0,0,1,3.941,0L25,14.3A2.2,2.2,0,0,0,26.657,15.5Z"
                                        transform="translate(-5.486 -7.324)" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.414" height="28.199"
                                    viewBox="0 0 29.414 28.199">
                                    <path
                                        d="M26.657,15.5l6.357.916a2.2,2.2,0,0,1,1.222,3.747l-4.594,4.488a2.2,2.2,0,0,0-.63,1.946l1.093,6.329a2.2,2.2,0,0,1-3.186,2.32l-5.688-2.982a2.2,2.2,0,0,0-2.045,0l-5.681,3a2.2,2.2,0,0,1-3.191-2.313l1.078-6.332a2.2,2.2,0,0,0-.634-1.944L6.153,20.2a2.2,2.2,0,0,1,1.214-3.75l6.355-.931a2.2,2.2,0,0,0,1.653-1.2L18.21,8.552a2.2,2.2,0,0,1,3.941,0L25,14.3A2.2,2.2,0,0,0,26.657,15.5Z"
                                        transform="translate(-5.486 -7.324)" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.414" height="28.199"
                                    viewBox="0 0 29.414 28.199">
                                    <path
                                        d="M26.657,15.5l6.357.916a2.2,2.2,0,0,1,1.222,3.747l-4.594,4.488a2.2,2.2,0,0,0-.63,1.946l1.093,6.329a2.2,2.2,0,0,1-3.186,2.32l-5.688-2.982a2.2,2.2,0,0,0-2.045,0l-5.681,3a2.2,2.2,0,0,1-3.191-2.313l1.078-6.332a2.2,2.2,0,0,0-.634-1.944L6.153,20.2a2.2,2.2,0,0,1,1.214-3.75l6.355-.931a2.2,2.2,0,0,0,1.653-1.2L18.21,8.552a2.2,2.2,0,0,1,3.941,0L25,14.3A2.2,2.2,0,0,0,26.657,15.5Z"
                                        transform="translate(-5.486 -7.324)" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.414" height="28.199"
                                    viewBox="0 0 29.414 28.199">
                                    <path
                                        d="M26.657,15.5l6.357.916a2.2,2.2,0,0,1,1.222,3.747l-4.594,4.488a2.2,2.2,0,0,0-.63,1.946l1.093,6.329a2.2,2.2,0,0,1-3.186,2.32l-5.688-2.982a2.2,2.2,0,0,0-2.045,0l-5.681,3a2.2,2.2,0,0,1-3.191-2.313l1.078-6.332a2.2,2.2,0,0,0-.634-1.944L6.153,20.2a2.2,2.2,0,0,1,1.214-3.75l6.355-.931a2.2,2.2,0,0,0,1.653-1.2L18.21,8.552a2.2,2.2,0,0,1,3.941,0L25,14.3A2.2,2.2,0,0,0,26.657,15.5Z"
                                        transform="translate(-5.486 -7.324)" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.414" height="28.199"
                                    viewBox="0 0 29.414 28.199">
                                    <path
                                        d="M26.657,15.5l6.357.916a2.2,2.2,0,0,1,1.222,3.747l-4.594,4.488a2.2,2.2,0,0,0-.63,1.946l1.093,6.329a2.2,2.2,0,0,1-3.186,2.32l-5.688-2.982a2.2,2.2,0,0,0-2.045,0l-5.681,3a2.2,2.2,0,0,1-3.191-2.313l1.078-6.332a2.2,2.2,0,0,0-.634-1.944L6.153,20.2a2.2,2.2,0,0,1,1.214-3.75l6.355-.931a2.2,2.2,0,0,0,1.653-1.2L18.21,8.552a2.2,2.2,0,0,1,3.941,0L25,14.3A2.2,2.2,0,0,0,26.657,15.5Z"
                                        transform="translate(-5.486 -7.324)" />
                                </svg>
                            </div>
                        </div>
                        <div class="user-icon">
                            <img src="<?php echo $item["testimonial_item_image"]["url"]; ?>"
                                alt="<?php echo $item["testimonial_item_image"]["alt"]; ?>">
                        </div>
                    </div>
                </li>
                <?php } ?>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</section>
<!-- / Review Section -->