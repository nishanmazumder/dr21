<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

//Content
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Footer Content', 'nmbet'),
		'id'               => 'footer_content',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmFooterText',
				'type'     => 'editor',
				'title'    => __('Content Section', 'nmbet'),
				'args'    => array(
					'wpautop'       => false,
					'media_buttons' => false,
					'textarea_rows' => 20,
					'teeny'         => false,
					'quicktags'     => false,
				),
				//'full_width' => true,
				'default'  => __('Descirption for footyer', 'nmbet'),

			),
			array(
				'id'       => 'nmFooterImg',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Footer Image', 'nmbet'),
				'desc'     => esc_html__('Please Add Image.', 'nmbet'),
				//'full_width' => true,
				'default'  => array(
					'url' => get_template_directory() . '/assets/images/common/index-lower-image.png',
				),

			)
		)
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Copyright', 'nmbet'),
		'id'               => 'footer_copy',
		//'desc'             => esc_html__('These are basic cahnges of this site!', 'nmbet'),
		'subsection' => true,
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmCopyright',
				'type'     => 'text',
				'title'    => esc_html__('Copyright', 'nmbet'),
				'desc'     => esc_html__('Please add Copyright.', 'nmbet'),
				'default'  => '© 2020 NISHAN. ALL RIGHTS RESERVED.',
			)
		)
	)
);