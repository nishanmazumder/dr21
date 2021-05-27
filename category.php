<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 3WEBET
 */

get_header(); ?>

<!-- Start Content -->
<div id="media-bg" class="nm-news-section">

    <div class="container">

        <div class="row">
            <div class="col-md-12 nm-no-pad">
                <h1 class="nm-title">Category: <?php wp_title(''); ?></h1>
            </div>

            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'category');
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
