<?php
/*
	Template Name: Media
*/
get_header(); ?>

<!-- Slide -->
<div class="container-fluid nm-container">
    <div class="row">
        <div class="col-md-12">
            <!-- <img class="img-responsive" src="images/common/media-banner.jpg" alt=""> -->
            <!-- <php get_the_post_thumbnail(); ?> -->
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'img-responsive'));
            }
            ?>
        </div>
    </div>
</div>
<!-- End Slide -->

<!-- Start Content -->
<div id="media-bg">
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- marquee -->
                <div class="annoucement">
                    <div class="runningtext">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/announce.png" alt="">
                        <marquee scrolldelay="150">
                            <?php echo $nm3webet['nmHomeAnnouncement']; ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="media-in">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Content -->

<?php get_footer(); ?>