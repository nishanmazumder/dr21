<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DR21
 */

get_header(); ?>

<!-- Start Content -->
<div id="media-bg" class="nm-news-section">

    <div class="container">

        <div class="row no-gutters">
            <div class="col-md-12">
                <h1><?php wp_title(''); ?></h1>
            </div>

            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/category');
            endwhile;
            ?>

            <!-- Pagination -->
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li><?php nm_post_pagi(); ?></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>
<!-- End Content -->

<?php get_footer();
