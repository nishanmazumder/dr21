<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3WEBET
 */

get_header();
?>
<!---------main body--------------->

<!-- Content -->
<div id="box-content">
    <div class="container nm-container">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer();