<?php

/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Banner', 'nmbet'),
		'id'               => 'home_banner',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmBannerUpload',
				'type'     => 'select',
				'title'    => __('Upload Banner', 'nmbet'),
				'options'  => array(
					'1' => 'Banner Image',
					'2' => 'Slider'
				),
				'default' => 1,
			),
			array(
				'id'       => 'nmBannerImage',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Banner Image', 'nmbet'),
				'desc'     => esc_html__('Please upload Banner Image.', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory() . '/assets/images/common/main-banner-1.jpg',
				),
				'required' => array('nmBannerUpload','equals','1')

			),
			array(
				'id'       => 'nmhomeSlider',
				'type'     => 'text',
				'title'    => esc_html__('Slider', 'nmbet'),
				'desc'     => esc_html__('Please add Slider shorcode.', 'nmbet'),
				'default'  => '[smartslider3 slider="2"]',
				'required' => array('nmBannerUpload','equals','2')
			)
		)
	)
);

//Announcement
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Announcement', 'nmbet'),
		'id'               => 'home_content',
		'desc'             => esc_html__('These fields for Announcement!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmHomeAnnouncement',
				'type'     => 'editor',
				'title'    => __('Announcement', 'nmbet'),
				'args'    => array(
					'wpautop'       => false,
					'media_buttons' => false,
					'textarea_rows' => 20,
					'teeny'         => false,
					'quicktags'     => false,
				),
				'default'  => __('We proudly announce Dirk Kuyt as 3webet official regional brand ambassador 2021.', 'nmbet'),

			)
		)
	)
);

//Post type
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Post', 'nmbet'),
		'id'               => 'home_post',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmdr2BlocksCat',
				'type'     => 'select',
				'url'      => true,
				'title'    => __('Sections', 'nmbet'),
				'desc'     => esc_html__('Please select category for Profile.', 'nmbet'),
				'data' => 'terms',
				'args' => array(
					'taxonomies' => array('blocks-category'),
				),
				'default'  => 'Profile'

			),
			array(
				'id'       => 'nmdr2SoicalCat',
				'type'     => 'select',
				'url'      => true,
				'title'    => __('Social', 'nmbet'),
				'desc'     => esc_html__('Please select category for Social.', 'nmbet'),
				'data' => 'terms',
				'args' => array(
					'taxonomies' => array('blocks-category'),
				),
				'default'  => 'Visit'

			)
		)
	)
);


//Join Now
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Join Now', 'nmbet'),
		'id'               => 'nm_header_btn',
		'desc'             => esc_html__('Join Now button fro header.', 'nmbet'),
		'subsection' => true,
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nm_header_btn_text',
				'type'     => 'text',
				'title'    => esc_html__('Button Text', 'nmbet'),
				// 'desc'     => esc_html__('Please add Copyright.', 'nmbet'),
				'default'  => 'Join Now',
			),
			array(
				'id'       => 'nm_header_btn_link',
				'type'     => 'text',
				'title'    => esc_html__('Button Link', 'nmbet'),
				// 'desc'     => esc_html__('Please add Copyright.', 'nmbet'),
				'default'  => '#',
			)
		)
	)
);