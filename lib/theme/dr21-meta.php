<?php

add_action( 'cmb2_admin_init', 'dr21_metabox' );
/**
 * Define the metabox and field configurations.
 */
function dr21_metabox() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'nm_game_metabox',
		'title'         => __( 'Section Content', 'cmb2' ),
		'object_types'  => array( 'blocks', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// BTN text field
	$cmb->add_field( array(
		'name'       => __( 'Button', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => 'nmdr21TextName',
		'type'       => 'text',
		'default' => 'More Info',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

	// BTN URL field
	$cmb->add_field( array(
		'name' => __( 'URL', 'cmb2' ),
		//'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'nmdr21TextUrl',
		'type' => 'text_url'
	) );
}