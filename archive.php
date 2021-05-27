<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3WEBET
 */

get_header();
?>
<!---------main body--------------->
<main>
    <div class="container nmBlog">
        <div class="row no-gutters">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
