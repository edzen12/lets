<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Последние новости Section
$wp_customize->add_section('os_page_services_section', array(
    'priority' => 82,
    'title' => __('Страница: Услуги', 'os'),
    'panel' => 'os_homepage_setups',
));

//enable disable services section
$wp_customize->add_setting('os_page_services_setting_option', array(
    'default' => 'disable',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'os_radio_sanitize_enabledisable',
));

$wp_customize->add_control('os_page_services_setting_option', array(
    'type' => 'radio',
    'label' => __('Чтобы выключить секцию нажмите Выкл', 'os'),
    'section' => 'os_page_services_section',
    'setting' => 'os_page_services_setting_option',
    'choices' => array(
        'enable' => __('Вкл', 'os'),
        'disable' => __('Выкл', 'os'),
    ),
));

//call to action background image
$wp_customize->add_setting('os_page_services_bkgimage', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'os_page_services_bkgimage', array(
    'label' => __('Баннер фотографии', 'os'),
    'section' => 'os_page_services_section',
    'setting' => 'os_page_services_bkgimage'
)));


//Services Little Title Грант
$wp_customize->add_setting('os_page_services_big_title', array(
    'default' => __('Большой заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_page_services_big_title', array(
    'type' => 'text',
    'label' => __('Большой заголовок', 'os'),
    'section' => 'os_page_services_section',
    'setting' => 'os_page_services_big_title',
));


//select category for Грант
$wp_customize->add_setting('os_page_services_setting_category', array(
    'default' => '0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(new OS_WP_Customize_Category_Control($wp_customize, 'os_page_services_setting_category', array(
    'label' => __('Выберите категорию', 'os'),
    'section' => 'os_page_services_section',
    'setting' => 'os_page_services_setting_category',
)));
