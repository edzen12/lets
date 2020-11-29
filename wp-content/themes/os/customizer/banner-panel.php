<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Последние новости Section
$wp_customize->add_section('os_banners_section', array(
    'priority' => 40,
    'title' => __('Раздел: Баннер', 'os'),
    'panel' => 'os_homepage_setups',
));


//call to action background image
$wp_customize->add_setting('os_banners_bkgimage', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'os_banners_bkgimage', array(
    'label' => __('Баннер фотографии', 'os'),
    'section' => 'os_banners_section',
    'setting' => 'os_banners_bkgimage'
)));
//Services Title
$wp_customize->add_setting('os_banners_medium_title', array(
    'default' => __('Средний заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_banners_medium_title', array(
    'type' => 'text',
    'label' => __('Средний заголовок', 'os'),
    'section' => 'os_banners_section',
    'setting' => 'os_banners_medium_title',
));

//Services Little Title Грант
$wp_customize->add_setting('os_banners_big_title', array(
    'default' => __('Большой заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_banners_big_title', array(
    'type' => 'text',
    'label' => __('Большой заголовок', 'os'),
    'section' => 'os_banners_section',
    'setting' => 'os_banners_big_title',
));

//Services Little Title Грант
$wp_customize->add_setting('os_banners_content', array(
    'default' => __('Контент', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_banners_content', array(
    'type' => 'textarea',
    'label' => __('Контент', 'os'),
    'section' => 'os_banners_section',
    'setting' => 'os_banners_content',
));

//Services Little Title Грант
$wp_customize->add_setting('os_banners_btn', array(
    'default' => __('Связаться', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_banners_btn', array(
    'type' => 'text',
    'label' => __('Кнопка', 'os'),
    'section' => 'os_banners_section',
    'setting' => 'os_banners_little_title_btn',
));

//Services Little Title Грант
$wp_customize->add_setting('os_banners_link', array(
    'default' => __('+996771494083', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_banners_link', array(
    'type' => 'text',
    'label' => __('Номер whatsapp', 'os'),
    'section' => 'os_banners_section',
    'setting' => 'os_banners_link',
));
