<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Последние новости Section
$wp_customize->add_section('os_page_about_section', array(
    'priority' => 80,
    'title' => __('Страница: О нас', 'os'),
    'panel' => 'os_homepage_setups',
));


//call to action background image
$wp_customize->add_setting('os_page_about_bkgimage', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'os_page_about_bkgimage', array(
    'label' => __('Баннер фотографии', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_bkgimage'
)));

//Services Little Title Грант
$wp_customize->add_setting('os_page_about_big_title', array(
    'default' => __('Большой заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_about_big_title', array(
    'type' => 'text',
    'label' => __('Большой заголовок', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_big_title',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_about_content', array(
    'default' => __('Контент', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_about_content', array(
    'type' => 'textarea',
    'label' => __('Контент', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_content',
));

//call to action background image
$wp_customize->add_setting('os_page_about_bkgimage2', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'os_page_about_bkgimage2', array(
    'label' => __('Баннер фотографии', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_bkgimage2'
)));


//Services Little Title Грант
$wp_customize->add_setting('os_page_about_big_ic2', array(
    'default' => __('Большой заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_about_big_ic2', array(
    'type' => 'text',
    'label' => __('Большой заголовок', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_big_ic2',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_about_content2', array(
    'default' => __('Контент', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_about_content2', array(
    'type' => 'textarea',
    'label' => __('Контент', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_content2',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_about_big_ic3', array(
    'default' => __('Большой заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_about_big_ic3', array(
    'type' => 'text',
    'label' => __('Большой заголовок', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_big_ic3',
));

//Services Little Title Грант
$wp_customize->add_setting('os_page_about_content3', array(
    'default' => __('Контент', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_about_content3', array(
    'type' => 'textarea',
    'label' => __('Контент', 'os'),
    'section' => 'os_page_about_section',
    'setting' => 'os_page_about_content3',
));