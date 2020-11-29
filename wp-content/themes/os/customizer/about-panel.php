<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Adding the Homepage Setup Panel
$wp_customize->add_panel('os_homepage_setups', array(
    'priority' => '30',
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Настройки страницы', 'os'),
));
//enable disable Bannery section
$wp_customize->add_setting('os_about_setting_option', array(
    'default' => 'disable',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'os_radio_sanitize_enabledisable',
));

$wp_customize->add_control('os_about_setting_option', array(
    'type' => 'radio',
    'label' => __('Чтобы выключить секцию нажмите Выкл', 'os'),
    'section' => 'os_about_section',
    'setting' => 'os_about_setting_option',
    'choices' => array(
        'enable' => __('Вкл', 'os'),
        'disable' => __('Выкл', 'os'),
    ),
));
//About Section

$wp_customize->add_section('os_about_section', array(
    'priority' => 50,
    'title' => __('Раздел: О нас', 'os'),
    'panel' => 'os_homepage_setups',
));
//Services Little Title Грант
$wp_customize->add_setting('os_about_title', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_about_title', array(
    'type' => 'text',
    'label' => __('Заголовок блока О НАС', 'os'),
    'section' => 'os_about_section',
    'setting' => 'os_about_title',
));
//Services Little Title Грант
$wp_customize->add_setting('os_about_content', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_about_content', array(
    'type' => 'textarea',
    'label' => __('Контент блока О НАС', 'os'),
    'section' => 'os_about_section',
    'setting' => 'os_about_content',
));
