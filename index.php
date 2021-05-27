<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
            <div class="col-md-12 nm-no-pad">
                <h1 class="nm-title"><?php wp_title(''); ?></h1>
            </div>

            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content');
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
