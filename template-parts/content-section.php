<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DR21
 */

?>




    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="h-box">
        <div class="h-img">
          <?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
        </div>
        <div class="h-box-info">
          <div class="pull-left">
            <h4><?php the_title(); ?></h4>
          </div>
          <div class="pull-right">
            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'nmdr21TextUrl', true)); ?>" class="btn-h-ply">
              <?php
              $btnText  = get_post_meta(get_the_ID(), 'nmdr21TextName', true);
              echo esc_html($btnText);
              ?>
            </a>
          </div>
        </div>
      </div>
    </div>

?>