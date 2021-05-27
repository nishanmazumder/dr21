<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DR21
 */

?>

<div class="col-md-3 col-sm-6 col-xs-12 nm-no-pad">
	<article id="nm-post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="nm-news-area">
			<div class="nm-news">
				<?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
			</div>
			<div class="nm-news-content">
				<a class="nm-news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<span><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php the_time('j-F-Y g:i a'); ?></span>
			</div>
		</div>
	</article>
</div>