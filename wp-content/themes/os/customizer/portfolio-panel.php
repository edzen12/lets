<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Последние новости Section
$wp_customize->add_section('os_portfolio_section', array(
    'priority' => 70,
    'title' => __('Раздел: Портфолио', 'os'),
    'panel' => 'os_homepage_setups',
));

//enable disable services section
$wp_customize->add_setting('os_portfolio_setting_option', array(
    'default' => 'disable',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'os_radio_sanitize_enabledisable',
));

$wp_customize->add_control('os_portfolio_setting_option', array(
    'type' => 'radio',
    'label' => __('Чтобы выключить секцию нажмите Выкл', 'os'),
    'section' => 'os_portfolio_section',
    'setting' => 'os_portfolio_setting_option',
    'choices' => array(
        'enable' => __('Вкл', 'os'),
        'disable' => __('Выкл', 'os'),
    ),
));

//Services Title
$wp_customize->add_setting('os_portfolio_title', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_portfolio_title', array(
    'type' => 'text',
    'label' => __('Заголовок Портфолио', 'os'),
    'section' => 'os_portfolio_section',
    'setting' => 'os_portfolio_title',
));

//Services Little Title Грант
$wp_customize->add_setting('os_portfolio_content', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_portfolio_content', array(
    'type' => 'textarea',
    'label' => __('Контент Портфолио', 'os'),
    'section' => 'os_portfolio_section',
    'setting' => 'os_portfolio_content',
));
//Services Little Title Грант
$wp_customize->add_setting('os_portfolio_btn_link', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_portfolio_btn_link', array(
    'type' => 'text',
    'label' => __('Ссылка Портфолио', 'os'),
    'section' => 'os_portfolio_section',
    'setting' => 'os_portfolio_btn_link',
));
//Services Little Title Грант
$wp_customize->add_setting('os_portfolio_btn_name', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_portfolio_btn_name', array(
    'type' => 'text',
    'label' => __('Текст Кнопки Портфолио', 'os'),
    'section' => 'os_portfolio_section',
    'setting' => 'os_portfolio_btn_name',
));
//select category for Грант
$wp_customize->add_setting('os_portfolio_setting_category', array(
    'default' => '0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control(new OS_WP_Customize_Category_Control($wp_customize, 'os_portfolio_setting_category', array(
    'label' => __('Выберите категорию', 'os'),
    'section' => 'os_portfolio_section',
    'setting' => 'os_portfolio_setting_category',
)));