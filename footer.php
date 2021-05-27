<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DR21
 */
global $nm3webet;
?>

  <!-- Copyright -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="text-center copyright2"><?php echo $nm3webet['nmCopyright']; ?></div>
      </div>
    </div>
  </div>
  <!-- End copyright -->

<?php wp_footer() ?>
</body>

</html>