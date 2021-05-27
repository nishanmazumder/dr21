<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package 3WEBET
 */

get_header(); ?>

<!-- Start Content -->
<div id="media-bg" class="nm-news-section">
    <div class="container">
        <div class="row no-gutters">

            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'single');
            endwhile;
            ?>

            <!-- sidebar -->
            <!-- <div class="col-md-9">
                <div class="row">
                    <php
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'single');
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <php get_sidebar(); ?>
            </div> -->

        </div>
    </div>
</div>
<!-- End Content -->

<?php get_footer();
