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
		'title'            => esc_html__('Site Identity', 'nmbet'),
		'id'               => 'general_sub',
		//'desc'             => esc_html__('These are basic cahnges of this site!', 'nmbet'),
		//'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nm3betLogoUpload',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Upload Logo', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory() . './assets/images/logo.png',
				),
			),
			array(
				'id'       => 'nm_fav_ico',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Site Icon', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory() . './assets/images/favicon.ico',
				),
			),
			array(
				'id'       => 'nm404',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('404 Banner', 'nmbet'),
				// 'default'  => array(
				// 	'url' => get_template_directory() . '/src/assets/img/3welogo.png',
				// ),
			)
		)
	)
);