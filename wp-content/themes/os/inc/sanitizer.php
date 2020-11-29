<?php
/**
* Custom Sanitizer Function 
*/

function os_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function os_sanitize_radio_integer( $input){
	$valid_keys = array(
		'1' => __('Yes','os'),
		'0' => __('No','os')
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}

function os_sanitize_radio_teamlayout($input) {
	$valid_keys = array(
		'fullwidth' => __('Full Width', 'os'),
		'halfwidth' => __('Half - Half', 'os')
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}

function os_sanitize_page_layouts($input) {
	$imagepath =  get_template_directory_uri() . '/inc/images/';
	$valid_keys = array(
		'sidebar-left' => $imagepath.'sidebar-left.png',  
		'sidebar-right' => $imagepath.'sidebar-right.png', 
		'sidebar-both' => $imagepath.'sidebar-both.png',
		'sidebar-no' => $imagepath.'sidebar-no.png',
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}
function os_radio_sanitize_enabledisable($input) {
	$valid_keys = array(
		'enable'=>__('Enable', 'os'),
		'disable'=>__('Disable', 'os')
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}
function os_radio_sanitize_align($input) {
	$valid_keys = array(
		'left' => __('Left', 'os'),
		'center' => __('Center', 'os'),
		'right' => __('Right', 'os'),
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}

function os_radio_sanitize_yesno($input) {
	$valid_keys = array(
		'yes'=>__('Yes', 'os'),
		'no'=>__('No', 'os')
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}

function os_radio_sanitize_webpagelayout($input) {
	$valid_keys = array(
		'fullwidth' => __('Full Width', 'os'),
		'boxed' => __('Boxed', 'os')
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}