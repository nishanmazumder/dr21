<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DR21
 */

?>
<div class="col-md-12">
    <div class="nm-title-area">
        <h1><?php the_title(); ?></h1>

        <div class="nm-post-info">
            <span class="font-weight-bold">Published by: </span><?php the_author(); ?>
            | <span><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php the_time('j-F-Y g:i a'); ?></span>
        </div>

        <div class="nm-post-category">
            <span class="font-weight-bold">Categories: </span>
            <?php
            $categories = get_the_category();
            foreach ($categories as $category) {
                //$cat_id = get_cat_ID($category->name);
                $cat_link = get_category_link($category);
                echo '<a href="' . esc_url($cat_link) . '" style="margin-right: 5px;">' . $category->name . '</a>';
            }
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="col-md-12">
    <div class="nm-post-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
        <!-- <php if (has_post_thumbnail()) :
            the_post_thumbnail('full', array('class' => 'img-responsive'));
        endif; ?> -->
    </div>
</div>

<div class="col-md-12">
    <div class="nm-post-content">
        <?php the_content(); ?>
    </div>
</div>