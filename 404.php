<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DR21
 */

get_header();
?>

<!-- Content -->
<div id="box-content">
    <div class="container nm-container">
        <?php if ($nm3webet['nm404']) : ?>
            <img id="" src="<?php echo $nm3webet['nm404']['url']; ?>">
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
