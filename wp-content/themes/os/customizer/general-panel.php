<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Adding the Default Setup Panel
$wp_customize->add_panel('os_default_setups', array(
    'priority' => '10',
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Основные настройки', 'os'),
));

//Add Default Sections to General Panel
$wp_customize->get_section('title_tagline')->panel = 'os_default_setups'; //priority 20
$wp_customize->get_section('colors')->panel = 'os_default_setups'; //priority 40
$wp_customize->get_section('header_image')->panel = 'os_default_setups'; //priority 60
$wp_customize->get_section('background_image')->panel = 'os_default_setups'; //priority 80
$wp_customize->get_section('static_front_page')->panel = 'os_default_setups'; //priority 120