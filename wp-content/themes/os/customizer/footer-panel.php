<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

//News Section
$wp_customize->add_section('os_footer_section', array(
    'priority' => 72,
    'title' => __('Раздел: Подвал сайта', 'os'),
    'panel' => 'os_homepage_setups',
));

//enable disable News section
$wp_customize->add_setting('os_footer_setting_option', array(
    'default' => 'disable',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'os_radio_sanitize_enabledisable',
));

$wp_customize->add_control('os_footer_setting_option', array(
    'type' => 'radio',
    'label' => __('Чтобы выключить секцию нажмите Выкл', 'os'),
    'section' => 'os_footer_section',
    'setting' => 'os_footer_setting_option',
    'choices' => array(
        'enable' => __('Вкл', 'os'),
        'disable' => __('Выкл', 'os'),
    ),
));


//Footer  Title
$wp_customize->add_setting('os_footer_phone_title', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_footer_phone_title', array(
    'type' => 'text',
    'label' => __('Заголовок', 'os'),
    'section' => 'os_footer_section',
    'setting' => 'os_footer_phone_title',
));
//Footer  Title
$wp_customize->add_setting('os_footer_phone', array(
    'default' => __('+996', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_footer_phone', array(
    'type' => 'text',
    'label' => __('Телефон', 'os'),
    'section' => 'os_footer_section',
    'setting' => 'os_footer_phone',
));
//Footer  Title
$wp_customize->add_setting('os_footer_email_title', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_footer_email_title', array(
    'type' => 'text',
    'label' => __('Заголовок', 'os'),
    'section' => 'os_footer_section',
    'setting' => 'os_footer_email_title',
));
//Footer  Title
$wp_customize->add_setting('os_footer_email', array(
    'default' => __('@gmail.com', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_footer_email', array(
    'type' => 'text',
    'label' => __('Email', 'os'),
    'section' => 'os_footer_section',
    'setting' => 'os_footer_email',
));

//Footer  Title
$wp_customize->add_setting('os_footer_social', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_footer_social', array(
    'type' => 'text',
    'label' => __('Название соц', 'os'),
    'section' => 'os_footer_section',
    'setting' => 'os_footer_social',
));

//Footer  Title
$wp_customize->add_setting('os_footer_more', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_footer_more', array(
    'type' => 'text',
    'label' => __('Кнопка далее', 'os'),
    'section' => 'os_footer_section',
    'setting' => 'os_footer_more',
));