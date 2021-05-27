<?php
/*
	Template Name: Home
*/
get_header(); ?>

<!-- Content -->
<div id="box-content">
    <div class="container nm-container">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- marquee -->
                <div class="annoucement">
                    <div class=" clearfix">
                        <div class="runningtext">
                            <marquee scrolldelay="150">
                                <?php echo $nm3webet['nmHomeAnnouncement']; ?>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <div class="row nm-section">
            <?php
            $blocks = $nm3webet['nmdr2BlocksCat'];
            $blocksQuery = new WP_Query(
                array(
                    'post_type'     => 'blocks',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'blocks-category',
                            'field'    => 'id',
                            'terms'    => $blocks,
                        ),
                    ),
                )
            );

            if ($blocksQuery->have_posts()) :
                while ($blocksQuery->have_posts()) : $blocksQuery->the_post();
                    get_template_part('template-parts/content', 'section');
                endwhile;
            else :
                echo '<h1 style="color: #fff; font-size: 28px;">Post Not Found!</h1>';
            endif; ?>
        </div>

        <!-- Social -->
        <div class="row nm-social">
            <?php
            $social = $nm3webet['nmdr2SoicalCat'];
            $socialQuery = new WP_Query(
                array(
                    'post_type'     => 'blocks',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'blocks-category',
                            'field'    => 'id',
                            'terms'    => $social,
                        ),
                    ),
                )
            );

            if ($socialQuery->have_posts()) :
                while ($socialQuery->have_posts()) : $socialQuery->the_post();
                    get_template_part('template-parts/content', 'social');
                endwhile;
            else :
                echo '<h1 style="color: #fff; font-size: 28px;">Post Not Found!</h1>';
            endif;
            ?>
        </div>
    </div>
</div>
<!--END Content -->

<!-- Start QR -->
<div id="home-qr">
    <div class="container nm-container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="pull-left hrq-2">
                    <?php echo $nm3webet['nmFooterText']; ?>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="pull-left hrq-3 ">
                    <img src="<?php echo $nm3webet['nmFooterImg']['url']; ?>" class="img-responsive" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END QR -->

<?php get_footer(); ?>