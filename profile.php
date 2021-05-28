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

<script>
    $('.count').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 7000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  </script>

<?php get_footer(); ?>