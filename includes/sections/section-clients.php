<?php
/*
  # ===========================================
  # 
  # clients Section
  # 
  # ===========================================
 */
?>
<?php 

$our_clients_title = THEMEOPTIONS['our_clients_title'];
$our_clients_items = THEMEOPTIONS['our_clients'];
?>
<!--  clients Section -->
<section class="work-us">
    <div class="title-wrapper container">
        <h2 class="title"><?php echo $our_clients_title; ?></h2>
    </div>
    <div class="splide container">
        <div class="splide__track">
            <ul class="splide__list">
                <?php if( !empty( $our_clients_items ) ) : ?>
                <?php foreach ( $our_clients_items as $key => $item ) { ?>

                <li class="splide__slide">
                    <div class="card">
                        <img src="<?php echo $item["client_logo"]["url"] ?>"
                            alt="<?php echo $item["client_logo"]["alt"]; ?>"
                            title="<?php echo $item["client_name"]; ?>" />
                    </div>
                </li>

                <?php } ?>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</section>
<!-- / clients Section -->