<?php
/*
	Template Name: Profile
*/
get_header(); ?>

<!-- Start Content -->
<div id="media-bg">
    <div class="container">

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