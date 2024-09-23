<?php
/*
  # ===========================================
  # content-none.php
  #
  # The template for missing contents.
  # ===========================================
 */
?>
<div class="text-center">
    <div class="jumbotron">
        <div class="alert alert-warning" role="alert">
            <?php echo esc_html_e('Nothing Found', 'asycom') ?>
        </div>
        <?php
        get_search_form();
        ?>
    </div>
</div>