<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Последние новости Section
$wp_customize->add_section('os_services_section', array(
    'priority' => 70,
    'title' => __('Раздел: Услуги', 'os'),
    'panel' => 'os_homepage_setups',
));

//enable disable services section
$wp_customize->add_setting('os_services_setting_option', array(
    'default' => 'disable',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'os_radio_sanitize_enabledisable',
));

$wp_customize->add_control('os_services_setting_option', array(
    'type' => 'radio',
    'label' => __('Чтобы выключить секцию нажмите Выкл', 'os'),
    'section' => 'os_services_section',
    'setting' => 'os_services_setting_option',
    'choices' => array(
        'enable' => __('Вкл', 'os'),
        'disable' => __('Выкл', 'os'),
    ),
));

//Services Title
$wp_customize->add_setting('os_services_title', array(
    'default' => __('Заголовок', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_services_title', array(
    'type' => 'text',
    'label' => __('Заголовок', 'os'),
    'section' => 'os_services_section',
    'setting' => 'os_services_title',
));

//Services Title
$wp_customize->add_setting('os_services_desc', array(
    'default' => __('Контент', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_services_desc', array(
    'type' => 'textarea',
    'label' => __('Контент', 'os'),
    'section' => 'os_services_section',
    'setting' => 'os_services_desc',
));

//Services Little Title Грант
$wp_customize->add_setting('os_services_btn_tit', array(
    'default' => __('Далее', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_services_btn_tit', array(
    'type' => 'text',
    'label' => __('Кнопка', 'os'),
    'section' => 'os_services_section',
    'setting' => 'os_services_btn_tit',
));

//Services Little Title Грант
$wp_customize->add_setting('os_services_btn_link', array(
    'default' => __('Ссылка', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_services_btn_link', array(
    'type' => 'text',
    'label' => __('Ссылка', 'os'),
    'section' => 'os_services_section',
    'setting' => 'os_services_btn_link',
));

//select category for Грант
$wp_customize->add_setting('os_services_setting_category', array(
    'default' => '0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(new OS_WP_Customize_Category_Control($wp_customize, 'os_services_setting_category', array(
    'label' => __('Выберите категорию', 'os'),
    'section' => 'os_services_section',
    'setting' => 'os_services_setting_category',
)));