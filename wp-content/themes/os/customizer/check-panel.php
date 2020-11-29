<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//Последние новости Section
$wp_customize->add_section('os_check_section', array(
    'priority' => 10,
    'title' => __('Раздел: Шапка сайта-иконки', 'os'),
    'panel' => 'os_homepage_setups',
));


$wp_customize->add_setting('os_check_1_check', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_check_1_check', array(
    'type' => 'text',
    'label' => __('Номер телефона', 'os'),
    'section' => 'os_check_section',
    'setting' => 'os_check_1_check',
));


$wp_customize->add_setting('os_check_2_check', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_check_2_check', array(
    'type' => 'text',
    'label' => __('Инстаграм', 'os'),
    'section' => 'os_check_section',
    'setting' => 'os_check_2_check',
));

$wp_customize->add_setting('os_check_3_check', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_check_3_check', array(
    'type' => 'text',
    'label' => __('WhatsApp', 'os'),
    'section' => 'os_check_section',
    'setting' => 'os_check_3_check',
));

$wp_customize->add_setting('os_check_4_check', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_check_4_check', array(
    'type' => 'text',
    'label' => __('Telegram', 'os'),
    'section' => 'os_check_section',
    'setting' => 'os_check_4_check',
));

$wp_customize->add_setting('os_check_5_check', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_check_5_check', array(
    'type' => 'text',
    'label' => __('E-mail', 'os'),
    'section' => 'os_check_section',
    'setting' => 'os_check_5_check',
));

$wp_customize->add_setting('os_check_6_check', array(
    'default' => __('', 'os'),
    'sanitize_callback' => 'os_sanitize_text',
));

$wp_customize->add_control('os_check_6_check', array(
    'type' => 'text',
    'label' => __('Местоположение', 'os'),
    'section' => 'os_check_section',
    'setting' => 'os_check_6_check',
));