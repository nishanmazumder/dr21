<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DR21
 */
global $nm3webet;
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<title>Dirk Kuyt x 3webet</title>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="header">
		<!--header -->
		<div class="container nm-container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="nm-header">

						<?php
						//the_custom_logo();
						if ($nm3webet['nm3betLogoUpload']) : ?>
							<a href="<?php echo esc_url(home_url('/')); ?>"><img class="nm-logo" src="<?php echo $nm3webet['nm3betLogoUpload']['url']; ?>"></a>
							<?php else :


							if (is_front_page() && is_home()) :
							?>
								<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
							else :
							?>
								<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
							<?php
							endif;
							$nmbet_description = get_bloginfo('description', 'display');
							if ($nmbet_description || is_customize_preview()) :
							?>
								<p class="site-description">
									<?php echo $nmbet_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?>
								</p>
							<?php endif; ?>
						<?php endif; ?>


						<input type="button" value="<?php echo $nm3webet['nm_header_btn_text']; ?>" class="btn-register" onclick="location.href='<?php echo $nm3webet['nm_header_btn_link']; ?>'">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- end headerwrapper -->
	<!-- NAV MENU CSS -->
	<div class="container-fluid nm-container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="menuWrapper wsmenu clear">
					<div class="menupart ">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'menu'        => 'main-menu',
								'container' => false,
								'menu_class'        => 'wsmenu-list'
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END NAV MENU CSS -->

	<!-- Slide -->
	<?php if(is_front_page()){ ?>
	<div class="container-fluid nm-container">
		<div class="row">
			<div class="col-md-12 nm-slider">
				<?php if ($nm3webet['nmBannerUpload'] == 1) { ?>
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-banner-1.jpg" alt="">
				<?php } else { 
					echo do_shortcode($nm3webet['nmhomeSlider']);
				} ?>

			</div>
		</div>
	</div>
	<?php } ?>
	<!-- End Slide -->